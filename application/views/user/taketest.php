<?php
	$paper = $array['paper'];
	$ques = $array['ques'];
	$user = $array['user'];
?>
<html lang="en">
<head>
<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.ico">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ONLINE TEST | VBCADONI</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>userassets/css/style.css">
<script>
var paper = <?php echo json_encode($paper) ; ?>;
var question = <?php echo json_encode($ques) ; ?>;
var user = <?php echo json_encode($user) ; ?>;
var q_index=0;
var que='';
var activeSection=[];
var timeRemaining=paper.paper_duration*60;
var testId=0;
var state = {
	answered: 0,
	notAnswered: 0,
	forReview: 0,
	ansReview: 0,
	notVisited: question.length,
}
function section(sec_id){
	activeSection=[];
	question.find((q)=>{
		if(q.q_paper_section == sec_id){
			activeSection.push(q)
		}
	});
	q_index=0;
	que = activeSection[q_index];
	exploreQuestion();
	questionList();
}
$(document).ready(function(){
	section(1);
	substituteState();
	startTimer();
	$('#user_name').text(user.user_name);
	$('#user_id').text(user.user_id);
	console.log('paper: ', paper);
	console.log('question: ', question);
	console.log('user: ', user);
});
</script>
</head>
<body>
	<div class="container-fluid">
		<div class="row taketestup">
			<div class="col-sm-8 pull-left paperblock">
        <ul>
					<?php
						if ($paper['paper_section_1']) {
							echo "<li onClick='section(1);'><b>".$paper['paper_section_1']."</b></li>";
						}
						if ($paper['paper_section_2']) {
							echo "<li onClick='section(2);'><b>".$paper['paper_section_2']."</b></li>";
						}
						if ($paper['paper_section_3']) {
							echo "<li onClick='section(3);'><b>".$paper['paper_section_3']."</b></li>";
						}
						if ($paper['paper_section_4']) {
							echo "<li onClick='section(4);'><b>".$paper['paper_section_4']."</b></li>";
						}
						if ($paper['paper_section_5']) {
							echo "<li onClick='section(5);'><b>".$paper['paper_section_5']."</b></li>";
						}
					?>
        </ul>
	    </div>
			<div class="col-sm-4">
				<h3 class="pull-right"><b><?php echo $paper['paper_name'];?></b></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<form method="post" action="<?= site_url('paper/submittest');?>" id="testform">
					<div class="col-sm-12" class="question">
						<div class="row" style="border:1px solid black;padding:10px;">
							<b>Q.<span id="q_index">1</span></b>
						</div>
						<div class="row" style="min-height:510px;border:1px solid black;">
							<div class="col-md-7" id="passage" style="min-height:509px;border:1px solid black;padding:10px;display:none">

							</div>
							<div id="question" class="col-sm-5">
								<p></p>
								<label>(a). <input type="radio" name="option" class="ans" value="a"><span class="opt-1"></span></label><br><br>
								<label>(b). <input type="radio" name="option" class="ans" value="b"><span class="opt-2"></span></label><br><br>
								<label>(c). <input type="radio" name="option" class="ans" value="c"><span class="opt-3"></span></label><br><br>
								<label>(d). <input type="radio" name="option" class="ans" value="d"><span class="opt-4"></span></label><br><br>
								<label>(e). <input type="radio" name="option" class="ans" value="e"><span class="opt-5"></span></label><br><br>
							</div>
						</div>
						<div class="row" style="border:1px solid black;padding:15px;">
							<a class="btn btn-primary" style="border-radius:0px; margin-right:25px;" onClick="resetAns(false);">Clear Response</a>
							<a class="btn btn-primary" style="border-radius:0px; margin-right:25px;" onClick="next(true);">Mark For review & Next</a>
							<a class="btn btn-primary" style="border-radius:0px; margin-right:25px;" onClick="next(false);">Save & Next</a>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-4 ">
				<div class="row" style="border:2px solid gray;padding:8px;" >
					<div class="col-md-2"><img src="<?= base_url('img/user.png');?>" class="img img-responsive img-circle userimgtest"/></div>
					<div class="col-md-6">
						<label>Name: <span id="user_name"></span></label><br>
						<label>Reg.Id: <span id="user_id"></span></label>
					</div>
					<div class="col-md-4">
						<p>Time Left</p>
						<span id='timer'> </span>
					</div>
				</div>
				<div class="row" style="height:250px;border:2px solid gray;padding:8px;" >
					<div class="col-md-6"  style="margin:0px;padding:5px;">
						<div class="col-md-3" style="margin:0px;padding:0px;">
							<div class="circle" style="background:green;color:white; "><span id="answered">0</span></div>
						</div>
						<div class="col-md-9" style="padding-top:8px;">
							Answered
						</div>
					</div>
					<div class="col-md-6"  style="margin:0px;padding:5px;">
						<div class="col-md-3" style="margin:0px;padding:0px;">
							<div class="circle" style="background:red;color:white; "><span id="notAnswered">0</span></div>
						</div>
						<div class="col-md-9" style="padding-top:8px;">
							Not Answered
						</div>
					</div>
					<div class="col-md-6"  style="margin:0px;padding:5px;">
						<div class="col-md-3" style="margin:0px;padding:0px;">
							<div class="circle" style="background:grey; "><span id="notVisited">0</span></div>
						</div>
						<div class="col-md-9"style="padding-top:8px;">
							Not Visited
						</div>
					</div>
					<div class="col-sm-6"  style="margin:0px;padding:5px;">
						<div class="col-sm-3" style="margin:0px;padding:0px;">
							<div class="circle" style="background:violet; "><span id="forReview">0</span></div>
						</div>
						<div class="col-sm-9" style="padding-top:8px;">
							Marked For Review
						</div>
					</div>
					<div class="col-sm-12"  style="margin:0px;padding:5px;">
						<div class="col-sm-2" style="margin:0px;padding:0px;">
							<div class="circle" style="background: violet; "><span id="ansReview">0</span></div>
						</div>
						<div class="col-sm-10" style="padding-top:8px;">
							Answered and Marked For Review
						</div>
					</div>
				</div>

				<div class="row"  style="border:1px solid black;margin-top:10px;padding:5px;">
					<p style="font-size:20px;">Questions</p>
						<div id="que_list">

						</div>
				</div>

				<button type="button" class="btn btn-success btn-lg" data-backdrop="static" data-toggle="modal" onClick="confirmSubmit(false);" style="border-radius:0px;margin-top:20px;"data-target="#myModal">Submit Test</button>
				<!-- Modal -->
				<div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<div class="modal-body" id="confirmSubmit">

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" onClick="saveTest(true);">Submit</button>
								<button type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<script>
var answered = [];
function confirmSubmit(timeup) {
	if (timeup) {
		$('#confirmSubmit').html("<p><b>Your time is up. Please submit your test?</b></p>");
		$('#confirmSubmit .btn-close').hide();
	} else {
		$('#confirmSubmit').html("<p><b>Do you really want to submit your test?</b></p>");
		$('#confirmSubmit .btn-close').show();
	}
}
function loader(t){
	if(t){
		$('#confirmSubmit').html("<i class='fa fa-spinner' aria-hidden='true'></i>");
		$('#myModal .modal-footer').hide();
	}else{
		$('#confirmSubmit').html("<div style='font-size:25px'>Your test submitted successfully...</div>");
	}
}
function saveTest(finised) {
	var correctAns = 0, wrongAns = 0;
	answered.map((ans) => {
		ans.result ? correctAns++ : wrongAns++ ;
	});
	var testData = {
		testId: testId,
		user_id: user.user_id,
		paper_id: paper.paper_id,
		answer: JSON.stringify(answered),
		correct_ans: correctAns,
		wrong_ans: wrongAns,
		time_taken: ((paper.paper_duration*60) - timeRemaining)/60,
		total_que: paper.paper_num_que,
		attempted_que: answered.length,
		completed: finised
	}
	if (finised) {
		loader(true);
	}
	$.ajax({
		url: "<?php echo site_url('paper/saveTest');?>",
	  method: "POST",
	  data: testData,
		success: function(result){
			testId = result;
			if (finised) {
				loader(false);
			}
    }
	});
}
function questionList() {
	var num = [];
	activeSection.map((val, i) => {
		var bgColor = 'gray';
		var ans = answered.find((q)=>{
			return val.q_id === q.q_id;
		});
		if (ans && ans.status == 'answered and forReview') {
			bgColor = 'violet';
		} else if (ans && ans.status == 'forReview') {
			bgColor = 'violet';
		} else if (ans && ans.status == 'answered') {
			bgColor = 'green';
		} else if (ans && ans.status == 'not answered') {
			bgColor = 'red';
		}
		num.push("<div class='list-num' style=''><div class='circle' onClick='gotoQuestion("+i+");' style='background: "+bgColor+";'><span style='color:white;'><b>"+val.q_index+"</b></span></div>");
	});
	$('#que_list').html(num);
}
function gotoQuestion(i) {
	q_index = i;
	que = activeSection[q_index];
	exploreQuestion();
}
function resetAns(che)
{
	 $("input:radio[class^=ans]").each(function() {
		 if (this.value==che){
			 this.checked = true;
		 }else{
			 this.checked = false;
		 }
		});
}
function substituteState() {
	$('#answered').text(state.answered);
	$('#notAnswered').text(state.notAnswered);
	$('#notVisited').text(state.notVisited);
	$('#forReview').text(state.forReview);
	$('#ansReview').text(state.ansReview);
}
function updateStatus(ans, pre) {
	if (!pre) {
		state.notVisited = state.notVisited - 1;
	} else if (pre.status == 'answered and forReview') {
		state.ansReview = state.ansReview - 1
	} else if (pre.status == 'forReview') {
		state.forReview = state.forReview - 1;
	} else if (pre.status == 'answered') {
		state.answered = state.answered - 1;
	} else if (pre.status == 'not answered') {
		state.notAnswered = state.notAnswered - 1;
	}
	if (ans.status == 'answered and forReview') {
		state.ansReview = state.ansReview + 1
	} else if (ans.status == 'forReview') {
		state.forReview = state.forReview + 1;
	} else if (ans.status == 'answered') {
		state.answered = state.answered + 1;
	} else if (ans.status == 'not answered') {
		state.notAnswered = state.notAnswered + 1;
	}
	substituteState();
}
function next(review){
	var check = $("input:radio[name=option]:checked").val();
	var status = '';
	if (review && check) {
		status = 'answered and forReview';
	} else if (review && !check) {
		status = 'forReview';
	} else if (!review && check) {
		status = 'answered';
	} else if (!review && !check) {
		status = 'not answered';
	}
	var ans = {
		q_id: que.q_id,
		answer: check,
		result: check == que.q_answer,
		review: review,
		status: status
	}
	var index = answered.findIndex((obj, i, array) => {
		return obj.q_id === ans.q_id;
	});
	if(q_index + 1 <= activeSection.length){
		if (index < 0) {
			updateStatus(ans);
			answered.push(ans);
		} else {
			updateStatus(ans, answered[index]);
			answered[index] = ans;
		}
	}
	if(q_index + 1 < activeSection.length){
		q_index = q_index + 1;
	}
	que = activeSection[q_index];
	exploreQuestion();
	questionList();
	saveTest(false);
}
function exploreQuestion() {
	$('#q_index').text(que.q_index);
	$('#question p').text(que.q_name);
	$('.opt-1').text(que.q_optiona);
	$('.opt-2').text(que.q_optionb);
	$('.opt-3').text(que.q_optionc);
	$('.opt-4').text(que.q_optiond);
	$('.opt-5').text(que.q_optione);
	if (que.q_passage !== '') {
		$('#passage').show().text(que.q_passage);
		$('#question').addClass('col-md-5').removeClass('col-md-12');
	} else {
		$('#passage').hide().text('');
		$('#question').addClass('col-md-12').removeClass('col-md-5');
	}
	resetAns(false);
	answered.find((q)=>{
		if(que.q_id === q.q_id){
			resetAns(q.answer);
		}
	});
}
function startTimer() {
    var timer = paper.paper_duration * 60, minutes, seconds;
    var intervalId = setInterval(function () {
				timeRemaining = timer;
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        $('#timer').text(minutes + ":" + seconds);

        if (--timer < 0) {
					// saveTest(true);
					confirmSubmit(true);
					clearInterval(intervalId);
        }
    }, 1000);
}
</script>

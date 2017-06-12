<!DOCTYPE html>
<html lang="en">
<head>
<title>ONLINE TEST | VBCADONI</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>userassets/css/style.css">
</head>
<body>
<?php
	$paper		=		$array['paper'];
	$ques		=		$array['ques'];
	$user		=		$array['user'];
	/*echo "<pre>";
	print_r($paper);
	print_r($ques);*/
?>
<!--<div class="container">
	<div class="row">
		<br>
		<br>
		<br>
		<br>
		<br>

		 <table class="table table-responsive table-bordered">
			<tr>
				<th><h3>Instructions<h3></th>
			</tr>
			<tr>
				<td style="padding:30px;"><?php echo $paper['paper_instruction'];?>	</td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" > I've read all the instructions carefully and abide by them.
					<br>
					<br>
					<button>Start Test</button>
				</td>
			</tr>
		 </table>
	</div>
</div>-->
<div class="container-fluid">
	<div class="row taketestup">
		<div class="col-sm-8 pull-left paperblock">
            <ul>
                <li><b>Reasoning</b></li>
                <li><b>Quantitative Aptitude</b></li>
                <li><b>English laguange</b></li>
            </ul>
        </div>
		<div class="col-sm-4">
			<h3 class="pull-right"><b><?php echo $paper['paper_name'];?></b></h3></div>
		</div>

	<div class="row">
		<div class="col-md-8">
			<?php
				$i=0;
				$j=0;
				//echo $_SESSION['logged_id'];
				foreach($ques as $x)
				{
					$q_id[]=$x['q_id'];
				}
				$count	=	count($q_id);
				$total	=	count($q_id);
				?>
				<input type="hidden" id="qdivid" value="<?php echo $q_id['0'];?>">
				<?php
				$k=0;
				foreach($ques as $x)
				{
					?>
					<form method="post" action="<?= site_url('paper/submittest');?>" id="testform">
					<div class="col-sm-12" id="<?php echo $x['q_id'];?>" class="question" style="display:none;">
						<div class="row" style="border:1px solid black;padding:10px;">
							<b>Q.<?php echo ++$i;?></b>
						</div>
						<div class="row" style="min-height:510px;border:1px solid black;">
							<div class="col-sm-7" style="min-height:509px;border:1px solid black;padding:10px;">
								<?php
								if($x['q_passage']!='')
								{
									echo $x['q_passage'];
								}
								else
								{
									echo $x['q_name'];
								}
								?>
							</div>
							<div class="col-sm-5">
								<p>
									<?php
										if($x['q_passage']!='')
										{
											echo $x['q_name'];
										}

									?>
								</p>
								<input type="hidden" name="paper_slug" value="<?php echo  $paper['paper_slug'];?>">
								<input type="hidden" name="ans_user_id" value="<?php echo $_SESSION['logged_id'];?>">

								<input type="hidden" name="ans_q_id[]" value="<?php echo $x['q_id'];?>"/>
								<label>(a). <input type="radio" name="ans_answer[<?= $k;?>]" class="ans<?php echo $x['q_id'];?>" value="a">	<?php echo $x['q_optiona'];?></label><br><br>
								<label>(b). <input type="radio" name="ans_answer[<?= $k;?>]" class="ans<?php echo $x['q_id'];?>"  value="b">	<?php echo $x['q_optionb'];?></label><br><br>
								<label>(c). <input type="radio" name="ans_answer[<?= $k;?>]" class="ans<?php echo $x['q_id'];?>" value="c">	<?php echo $x['q_optionc'];?></label><br><br>
								<label>(d). <input type="radio" name="ans_answer[<?= $k;?>]" class="ans<?php echo $x['q_id'];?>" value="d">	<?php echo $x['q_optiond'];?></label><br><br>
								<label>(e). <input type="radio" name="ans_answer[<?= $k++;?>]" class="ans<?php echo $x['q_id'];?>" value="e">	<?php echo $x['q_optione'];?></label><br><br>

							</div>

						</div>
						<div class="row" style="border:1px solid black;padding:15px;">
							<a class="btn btn-primary" style="border-radius:0px; margin-right:25px;" onClick="clearresponse();">Clear Response</a>
							<!--<button class="btn btn-primary" style="border-radius:0px; margin-right:25px;">Mark For review & Next</button>-->
							<a class="btn btn-primary" style="border-radius:0px; margin-right:25px;" onClick="shownext('<?php echo $q_id[$j];?>','<?php if(isset($q_id[++$j])){echo @$q_id[$j];}else{echo @$q_id['0'];}?>');">Save & Next</a>
						</div>
					</div>
			<?php
				}

			?>

		</div>
		<div class="col-md-4 ">
			<div class="row" style="border:2px solid gray;padding:8px;" >
				<div class="col-md-2"><img src="<?= base_url('img/user.png');?>" class="img img-responsive img-circle userimgtest"/></div>
				<div class="col-md-6">
					<label>Name: <?= $user['user_name'];?></label><br>
					<label>Reg.Id: <?= $user['user_id'];?></label>
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
						<div class="circle" style="background:red;color:white; "><span id="not-answered"><?php echo $count;?></span></div>
					</div>
					<div class="col-md-9" style="padding-top:8px;">
						Not Answered
					</div>
				</div>
				<div class="col-md-6"  style="margin:0px;padding:5px;">
					<div class="col-md-3" style="margin:0px;padding:0px;">
						<div class="circle" style="background:grey; "><span id=""><?php echo --$count;?></span></div>
					</div>
					<div class="col-md-9"style="padding-top:8px;">
						Not Visited
					</div>
				</div>
				<div class="col-sm-6"  style="margin:0px;padding:5px;">
					<div class="col-sm-3" style="margin:0px;padding:0px;">
						<div class="circle" style="background:violet; "><span id="">0</span></div>
					</div>
					<div class="col-sm-9" style="padding-top:8px;">
						Marked For Review
					</div>
				</div>

				<div class="col-sm-12"  style="margin:0px;padding:5px;">
					<div class="col-sm-2" style="margin:0px;padding:0px;">
						<div class="circle" style="background: violet; "><span id="">25</span></div>
					</div>
					<div class="col-sm-10" style="padding-top:8px;">
						Answered and Marked For Review
					</div>
				</div>

			</div>
			<div class="row"  style="border:1px solid black;margin-top:10px;padding:5px;">
				<p style="font-size:20px;">Questions</p>
				<?php
					$s=0;
					$r=0;
					foreach($ques as $x)
					{
						?>
							<div class="col-md-2">
								<div class="circle" onClick="showques('<?php echo $q_id[$r];?>');" id="qn<?php echo $x['q_id'];?>" style="background: gray; "><span id="" style="color:white;"><b><?php echo ++$s;?></b></span></div>
							</div>
						<?php
						$r++;
					}
				?>
			</div>
			  <button type="button" class="btn btn-success btn-lg" data-toggle="modal" style="border-radius:0px;margin-top:20px;"data-target="#myModal">Submit Test</button>

			  <!-- Modal -->
			  <div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog modal-sm">
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					  <h4 class="modal-title"><b>Submit Test</b></h4>
					</div>
					<div class="modal-body">
					  <p><b>Do you really want to submit your test?</b></p>
					</div>
					<div class="modal-footer">

					  <button type="submit" class="btn btn-primary">Yes</button>
					  <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
					  </form>
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
	$("#<?php echo $q_id['0'];?>").show();
	function clearresponse()
	{
		var x	=	$("#qdivid").val();
		 $("input:radio[class^=ans"+x+"]").each(function(i) {

	      this.checked = false;
			});
	}
	function shownext(str1,str2)
	{
		$("#"+str1).hide();
		$("#"+str2).show();
		$("#qn"+str2).css('background-color','red');
		$("#qn"+str1).css('background-color','gray');
		$("#qdivid").val(str2);
		var answered = $('input:radio:checked').length;
		var count	=	'<?php echo $total;?>';
		var notanswered	=	count-answered;
		$('#answered').html(answered);
		$('#not-answered').html(notanswered);
		//alert(count);
		//alert(answered);
		//alert(notanswered);


	}
	function showques(str1)
	{
		var x	=	$("#qdivid").val();
		$("#"+x).hide();
		$("#"+str1).show();
		$("#qdivid").val(str1);
		$("#qn"+str1).css('background-color','red');
		$("#qn"+x).css('background-color','gray');
	}
	//define your time in second
	var c='<?php echo $_COOKIE[$paper['paper_id']];?>';
	 //c= c*60;
	var t;
	timedCount();
	function timedCount()
	{
		var hours = parseInt( c / 3600 ) % 24;
		var minutes = parseInt( c / 60 ) % 60;
		var seconds = c % 60;
		var result = (hours < 10 ? "0" + hours : hours) + ":" + (minutes < 10 ? "0" + minutes : minutes) + ":" + (seconds  < 10 ? "0" + seconds : seconds);
		$('#timer').html(result);
		if(c == 0 )
		{
			//$("#quiz_form").submit();
			window.location="logout.html";
		}
		c = c - 1;
		t = setTimeout(function()
		{
		 timedCount()
		},
		1000);
	}
	</script>

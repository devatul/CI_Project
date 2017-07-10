<?php include('header.php');?>
<?php
	$paper		=	$array['paper'];
	$questions = $array['questions'];
  $edit = $array['edit'];
  $action_url = site_url('admin/submitquestion');
  $answer = '';
  $que_id = '';
  if ($edit) {
    $action_url = site_url('admin/updatequestion');
    $que_id = $edit->q_id;
    $answer = $edit->q_answer;
  }
?>
<script type="text/javascript" >
var questions = <?php echo json_encode($questions); ?>;
var paper = <?php echo json_encode($paper); ?>;
var edit = <?php echo json_encode($edit); ?>;
$(document).ready(function(){
	if(edit){
		displayImg();
		listIndex(edit.q_paper_section);
	}
	$(".passage").hide();
	$("#showPassageInput").click(function(e){
		e.target.checked ?
			$(".passage").show()
		:
			$(".passage").hide()
	});
});
</script>
<div class="content" style="background-color:gray;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
				<div class="card">
          <div class="content">
						<h4 class="title">Paper : <?php echo $paper['paper_name'];?></h4>
          </div>
	      </div>
        <form method="post" action="<?php echo $action_url; ?>" enctype="multipart/form-data">
          <input type="hidden" name="q_paper_id" value="<?php echo $paper['paper_id'];?>">
          <input type="hidden" name="q_id" value="<?php echo $que_id; ?>">
            <div class="card">
              <div class="header">
                <div style="padding-bottom: 15px">
                  <span><b>
                    <?php if(!$edit) {
                      echo "Add New Question";
                    } else {
                      echo "Edit Question";
                    } ?>
                </b></span>
                </div>
                <?php
                echo validation_errors();
                if($this->session->flashdata('errmsg'))
                {
                  echo $this->session->flashdata('errmsg');
                }
                ?>
              </div>
              <div id="formcontent" class="content">
                <div class="row">
                  <div class="col-sm-12">
                    <?php
                     if($paper['paper_type']=='Passage Type' || $paper['paper_type']=='Passage And Question Both')
                     {
                    ?>
                    <div class="form-check pull-right show-passage-checkbox">
                      <label class="form-check-label">
                        <input id="showPassageInput" type="checkbox" class="form-check-input">
                        Show Passage input
                      </label>
                    </div>
                    <?php
                      }
                    ?>
                    <div class="row">
                      <div class="col-md-6">
                       <div class="form-group">
                         <label for="email">Select Section</label>
                         <select class="form-control" name="q_section" id="" onChange="listIndex(this.value);" required>
													 <option value=-1>---Select Section---</option>
                           <?php
														 if($edit) {
															$sec = $edit->q_paper_section;
														 }
                             if($paper['paper_section_1']) {
                               echo "<option value=1 ".($sec=='1'? 'selected' : '').">".$paper['paper_section_1']."</option>";
                             }
                             if($paper['paper_section_2']) {
                               echo "<option value=2 ".($sec=='2'? 'selected' : '').">".$paper['paper_section_2']."</option>";
                             }
                             if($paper['paper_section_3']) {
                               echo "<option value=3 ".($sec=='3'? 'selected' : '').">".$paper['paper_section_3']."</option>";
                             }
                             if($paper['paper_section_4']) {
                               echo "<option value=4 ".($sec=='4'? 'selected' : '').">".$paper['paper_section_4']."</option>";
                             }
                             if($paper['paper_section_5']) {
                               echo "<option value=5 ".($sec=='5'? 'selected' : '').">".$paper['paper_section_5']."</option>";
                             }
                             ?>
                         </select>
                         <?php echo form_error('series_body'); ?>
                       </div>
                     </div>
                     <div class="col-md-6">
                      <div class="form-group">
                        <label for="email">Select Index</label>
                        <select class="form-control" name="q_index" id="q_index" required>

                        </select>
                        <?php echo form_error('series_body'); ?>
                      </div>
                    </div>
                      <div class="col-md-12 passage">
                        <div class="form-group">
                          <label for="email"><b>Enter Passage here</b></label>
                          <?php echo form_textarea(['name'=>'q_passage', 'class'=>'form-control ckeditor', 'value'=>($edit ? $edit->q_passage : ''), 'placeholder'=>'Enter Pasage Here']);?>
                          <?php echo form_error('q_passage'); ?>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="email">Question</label>
                          <?php echo form_input(['name'=>'q_name', 'class'=>'form-control','required'=>'required', 'value'=>($edit ? $edit->q_name : ''), 'placeholder'=>'Enter question']); ?>
                          <?php echo form_error('q_name') ;?>
                        </div>
												<div class="form-group">
													<img id="que_img" src="#" class="hide" width="150px" alt="que image" />
													<div class="upload-img-con">
														<i class="fa fa-upload" aria-hidden="true"></i>
														<input type="file" name="question_img" onChange="uploadImg(event, 'que_img')" >
													</div>
												</div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="email">Option A</label>
                          <?php echo form_input(['name'=>'q_optiona', 'class'=>'form-control','required'=>'required', 'value'=>($edit ? $edit->q_optiona : ''), 'placeholder'=>'Option A']);?>
                          <?php echo form_error('series_body'); ?>
                        </div>
												<div class="form-group">
													<img id="opt_a_img" src="#" class="hide" width="150px" alt="opt a image" />
													<div class="upload-img-con">
														<i class="fa fa-upload" aria-hidden="true"></i>
														<input type="file" name="option_a_img" onChange="uploadImg(event, 'opt_a_img')" >
													</div>
												</div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="email">Option B</label>
                          <?php echo form_input(['name'=>'q_optionb', 'class'=>'form-control','required'=>'required', 'value'=>($edit ? $edit->q_optionb : ''), 'placeholder'=>'Option B']);?>
                          <?php echo form_error('series_body'); ?>
                        </div>
												<div class="form-group">
													<img id="opt_b_img" src="#" class="hide" width="150px" alt="que image" />
													<div class="upload-img-con">
														<i class="fa fa-upload" aria-hidden="true"></i>
														<input type="file" name="option_b_img" onChange="uploadImg(event, 'opt_b_img')" >
													</div>
												</div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="email">Option C</label>
                          <?php echo form_input(['name'=>'q_optionc', 'class'=>'form-control','required'=>'required', 'value'=>($edit ? $edit->q_optionc : ''), 'placeholder'=>'Option C']);?>
                          <?php echo form_error('series_body'); ?>
                        </div>
												<div class="form-group">
													<img id="opt_c_img" src="#" class="hide" width="150px" alt="opt c image" />
													<div class="upload-img-con">
														<i class="fa fa-upload" aria-hidden="true"></i>
														<input type="file" name="option_c_img" onChange="uploadImg(event, 'opt_c_img')" >
													</div>
												</div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="email">Option D</label>
                          <?php echo form_input(['name'=>'q_optiond', 'class'=>'form-control','required'=>'required', 'value'=>($edit ? $edit->q_optiond : ''), 'placeholder'=>'Option D']);?>
                          <?php echo form_error('series_body'); ?>
                        </div>
												<div class="form-group">
													<img id="opt_d_img" src="#" class="hide" width="150px" alt="opt d image" />
													<div class="upload-img-con">
														<i class="fa fa-upload" aria-hidden="true"></i>
														<input type="file" name="option_d_img" onChange="uploadImg(event, 'opt_d_img')" >
													</div>
												</div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group">
                          <label for="email">Option E</label>
                          <?php echo form_input(['name'=>'q_optione', 'class'=>'form-control', 'value'=>($edit ? $edit->q_optione : ''), 'placeholder'=>'Option E']);?>
                          <?php echo form_error('series_body'); ?>
                        </div>
												<div class="form-group">
													<img id="opt_e_img" src="#" class="hide" width="150px" alt="opt e image" />
													<div class="upload-img-con">
														<i class="fa fa-upload" aria-hidden="true"></i>
														<input type="file" name="option_e_img" onChange="uploadImg(event, 'opt_e_img')" >
													</div>
												</div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group">
                          <label for="email">Correct Answer</label>
                          <select class="form-control" name="q_answer" id="" required>
                            <option value='a' <?php if($answer === 'a') echo 'selected'; ?> >Option A</option>
                            <option value='b' <?php if($answer === 'b') echo 'selected';  ?> >Option B</option>
                            <option value='c' <?php if($answer === 'c') echo 'selected';  ?> >Option C</option>
                            <option value='d' <?php if($answer === 'd') echo 'selected';  ?> >Option D</option>
                            <option value='e' <?php if($answer === 'e') echo 'selected';  ?> >Option E</option>
                          </select>
                          <?php echo form_error('series_body'); ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <input type="submit"  value="Submit" class="btn btn-primary"/>
                    <button type="reset" class="btn btn-default">Reset</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
	      </div>
	    </div>
	  </div>
	</div>
<?php include('footer.php');?>

<script>
function displayImg() {
	var base_url = '<?php echo base_url(); ?>';
	edit.q_image && substituteImage('que_img', base_url+edit.q_image);
	edit.q_optiona_img && substituteImage('opt_a_img', base_url+edit.q_optiona_img);
	edit.q_optionb_img && substituteImage('opt_b_img', base_url+edit.q_optionb_img);
	edit.q_optionc_img && substituteImage('opt_c_img', base_url+edit.q_optionc_img);
	edit.q_optiond_img && substituteImage('opt_d_img', base_url+edit.q_optiond_img);
	edit.q_optione_img && substituteImage('opt_e_img', base_url+edit.q_optione_img);
}
function substituteImage(selector, url) {
	$('#'+selector).attr('src', url)
	.removeClass('hide')
	.addClass('show pull-left');
}
function listIndex(secId) {
	var offset = 0;
	for(var i=1; i<secId; i++) {
		offset += parseInt(paper['paper_section_'+i+'_que']);
	}
	var start = offset + 1;
	var end = parseInt(offset) + parseInt(paper['paper_section_'+secId+'_que']);
	var options = [];
	for (var i=start; i <= end; i++) {
		var equal = false;
		if (questions) {
			questions.forEach((q)=>{
				if (q.q_index == i) {
					equal = true;
				}
			});
		}
		if(edit && edit.q_index == i) {
			options.push("<option value='"+i+"' selected >"+i+"</option>");
		}
		if (!equal) {
			options.push("<option value='"+i+"'>"+i+"</option>");
		}
	}
	if(secId!='-1' && options.length < 1) {
		alert('SORRY! This Section is full. Select other section');
	}
	$('#q_index').html(options);
}
function uploadImg(e, selector) {
	var file = e.target.files[0];
  if (file) {
    var reader = new FileReader();
    reader.onload = function (e) {
			substituteImage(selector, e.target.result)
      // $('#'+selector).attr('src', e.target.result)
			// .removeClass('hide')
			// .addClass('show pull-left');
    }
    reader.readAsDataURL(file);
  }
}
</script>

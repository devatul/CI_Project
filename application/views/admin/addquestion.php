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
<script>
$(document).ready(function(){
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
        <form method="post" action="<?php echo $action_url; ?>" >
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
                  <!--span class="down-icon" data-toggle="collapse" data-target="#formcontent" aria-expanded="false" aria-controls="formcontent">
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </span-->
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
                         <select class="form-control" name="q_section" id="" required>
                           <?php
                             if($paper['paper_section_1']) {
                               echo "<option value=1>".$paper['paper_section_1']."</option>";
                             }
                             if($paper['paper_section_2']) {
                               echo "<option value=2>".$paper['paper_section_2']."</option>";
                             }
                             if($paper['paper_section_3']) {
                               echo "<option value=3>".$paper['paper_section_3']."</option>";
                             }
                             if($paper['paper_section_4']) {
                               echo "<option value=4>".$paper['paper_section_4']."</option>";
                             }
                             if($paper['paper_section_5']) {
                               echo "<option value=5>".$paper['paper_section_5']."</option>";
                             }
                             ?>
                         </select>
                         <?php echo form_error('series_body'); ?>
                       </div>
                     </div>
                     <div class="col-md-6">
                      <div class="form-group">
                        <label for="email">Select Index</label>
                        <select class="form-control" name="q_index" id="" required>
                          <?php for ($i=1; $i <= $paper['paper_num_que']; $i++) {
                            $equal = false;
                            if ($questions) {
                              foreach ($questions as $key => &$que):
                                if ($que->q_index == $i) {
                                  $equal = true;
                                }
                              endforeach;
                            }
                            if($edit && $edit->q_index == $i) {
                              echo "<option value='".$i."' selected >".$i."</option>";
                            }
                            if (!$equal) {
                              echo "<option value='".$i."'>".$i."</option>";
                            }
                          }?>
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
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="email">Option A</label>
                          <?php echo form_input(['name'=>'q_optiona', 'class'=>'form-control','required'=>'required', 'value'=>($edit ? $edit->q_optiona : ''), 'placeholder'=>'Option A']);?>
                          <?php echo form_error('series_body'); ?>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="email">Option B</label>
                          <?php echo form_input(['name'=>'q_optionb', 'class'=>'form-control','required'=>'required', 'value'=>($edit ? $edit->q_optionb : ''), 'placeholder'=>'Option B']);?>
                          <?php echo form_error('series_body'); ?>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="email">Option C</label>
                          <?php echo form_input(['name'=>'q_optionc', 'class'=>'form-control','required'=>'required', 'value'=>($edit ? $edit->q_optionc : ''), 'placeholder'=>'Option C']);?>
                          <?php echo form_error('series_body'); ?>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="email">Option D</label>
                          <?php echo form_input(['name'=>'q_optiond', 'class'=>'form-control','required'=>'required', 'value'=>($edit ? $edit->q_optiond : ''), 'placeholder'=>'Option D']);?>
                          <?php echo form_error('series_body'); ?>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group">
                          <label for="email">Option E</label>
                          <?php echo form_input(['name'=>'q_optione', 'class'=>'form-control', 'value'=>($edit ? $edit->q_optione : ''), 'placeholder'=>'Option E']);?>
                          <?php echo form_error('series_body'); ?>
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

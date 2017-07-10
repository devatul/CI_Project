<?php include('header.php');?>
<?php
	$paper		=	$array['paper'];
	 
	//print_r($array);
?>
 
        <div class="content" style="background-color:gray;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
						 <div class="card">
                            <div class="header">
                                <h4 class="title">Add Questions for <?php echo $paper['paper_name'];?></h4>					 
							</div>
                            <div class="content">
								<?php
									if($this->session->flashdata('errmsg'))
									{
										echo $this->session->flashdata('errmsg');
									}
								?>
								<div class="row">
									<div class="col-sm-12">
										 
										  
										   
										  
									</div>
								</div>
                            </div>
                        </div>
						<form method="post" action="<?php echo base_url('admin/storequestion');?>">
						<input type="hidden" name="q_paper_id" value="<?php echo $paper['paper_id'];?>"> 
						<?php
							for($i=1;$i<=$paper['paper_num_que'];$i++)
							{
						?>
                        <div class="card">
                            <div class="header">
                                			 
							</div>
                            <div class="content">
								 
								<div class="row">
									<div class="col-sm-12">
										<h3><b>Question Number <?php echo $i;?></b></h3>	<br>
										 <?php
											if($paper['paper_type']=='Passage Type' || $paper['paper_type']=='Passage And Question Both')
											{
												?>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															
															<label for="email"><b>Enter Passage here</b></label>													 		
															<?php echo form_textarea(['name'=>'q_passage[]', 'class'=>'form-control ckeditor','placeholder'=>'Enter Pasage Here' ,'id'=>'series_body']);?>
															<?php echo form_error('q_passage'); ?>
														</div>
													</div>								  
												</div>
												<?php
											}
										 	if($paper['paper_type']=='Simple Question Answer' || $paper['paper_type']=='Passage And Question Both')
											{
												?>
										  <div class="row">
											   <div class="col-md-12">
												  <div class="form-group">
													<label for="email">Question</label>		 												 
													<?php echo form_input(['name'=>'q_name[]', 'class'=>'form-control','required'=>'required', 'id'=>'series_body']);?>
													<?php echo form_error('q_name'); ?>
													 
												  </div>
											  </div>								  
										  </div>
										  <?php
											}											
											?>
										<div class="row">
											   <div class="col-md-6">
												  <div class="form-group">
													<label for="email">Option A</label>													 
													<?php echo form_input(['name'=>'q_optiona[]', 'class'=>'form-control','required'=>'required', 'id'=>'series_body','value'=>set_value('series_body')]);?>
													<?php echo form_error('series_body'); ?>
													
												  </div>
											  </div>
											   <div class="col-md-6">
												  <div class="form-group">
													<label for="email">Option B</label>													 
													<?php echo form_input(['name'=>'q_optionb[]', 'class'=>'form-control','required'=>'required', 'id'=>'series_body','value'=>set_value('series_body')]);?>
													<?php echo form_error('series_body'); ?>
													 
												  </div>
											  </div>
											   <div class="col-md-6">
												  <div class="form-group">
													<label for="email">Option C</label>													 
													<?php echo form_input(['name'=>'q_optionc[]', 'class'=>'form-control','required'=>'required', 'id'=>'series_body','value'=>set_value('series_body')]);?>
													<?php echo form_error('series_body'); ?>
													 
												  </div>
											  </div>
											   <div class="col-md-6">
												  <div class="form-group">
													<label for="email">Option D</label>													 
													<?php echo form_input(['name'=>'q_optiond[]', 'class'=>'form-control','required'=>'required', 'id'=>'series_body','value'=>set_value('series_body')]);?>
													<?php echo form_error('series_body'); ?>
													 
												  </div>
											  </div>
											   <div class="col-md-6">
												  <div class="form-group">
													<label for="email">Option E</label>													 
													<?php echo form_input(['name'=>'q_optione[]', 'class'=>'form-control','required'=>'required', 'id'=>'series_body','value'=>set_value('series_body')]);?>
													<?php echo form_error('series_body'); ?>
													 
												  </div>
											  </div>
											   
											   <div class="col-md-6">
												  <div class="form-group">
													<label for="email">Correct Answer</label>													 
													<select class="form-control" name="q_answer[]" id="" required>
														<option value='a'>Option A</option>
														<option value='b'>Option B</option>
														<option value='c'>Option C</option>
														<option value='d'>Option D</option>
														<option value='e'>Option E</option>														 
													</select>
													<?php echo form_error('series_body'); ?>													 
												  </div>
											  </div>
										  </div>										  
										 
									</div>
								</div>
                            </div>
                        </div>
						<?php
						}
						?>
						 <div class="card">
                            <div class="header">
                                			 
							</div>
                            <div class="content">
							 
								<div class="row">
									<div class="col-sm-12">
										 										  
											<input type="submit"  value="Submit" class="btn btn-primary"/>
										  <button type="reset" class="btn btn-default">Reset</button>
										</form>
									</div>
								</div>
                            </div>
                        </div>
                    </div>

                     
                </div>



             
            </div>
        </div>


        <?php include('footer.php');?>
		 
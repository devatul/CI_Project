<?php include('header.php');?>
<?php
	$course		=	$data['course'];
	$series		=	$data['series'];
	foreach($course as $x)
	{
		$array[$x['course_id']]	=	$x['course_name'];
	}
	//print_r($array);
?>
 
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Test Series</h4>					 
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
										<form method="post" action="<?php echo base_url('admin/updateseries');?>" enctype="multipart/form-data">
										  <div class="row">
											  <div class="col-md-12">
												  <div class="form-group">
													<label for="email">Select Course</label>
													
													
													<?php
														$js = array(
																			'class'       => 'form-control',
																			'id'       	  => 'series_course_id',
																	);
													?>
													<?php echo form_dropdown('series_course_id', $array,$series['series_course_id'],$js);?>
													<?php echo form_error('series_course_id'); ?>
												  </div>
											  </div>
										</div>
										<div class="row">
											   <div class="col-md-4">
												  <div class="form-group">
													<label for="email">Test Series Name:</label>													 
													<?php echo form_input(['name'=>'series_name', 'class'=>'form-control','required'=>'required', 'id'=>'series_name','value'=>set_value('series_name',$series['series_name'])]);?>
													<?php echo form_hidden('series_id', $series['series_id']); ?>
													<?php echo form_hidden('preimage', $series['series_image']); ?>
													<?php echo form_error('series_name'); ?>
												  </div>
											  </div>						
											  <div class="col-md-4">
												<div class="form-group">
													<label for="email">Test Series Image:</label>													 
													<?php echo form_upload(['name'=>'series_image', 'class'=>'form-control', 'id'=>'series_image','value'=>set_value('series_image')]);?>
													<?php echo form_error('series_image'); ?>
												</div>
											  </div>
											  <div class="col-md-4">
												<img src="<?php echo base_url();?>img/series/<?php echo $series['series_id'].'/'.$series['series_image'];?>" class="img img-responsive img-thumbnail" style="height:200px; width:200px;">
											  </div>
										  </div>
										   <div class="row" >
											   <div class="col-md-12">
												  <div class="form-group">
													<label for="email">Series Type:</label>													 
													 <select class="form-control" name="series_type" onChange="pricebar(this.value);" id="series_type">
														<option value="PAID">PAID</option>
														<option value="PRACTISE" <?php if($series['series_type']=='PRACTISE'){echo "selected";}?>>PRACTISE</option>
													 </select>
												  </div>
											  </div>						
											  
										  </div>
										  <div class="row" id="pricebar" <?php if($series['series_type']=='PRACTISE'){echo "style='display:none;'";}?>>
											   <div class="col-md-6">
												  <div class="form-group">
													<label for="email">Series Actual Price:</label>													 
													<?php echo form_input(['name'=>'series_actual_price', 'class'=>'form-control', 'id'=>'series_actual_price','value'=>set_value('series_actual_price',$series['series_actual_price'])]);?>
													<?php echo form_error('series_actual_price'); ?>
												  </div>
											  </div>						
											  <div class="col-md-6">
												<div class="form-group">
													<label for="email">Series Discount Price:</label>													 
													<?php echo form_input(['name'=>'series_discount_price', 'class'=>'form-control', 'id'=>'series_discount_price','value'=>set_value('series_discount_price',$series['series_discount_price'])]);?>
													<?php echo form_error('series_discount_price'); ?>
												</div>
											  </div>
										  </div>
										   
										  <div class="row">
											   <div class="col-md-12">
												  <div class="form-group">
													<label for="email">Test Series Details / Instructions:</label>													 
													<?php echo form_textarea(['name'=>'series_body', 'class'=>'form-control','required'=>'required', 'id'=>'series_body','value'=>set_value('series_body',$series['series_body'])]);?>
													<?php echo form_error('series_body'); ?>
													<script>												 							 
														CKEDITOR.replace('series_body');									 
													</script>
												  </div>
											  </div>								  
										  </div>										 	 
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
	<script>
			function pricebar(str)
			{
				if(str=='PAID')
				{
					$('#pricebar').show();
				}
				else
				{
					$('#pricebar').hide();
			
				}
			}
		</script>

        <?php include('footer.php');?>
		 
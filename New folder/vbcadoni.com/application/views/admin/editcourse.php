<?php include('header.php');?>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit A Course</h4>
                                 
                            </div>
                            <div class="content">
								<?php
									if($this->session->flashdata('errmsg'))
									{
										echo $this->session->flashdata('errmsg');
									}
								?>
                                <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/update_course');?>">
									<div class="form-group">
										<div class="col-md-12">
											<label for="email">Course Name:</label>
											<input type="text" class="form-control" required name="course_name" value="<?php echo $data['course_name'];?>">
											<input type="hidden" class="form-control" required name="course_id" value="<?php echo $data['course_id'];?>">
											<input type="hidden" class="form-control" required name="preimage" value="<?php echo $data['course_image'];?>">
										</div>
									</div>
									<div class="form-group">
										
										<div class="col-md-6">											
											<label for="pwd">Course Image:</label>
											<input type="file" class="form-control"  name="course_image">
										</div>
										<div class="col-md-6">
											<img src="<?php echo base_url();?>img/courses/<?php echo $data['course_id'];?>/<?php echo $data['course_image'];?>" class="img img-responsive" style="width:200px;height:150px;">
									
										</div>
										 
									
										</div>
								  
								  <button type="submit" class="btn btn-primary btn-fill">Submit</button>
								</form>

                                 
                            </div>
                        </div>
                    </div>

                     
                </div>



             
            </div>
        </div>


        <?php include('footer.php');?>
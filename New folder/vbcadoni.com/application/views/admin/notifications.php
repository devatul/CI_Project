<?php include('header.php');?>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Notifications</h4>
                                 
                            </div>
                            <div class="content">
								<?php
									$update	=	$array['update'];
									if($this->session->flashdata('notificationsmsg'))
									{
										echo $this->session->flashdata('notificationsmsg');
									}
								?>
                                <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/update_notifications');?>">
									<div class="form-group">
										<div class="col-md-12">
											<label for="email">Notifications:</label>
											<textarea class="form-control ckeditor" required name="update_content"><?php echo $update['update_content'];?></textarea>
											<input type="hidden" class="form-control" required name="update_id" value="<?php echo $update['update_id'];?>">											 
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
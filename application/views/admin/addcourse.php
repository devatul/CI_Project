<?php include('header.php');?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add A Course</h4>

                            </div>
                            <div class="content">
								<?php
									if($this->session->flashdata('errmsg'))
									{
										echo $this->session->flashdata('errmsg');
									}
								?>
                                <form method="post" enctype="multipart/form-data" action="<?php echo site_url('admin/storecourse');?>">
									<div class="form-group">
										<label for="email">Course Name:</label>
										<input type="text" class="form-control" required name="course_name">
									</div>
									<div class="form-group">
										<label for="pwd">School Logo:</label>
										<input type="file" class="form-control" required name="course_image">
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
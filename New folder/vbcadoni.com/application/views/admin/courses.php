<?php include('header.php');?>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">List Of Schools</h4>
                                <p class="category"><a href="<?php echo base_url('admin/addcourse');?>"class="btn btn-primary btn-fill pull-right">Add a Course</a></p>
                            </div>
                            <div class="content">
                                <table class='table table-responsive table-striped'>
									<thead>
										<tr>
											<td> Sr.No</td>
											<td> Course Name</td>
											<td> Course IMage</td>
											<td> Actions</td>
										</tr>
									</thead>
									<tbody>
										 <?php
											if(count($data))
											{
												$i=0;
												foreach($data as $x)
												{
													?>
														<tr>
															<td><?php echo ++$i;?></td>
															<td><?php echo $x['course_name'];?></td>
															<td><img src="<?php echo base_url();?>img/courses/<?php echo $x['course_id'];?>/<?php echo $x['course_image'];?>" class="img img-responsive" style="height:150px;width:200px;"></td>
															 
															<td>
																<a href="<?php echo base_url('admin/editcourse/'.$x['course_id']);?>" class="btn btn-warning btn-fill">Edit</a>
																<a href="" class="btn btn-danger btn-fill">Delete</a>
															</td>
														</tr>
													<?php
												}
											}
											else
											{
												?>
													<tr>
														<td colspan="4"><div class='alert alert-info'>No Course Found</div></td>
													</tr>
												<?php
											}
										 ?>
									</tbody>
								</table>                                 
                            </div>
                        </div>
                    </div>

                     
                </div>



             
            </div>
        </div>


        <?php include('footer.php');?>
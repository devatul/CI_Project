<?php include('header.php');?>
<?php
	$paper	=	$array['paper'];
?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">List Of Test Papers</h4>
                                <p class="category"><a href="<?php echo site_url('admin/addtestpaper');?>"class="btn btn-primary btn-fill pull-right">Add a Test Paper</a></p>
                            </div>
                            <div class="content">

                                <table class='table table-responsive table-striped'>
									<thead>
										<?php
											if($this->session->flashdata('errmsg'))
											{
												echo "<tr><td colspan='8'>".$this->session->flashdata('errmsg')."</td></tr>";
											}
										?>
										<tr>
											<td> Sr.No</td>
											<td> Test Paper Name</td>
											<td> Series Name</td>
											<td> Course Name</td>
											<td> Questions</td>
											<td> Duration</td>
											<td> Image</td>

											<td> Actions</td>
										</tr>
									</thead>
									<tbody>
										 <?php
											if(count($paper))
											{
												$i=0;
												foreach($paper as $x)
												{
													?>
														<tr>
															<td><?php echo ++$i;?></td>
															<td><?php echo $x['paper_name'];?></td>
															<td><?php echo $x['series_name'];?></td>
															<td><?php echo $x['course_name'];?></td>
															<td><?php echo $x['paper_num_que'];?></td>
															<td><?php echo $x['paper_duration'];?> Mins</td>
															<td><img src="<?php echo base_url('img/papers');?>/<?php echo $x['paper_id'];?>/<?php echo $x['paper_image'];?>" class="img img-responsive img-thumbnail" style="width:100px;height:100px;"></td>
															<td>
																<a href="<?php echo site_url('admin/paperdetails/'.$x['paper_id']);?>" class="btn btn-info btn-block">Details</a><br>
																<a href="" class="btn btn-danger btn-block">Edit</a><br>
																<a href="" class="btn btn-waring btn-block">Delete	</a><br>
																<a href="<?php echo site_url('admin/questions/'.$x['paper_id']);?>" class="btn btn-info btn-block">Questions</a><br>
															</td>
														</tr>
													<?php
												}
											}
											else
											{
												?>
													<tr>
														<td colspan="6">No Test Papers Found</td>
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

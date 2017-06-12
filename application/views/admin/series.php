<?php include('header.php');?>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">List Of Test Series</h4>
                                <p class="category"><a href="<?php echo site_url('admin/addseries');?>"class="btn btn-primary btn-fill pull-right">Add a Test Series</a></p>
                            </div>
                            <div class="content">
							<?php
									if($this->session->flashdata('errmsg'))
									{
										echo "<tr><td colspan='6'>".$this->session->flashdata('errmsg')."</td></tr>";
									}
								?>
                                <table class='table table-responsive table-striped'>
									<thead>
										<tr>
											<td> Sr.No</td>
											<td> Test Series Name</td>
											<td> Course Name</td>
											<td> Image</td>
											<td> Price</td>
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
															<td><?php echo $x['series_name'];?></td>
															<td><?php echo $x['course_name'];?></td>
															<td><img src="<?php echo base_url();?>img/series/<?php echo $x['series_id'];?>/<?php echo $x['series_image'];?>" class="img img-responsive" style="height:150px;width:200px;"></td>
															<td>
																<?php
																	if($x['series_type']=='PRACTISE')
																	{
																		echo "<b>PRACTICE TEST</b>";
																	}
																	else
																	{
																?>
																<b>
																&#8377;<span style="text-decoration:line-through;"><?php echo $x['series_actual_price'];?><br></span>
																&#8377;<?php echo $x['series_discount_price'];?>
																</b>
																<?php
																	}
																?>
															</td>

															<td>

																<a href="<?php echo site_url('admin/editseries/'.$x['series_id']);?>" class="btn btn-warning btn-fill btn-block">Edit</a><br>
																<a href="" class="btn btn-danger btn-fill btn-block">Delete</a>
															</td>
														</tr>
													<?php
												}
												?>
												<tr>
													<td colspan="6"><?php echo $this->pagination->create_links(); ?></td>
												</tr>
												<?php
											}
											else
											{
												?>
													<tr>
														<td colspan="6"><div class='alert alert-info'>No Test Series Found</div></td>
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

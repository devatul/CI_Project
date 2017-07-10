<?php include('header.php');?>
<?php
	$paper	=	$array['paper'];
	$quesa	=	$array['quesa'];
	$quesb	=	$array['quesb'];
	$quesc	=	$array['quesc'];
	$quesd	=	$array['quesd'];
	$quese	=	$array['quese'];
?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"> <?php echo $paper['paper_name'];?></h4>
							 
                                </div>
                            <div class="content">
							<?php
									if($this->session->flashdata('errmsg'))
									{
										echo $this->session->flashdata('errmsg');
									}
								?>
                                <table class='table table-responsive table-striped table-bordered'>
									<tbody>
										<tr>
											 <th>Test Paper Name</th>
											 <th><?php echo $paper['paper_name'];?></th>
										</tr>
										<tr>
											 <th>Cousre</th>
											 <th><?php echo $paper['course_name'];?></th>
										</tr>
										<tr>
											 <th>Test Series</th>
											 <th><?php echo $paper['series_name'];?></th>
										</tr>
										<tr>
											 <th>Total Number Of Questions</th>
											 <th><?php echo $paper['paper_num_que'];?></th>
										</tr>
										<tr>
											 <th>Paper Durations</th>
											 <th><?php echo $paper['paper_duration'];?> Minutes</th>
										</tr>
										<tr>
											 <th>Paper Type</th>
											 <th><?php echo $paper['paper_type'];?> </th>
										</tr>
										<tr>
											<th colspan="2"><h3 class="text text-primary text-center"><b>Sections</b></h3></th>
										</tr>
										<?php
											if($paper['paper_section_1']!='')
											{
											?>
												<tr>
													  
													 <th><?php echo $paper['paper_section_1'];?> </th>
													 <th><?php echo $paper['paper_section_1_que'];?> questions 
													 
													 </th>
												</tr>
											<?php
											}
											if($paper['paper_section_2']!='')
											{
											?>
												<tr>
													  
													 <th><?php echo $paper['paper_section_2'];?> </th>
													 <th><?php echo $paper['paper_section_2_que'];?> questions </th>
												</tr>
											<?php
											}
											if($paper['paper_section_3']!='')
											{
											?>
												<tr>
													  
													 <th><?php echo $paper['paper_section_3'];?> </th>
													 <th><?php echo $paper['paper_section_3_que'];?> questions </th>
												</tr>
											<?php
											}
											if($paper['paper_section_4']!='')
											{
											?>
												<tr>
													  
													 <th><?php echo $paper['paper_section_4'];?> </th>
													 <th><?php echo $paper['paper_section_4_que'];?> questions </th>
												</tr>
											<?php
											}
											if($paper['paper_section_5']!='')
											{
											?>
												<tr>
													  
													 <th><?php echo $paper['paper_section_5'];?> </th>
													 <th><?php echo $paper['paper_section_5_que'];?> questions </th>
												</tr>
											<?php
											}
											
										?>
										<tr>
											 <th colspan="2"><h3 class="text text-center text-primary"><b>Paper Instructions</b></h3></th>
											  
										</tr>
										<tr>
											 
											 <th colspan="2"><?php echo $paper['paper_instruction'];?> Minutes</th>
										</tr>
										<?php
											/*
											if(count($ques))
											{
												?>
													<tr><td colspan="2"><h3 class="text text-center"><b>Questions</b></h3></td></tr>
												<?php
												$i=0;
												foreach($ques as $x)
												{
													?>
													<tr>
														<td colspan="2">
														<b><h2>Question No. <?php echo ++$i;?></h2></b><br>	
														<?php echo @$x['q_passage'];?></td>
													</tr>
													<tr>
														<td colspan="2">
														<b>Question</b><br>	
														<?php echo $x['q_name'];?></td>
													</tr>
													<tr>
														<td colspan="">		
														<b>Options</b><br>
														(a) <?php echo $x['q_optiona'];?><br>
														(b) <?php echo $x['q_optionb'];?><br>
														(c) <?php echo $x['q_optionc'];?><br>
														(d) <?php echo $x['q_optiond'];?><br>
														(e) <?php echo $x['q_optione'];?><br>														
														</td>
														<td>
															<b>Correct Answer :</b> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $x['q_answer'];?><br>
															 
														</td>
													</tr>
													<?php
												}
											}	
											*/											
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
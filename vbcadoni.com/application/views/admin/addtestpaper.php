<?php include('header.php');?>
<?php
	$course		=	$data['course'];
	$array['']	=	'--Select Course--';
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
                                <h4 class="title">Add Test Paper</h4>					 
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
										<form method="post" action="<?php echo base_url('admin/storepaper');?>" enctype="multipart/form-data">
										  <div class="row">
											  <div class="col-md-6">
												  <div class="form-group">
													<label for="email">Select Course</label>
													
													
													<?php
														$js = array(
																			'class'       => 'form-control',
																			'id'       	  => 'paper_course_id',
																			'required'    => 'required',
																			'onChange'    => 'some_function(this.value);'
																	);
													?>
													<?php echo form_dropdown('paper_course_id', $array,'xxxxx',$js);?>
													<?php echo form_error('paper_course_id'); ?>
												  </div>
											  </div>
										 
											  <div class="col-md-6">
												  <div class="form-group">
													<label for="email">Select Test Series</label>
														<select class="form-control" id="paper_series_id" name="paper_series_id" required>
															<option value=''>--Select--</option>
														</select>
													
													 
												  </div>
											  </div>
										</div>
										<div class="row">
											   <div class="col-md-12">
												  <div class="form-group">
													<label for="email">Test Paper Name:</label>													 
													<?php echo form_input(['name'=>'paper_name', 'class'=>'form-control','required'=>'required', 'id'=>'paper_name','value'=>set_value('paper_name')]);?>
													<?php echo form_error('paper_name'); ?>
												  </div>
											  </div>						
											 
										  </div>
										  <div class="row">
											  						
											  <div class="col-md-4">
												<div class="form-group">
													<label for="email">Test Paper Image:</label>													 
													<?php echo form_upload(['name'=>'paper_image', 'class'=>'form-control','required'=>'required', 'id'=>'paper_image','value'=>set_value('paper_image')]);?>
													<?php echo form_error('paper_image'); ?>
												</div>
											  </div>
											   <div class="col-md-4">
												  <div class="form-group">
													<label for="email">Test Paper Type:</label>													 
													<select class="form-control" name="paper_type">
														<option>Simple Question Answer</option>
														<option>Passage And Question Both</option>
														<option>Passage Type</option>
													</select>
												  </div>
											  </div>
										   
											   						
											  <div class="col-md-4">
												<div class="form-group">
													<label for="email">Time Duration (In Minutes):</label>													 
													<?php echo form_input(['name'=>'paper_duration', 'class'=>'form-control','required'=>'required', 'id'=>'paper_duration','value'=>set_value('paper_duration')]);?>
													<?php echo form_error('paper_duration'); ?>
												</div>
											  </div>
										  </div>
										   
										  <div class="row">
											  <div class="col-sm-12">
												<div class="form-group col-sm-12">
													 <label for="notes"> Add Sections :</label> <br>					 
													<INPUT type="button"  class="btn btn-primary btn-fill " style="border-radius:0px;" value="Add Row" onclick="addRow('dataTable')" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													<INPUT type="button" class="btn btn-danger btn-fill " style="border-radius:0px;" value="Delete Row"   onclick="deleteRow('dataTable')" />	  
													<TABLE id="dataTable"  class="table table-striped table-bordered">			
														<tr>
															<td><INPUT type="checkbox"  name="chk[]"/></td>
															<td><INPUT type="text" name="paper_section[]"  class="form-control" placeholder="Enter Section Here" /></td>				 
															<td><INPUT type="number" name="paper_section_que[]"  class="form-control" placeholder="Number of questions in this section" /></td>				 
														</tr>		 
													</TABLE>
												</div>
											  </div>
										  </div>
										  <div class="row">
											   <div class="col-md-12">
												  <div class="form-group">
													<label for="email">Test Paper Details / Instructions:</label>													 
													<?php echo form_textarea(['name'=>'paper_instruction', 'class'=>'form-control','required'=>'required', 'id'=>'paper_instruction','value'=>set_value('paper_instruction')]);?>
													<?php echo form_error('paper_instruction'); ?>
													<script>												 							 
														CKEDITOR.replace('paper_instruction');									 
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


        <?php include('footer.php');?>
		<script>
			function some_function(str)
			{
				$.ajax({
					type	:	'POST',
					url		:	'<?php echo base_url('admin/ajax_show_test_series');?>',
					data	:	'series_course_id='+str,
					success	:	function(data)
					{
						$('#paper_series_id').html(data);
					}
					
					
				});
			}
	 
	function addRow(tableID)
	{		 		
		var table = document.getElementById(tableID);
		var rowCount = table.rows.length;
		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
		//alert(rowCount); 
		if(rowCount>4)
		{
			alert('You can not add more than 5 sections');
		}
		else
		{
				for(var i=0; i<colCount; i++) {
				var newcell	= row.insertCell(i);
				newcell.innerHTML = table.rows[0].cells[i].innerHTML;
				//alert(newcell.childNodes);
				switch(newcell.childNodes[0].type) {
					case "text":
							newcell.childNodes[0].value = "";
							break;
					case "checkbox":
							newcell.childNodes[0].checked = false;
							break;
					case "select-one":
							newcell.childNodes[0].selectedIndex = 0;
							break;
				}
			}
		}
	
	}
	function deleteRow(tableID) {
		try {
		var table = document.getElementById(tableID);
		var rowCount = table.rows.length;

		for(var i=0; i<rowCount; i++) {
			var row = table.rows[i];
			var chkbox = row.cells[0].childNodes[0];
			if(null != chkbox && true == chkbox.checked) {
				if(rowCount <= 1) {
					alert("Cannot delete all the rows.");
					break;
				}
				table.deleteRow(i);
				rowCount--;
				i--;				 
			}
			 
		}
		}catch(e) {
			alert(e);
		}
	}

	 
		</script>
		 
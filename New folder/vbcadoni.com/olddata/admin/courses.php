 <?php 
	$num_rec_per_page=10;	 
	if (isset($_GET["pagex"]))
	{
		$pagex  = $_GET["pagex"]; 
	}
	else
	{ 
		$pagex=1; 
	}
	$start_from = ($pagex-1) * $num_rec_per_page; 
	$sql = "SELECT * FROM courses order by course_id desc LIMIT $start_from, $num_rec_per_page"; 
	$sql = mysqli_query ($con,$sql); //run the query
?> 
<div class="row">
	<h3 class="text text-center text-primary">Courses</h3> 
	<a href="index.php?page=addcourse" class="btn btn-primary btn-lg">Add A Course</a>
	<table class="table table-responsive table-striped">
		<thead>
			<tr>
				<td>Sl.No</td>
				<td>Course Name</td>
				<td>Image</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody>
			<?php
				if(!mysqli_num_rows($sql))
				{
					?>
						<td colspan="3"><div class="alert alert-danger">No Couses Found.</div></td>
					<?php
				}
				else
				{
					$i=0;
					while($row=mysqli_fetch_array($sql))
					{
						?>
						<tr>
							<td><?php echo ++$i;?></td>
							<td><?php echo $row['course_name'];?></td>
							<td>
								<img src="../img/courses/<?php echo $row['course_id'];?>/<?php echo $row['image'];?>" style="width:100px; height:100px;" class="img img-responsive">
							</td>
							<td>
								<a href="index.php?page=editcourse&id=<?php echo $row['course_id']; ?>" class="btn btn-primary">Edit</a>
							</td>
						</tr>
						<?php
					}					
				}
	
				$sql = "SELECT * FROM courses"; 
				$rs_result = mysqli_query($con,$sql); //run the query
				$total_records = mysqli_num_rows($rs_result);  //count number of records
				$total_pages = ceil($total_records / $num_rec_per_page); 				 
				if($total_pages>1)
				{
					echo "<ul class='pagination'><li><a href='index.php?page=supplierenquiry&pagex=1'>".'First'."</a></li> "; // Goto 1st page  
					for ($i=1; $i<=$total_pages; $i++) 
					{ 
						echo "<li><a href='index.php?page=supplierenquiry&pagex=".$i."'>".$i."</a></li> "; 
					}
					echo "<li><a href='index.php?page=supplierenquiry&pagex=$total_pages'>".'Last'."</a></li></ul> "; // Goto last page
				}
			?>
				
			 

		</tbody>	 
	</table>		
</div>
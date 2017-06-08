<?php
	extract($_POST);
	//code to check image
	function checkimage($x)
	{		 
		$y= strrpos($x,".");
		$cutfrom=$y+1;			 
		$strlen= strlen($x);
		$cutlast=$strlen-$cutfrom;			 
		$res=substr($x,$cutfrom,$cutlast);
		if($res=="jpg"||$res=="jpeg"||$res=="png"||$res=="JPG"||$res=='JPEG'||$res=='PNG')
		{
			return "good";
		}
		else
		{
			 return "notgood";				
		}
	}
	//code to create slug
	function create_slug($str)
	{
		include("../connection.php");
		
		$name=strtolower($str);
		$data=preg_replace('/[^A-Za-z0-9-]+/','-', $name);
		$baseslug=$data;		
		 
		$j=1;
		while(mysqli_num_rows(mysqli_query($con,"select course_slug from courses where course_slug='$data'")))
		{
			$data=$baseslug."-".$j;
			$j++;
		}		 
		return $data;
	}
	if(isset($save))
	{
		$course_name		=	mysqli_real_escape_string($con,$course_name);
		$img1				=	$_FILES['itemimage1']['name'];
		$proceed[]			=	checkimage($img1);
		if (!in_array("notgood",@$proceed))		 
		{
			$slug=create_slug($course_name);
			if(mysqli_query($con,"insert into courses (course_name,image,course_slug) values ('$course_name','$img1','$slug')"))
			{
				$last_id = mysqli_insert_id($con);
				if(!file_exists("../img/courses"))
				{
					mkdir("../img/courses");							
				}
				if(!file_exists("../img/courses/$last_id"))
				{
					mkdir("../img/courses/$last_id");							
				}
				move_uploaded_file($_FILES['itemimage1']['tmp_name'],"../img/courses/$last_id/".$img1);
				$msg="<div class='alert alert-success'><h3 class='text-center text-success'>subcategory1 added</h3></div>";					
			}
			else
			{
				$msg="<div class='alert alert-danger'><h3 class='text-center'>System error.</h3></div>";
			}
		}
		else
		{
			$msg="<div class='alert alert-danger'><h3 class='text-center'>Image field can not have extensions other than jpeg , jpg , png. </h3></div>";
		}
	}
?>	
<div class="container-fluid" style="padding:50px;">
	<h3 class="text text-center text-primary">Add Courses</h3>
	<div class="col-sm-10">
		<form class="form-horizontal" method="post" enctype="multipart/form-data">
			<?php
				echo @$msg;
			?>
			<div class="form-group">
				<label class="control-label col-sm-4" for="course_name">Course Name:</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="course_name" required name="course_name" placeholder="Enter Course Name">
				</div>
			</div>	
			<div class="form-group">
				<label class="control-label col-sm-4" for="course_name">Course Image:</label>
				<div class="col-sm-8">
					<input type="file" class="form-control" id="image" required name="itemimage1">
				</div>
			</div>	
			<div class="form-group"> 
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" name="save" class="btn btn-primary pull-right">Submit</button>
				</div>
			</div>
		</form>
	</div>
</div>
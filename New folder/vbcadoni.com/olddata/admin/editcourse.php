<?php
	extract($_POST);
	extract($_GET);
	$sql=mysqli_query($con,"select * from courses where course_id='$id'");
	if(!mysqli_num_rows($sql))
	{
		header('location:index.php');
	}
	$row=mysqli_fetch_array($sql);
	$preimage=	$row['image'];
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
	function create_slug($str,$id)
	{
		include("../connection.php");
		
		$name=strtolower($str);
		$data=preg_replace('/[^A-Za-z0-9-]+/','-', $name);
		$baseslug=$data;		
		 
		$j=1;
		while(mysqli_num_rows(mysqli_query($con,"select course_slug from courses where course_slug='$data' and course_id!='$id'")))
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
		if($img1!='')
		{
			$proceed[]			=	checkimage($img1);
			if (!in_array("notgood",@$proceed))		 
			{
				$slug=create_slug($course_name,$id);
				if(mysqli_query($con,"update courses set course_name='$course_name',image='$img1',course_slug='$slug' where course_id='$id' limit 1"))
				{
					if(!file_exists("../img/courses"))
					{
						mkdir("../img/courses");							
					}
					if(!file_exists("../img/courses/$id"))
					{
						mkdir("../img/courses/$id");							
					}
					unlink('../img/courses/$id/$preimage');
					move_uploaded_file($_FILES['itemimage1']['tmp_name'],"../img/courses/$id/".$img1);
					header('location:index.php?page=courses');
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
		else
		{
			if(mysqli_query($con,"update courses set course_name='$course_name',course_slug='$slug' where course_id='$id' limit 1"))
			{
				 
				header('location:index.php?page=courses');
			}
			else
			{
				$msg="<div class='alert alert-danger'><h3 class='text-center'>System error.</h3></div>";
			}
		}
	
	}
?>	
<div class="container-fluid" style="padding:50px;">
	<h3 class="text text-center text-primary">Edit Courses</h3>
	<div class="col-sm-12">
		<form class="form-horizontal" method="post" enctype="multipart/form-data">
			<?php
				echo @$msg;
			?>
			<div class="form-group">
				<label for="course_name">Course Name:</label>
				<div class="col-sm-12">
					<input type="text" class="form-control" id="course_name"  name="course_name" value="<?php echo $row['course_name'];?>">
				</div>
			</div>	
			<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					 
					<div class="col-sm-12">
						<input type="file" class="form-control" id="image"  name="itemimage1">
					</div>
				</div>

			</div>
			<div class="col-sm-6">
				<img src="../img/courses/<?php echo $row['course_id'];?>/<?php echo $row['image']; ?>" class="img mg-responsive img-thumbnail">

			</div>			
			<div class="form-group"> 
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" name="save" class="btn btn-primary pull-right">Submit</button>
				</div>
			</div>
		</form>
	</div>
</div>
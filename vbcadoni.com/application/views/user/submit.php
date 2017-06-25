<?php
	$slug	=	$array['slug'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Test Submitted Successfully</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</head>
<body style="background:#2b2b2b;">
<div class="container" style="background:white;height:350px;padding:0px;">
	<div class="col-sm-6">
		<b>
		<h1 class="text text-center"> <i class="fa fa-check" aria-hidden="true"></i> Congratulations!</h1>
		<h3 class="text text-center">Your test has been submitted.</h3>
		</b>
		<center>
		<a href="<?= base_url('paper/viewresult/'.$slug);?>" class="btn btn-primary"  >Click here to view Result</a>
		</center>
	</div>	
	<div class="col-sm-6" style="background: url('<?= base_url('img/congo.jpg');?>') no-repeat;background-size:cover;height:350px;"></div>
</div>
 

 
  
 

 

</body>
</html>

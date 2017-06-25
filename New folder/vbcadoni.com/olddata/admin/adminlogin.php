<?php
	extract($_POST);
	 session_start();
	 //connect database 
	  include('../connection.php');

	  
	//select all values from empInfo table
	$data="SELECT * FROM admin";
 
	$val=mysqli_query($con,$data);
			
	$r=mysqli_fetch_array($val,MYSQLI_BOTH);
	
	//$name=$r['name'];
	$email=$r['username'];
	$password=$r['password'];
	
	if(isset($login))
	{
		if($email== $iemail && $password==$ipassword)
		{
			
			$_SESSION['adminuser']="$iemail";
		 
			header('location:index.php');
		}
		else
		{	 
			@$msg= "<h5 style='color:red'>Wrong Credentils.   <label for='email'><a href=''>Wrong Credentials
			   </label> again.</h5>";
		}
	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fashionbug CMS ADMIN PANEL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href=" css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
  <style>
@CHARSET "UTF-8";


* {
    -webkit-box-sizing: border-box;
	   -moz-box-sizing: border-box;
	        box-sizing: border-box;
	outline: none;
}

    .form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
		@include box-sizing(border-box);

		&:focus {
		  z-index: 2;
		}
	}

body {
	 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

.login-form {
	margin-top: 60px;
}

form[role=login] {
	color: #5d5d5d;
	background: #f2f2f2;
	padding: 26px;
	border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
}
	form[role=login] img {
		display: block;
		margin: 0 auto;
		margin-bottom: 35px;
	}
	form[role=login] input,
	form[role=login] button {
		font-size: 18px;
		margin: 16px 0;
		
	}
	form[role=login] > div {
		text-align: center;
		
	}
	
.form-links {
	text-align: center;
	margin-top: 1em;
	margin-bottom: 50px;
}
	.form-links a {
		color: #fff;
	}
  </style>
</head>
<body>
 
 
 <div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
		<?php echo @$msg; ?>
      <section class="login-form">
        <form method="post" action="#" role="login">
           
		  
		  
          <input type="text" name="iemail" id="email" placeholder="Email" required class="form-control input-lg" value="admin" />
          <input type="password" class="form-control input-lg" name="ipassword" id="pwd" placeholder="Password" required="" />
          
          
          <div class="pwstrength_viewport_progress"></div>
          
          
          <button type="submit" name="login" class="btn btn-lg btn-primary btn-block" style="background-color:#FF0000; border:none";>Sign in</button>
          
          
        </form>
        
        <div class="form-links">
          <a href="#">www.fashionbug.lk</a>
        </div>
      </section>  
      </div>
      
      <div class="col-md-4"></div>
      

  </div>
 
</div>
 
 </body>
 
 </html>
 
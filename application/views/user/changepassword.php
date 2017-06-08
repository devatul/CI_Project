 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MY CART | ONLINE TEST | VBCADONI</title>
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url();?>userassets/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>userassets/css/owl.carousel.css">
<link rel="stylesheet" href="<?php echo base_url();?>userassets/css/style.css">
<link rel="stylesheet" href="<?php echo base_url();?>userassets/css/responsive.css">
<style>
#advertise:hover , #advertise1:hover
		{
			box-shadow: 0 0 10px rgba(0,0,0,0.6);
			-moz-box-shadow: 0 0 10px rgba(0,0,0,0.6);
			-webkit-box-shadow: 0 0 10px rgba(0,0,0,0.6);
			-o-box-shadow: 0 0 10px rgba(0,0,0,0.6);
		}

</style>
</head>
  <body>
   
    <?php include('include/header.php');?>
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Change Password</h1>
                </div>				 
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
				
				<div class="col-sm-6 col-sm-offset-3"  id="advertise" style="padding:30px;border:1px solid gray;border-radius:5px;">
					<?php
						if($this->session->flashdata('passwordmsg'))
						{
							echo $this->session->flashdata('passwordmsg');
						}
					?>
					<form method="post" action="<?= base_url('myaccount/resetpassword');?>">
						<div class="form-group"><label for="user_name">Password</label>
						<input type="password" required class="form-control" name="user_password" id="user_password"  />
						<input type="hidden" required class="form-control" name="user_id" id="user_id" value="<?= $_SESSION['logged_id'];?>"/>
						</div>
						<div class="form-group"><label for="user_password2">Confirm Password</label><input type="password" required class="form-control" name="user_password2" id="user_password2"  /></div>
						<input type="submit" class="btn btn-primary"/>
					</form>
				</div>
            </div>
        </div>
    </div>


	<?php include('include/footer.php');?>
  </body>
</html>
 
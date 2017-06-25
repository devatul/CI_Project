<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>NOTIFICATIONS | ONLINE TEST | VBCADONI</title>
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url();?>userassets/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>userassets/css/owl.carousel.css">
<link rel="stylesheet" href="<?php echo base_url();?>userassets/css/style.css">
<link rel="stylesheet" href="<?php echo base_url();?>userassets/css/responsive.css">    
</head>
<body>

    <?php include('include/header.php');?>
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Notifications</h1>
                </div>				 
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area"  style="padding-top:100px; padding-bottom:300px;">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
				<?php
					echo $array['update']['update_content'];
				
				?>
            </div>
        </div>
    </div>


	<?php include('include/footer.php');?>
  </body>
</html>
 
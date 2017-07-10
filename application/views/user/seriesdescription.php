<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.ico">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SERIES DESCRIPTION | ONLINE TEST | VBCADONI</title>
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
                    <h1>ONLINE TEST SERIES</h1>
                </div>
				<div class="col-md-4">
                    <!--<img src="<?php echo base_url();?>userassets/img/ic_holi_discount.png" alt="">-->
                </div>
            </div>
        </div>
		
    </div>
    <div class="single-product-area">
    <div class="container">
		<div class="row" style="padding-top:50px;">
			<div class="col-md-3">
				<?php
					$series		=	$array['series'];						
					$x		=	$array['series'];						
				?>					
				<img src="<?php echo base_url();?>img/series/<?php echo $x['series_id'];?>/<?php echo $x['series_image'];?>" alt="" class="img img-responsive img-thumbnail" style="width:100%;height:260px;"/>
			</div>
			<div class="col-md-9">
				<h2 style="text-decoration:underline;margin-bottom:30px;"><?php echo $x['series_name'];?></h2>
				<h4>
					<del><i class="fa fa-inr" aria-hidden="true"></i><?= $x['series_actual_price'];?></del> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<ins><i class="fa fa-inr" aria-hidden="true"></i> <?= $x['series_discount_price'];?></ins> 
				</h4>
				<p>
					<?php
						if(isset($_SESSION['logged_id']))
						{
							?>
								<button class="btn btn-default btn-lg" onClick="addtocart('<?php echo $x['series_id'];?>');"style="border-radius:0px;margin-right:50px;"><i class="fa fa-shopping-cart"></i> Add To Cart</button>

							<?php
						}
						else
						{
							?>
							<button class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal" style="border-radius:0px;margin-right:50px;"><i class="fa fa-shopping-cart"></i> Add To Cart</button>

							<?php
						}
					?>
					<a class="btn btn-primary btn-lg" style="border-radius:0px;margin-right:50px;">Buy Now</a>
					 
				</p>
			</div>
			 
		</div>
		<div class="row" style="padding-top:50px;">
			<div class="col-md-12">
				<div class="row">
				<table class="table table-responsive table-bordered table-striped">
					<tr>
						<td><h3>Description</h3></td>
					</tr>
					<tr>
						<td><?php echo $x['series_body'];?></td>
					</tr>
				</table>
				</div>
			 
			</div>
		</div>
	</div>
	</div>
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
         
    </div>
	 

	<?php include('include/footer.php');?>
  </body>
</html>
</html>
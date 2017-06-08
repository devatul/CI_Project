<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TEST SERIES | ONLINE TEST | VBCADONI</title>
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
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
			
			<div class="container">
			<div class="single-sidebar">
                        <h2 class="sidebar-title">SELECT EXAM</h2>
						</div>
				<ul class="nav nav-pills nav-stacked col-md-3">
				  <li class="active"><a href="#tab_1" data-toggle="pill">All Courses</a></li>
				   
				  <?php
					$course		=	$array['course'];
					$series		=	$array['series'];
					if(count($course))
					{
						foreach($course as $x)
						{
							?>
								 <li><a href="#tab_2" data-toggle="pill"><?php echo $x['course_name'];?></a></li>
							<?php
						}
					}
				  ?>
				</ul>
				<div class="tab-content col-md-9">
						<div class="tab-pane active" id="tab_1">
							 <div class="row">
								<?php
									if(count($series))
									{
										foreach($series as $x)
										{
											?>
												<div class="col-md-3">
													<div class="single-shop-product" style="height:370px;">
														<div class="product-upper">
															<img src="<?php echo base_url();?>img/series/<?php echo $x['series_id'];?>/<?php echo $x['series_image'];?>" class="img-responsive img" style="height:200px;width:100%;" alt="">
														</div>
														<h2><a href="<?=  base_url('testseries/description/'.$x['series_slug']);?>"><?php echo $x['series_name'];?></a></h2>
														<div class="product-carousel-price">
														 <del><i class="fa fa-inr" aria-hidden="true"></i><?= $x['series_actual_price'];?></del> 
														 <ins><i class="fa fa-inr" aria-hidden="true"></i> <?= $x['series_discount_price'];?></ins> 
														</div>  
														
														<div class="product-option-shop">
															<?php
																if(isset($_SESSION['logged_id']))
																{
																	?>
																		 
																		<a class="add_to_cart_button" href="#" onClick="addtocart('<?php echo $x['series_id'];?>');"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to cart</a>
																	<?php
																}
																else
																{
																	?>
																	 
																	<a class="add_to_cart_button" data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to cart</a>
																	<?php
																}
															?>
															
														</div>                       
													</div>
												</div>
											<?php
										}
									}
								?>
							 </div>
						</div>
						<!--
						<div class="tab-pane" id="tab_2">
							 <div class="row">
							  <div class="col-md-3">
							   <div class="single-shop-product">
									<div class="product-upper">
										<img src="<?php echo base_url();?>userassets/img/20.png" class="img-responsive" alt="">
									</div>
									<h2><a href="">Apple new mac book 2015 March :P</a></h2>
									<div class="product-carousel-price">
									 <del><i class="fa fa-inr" aria-hidden="true"></i> 999.00</del>   <ins><i class="fa fa-inr" aria-hidden="true"></i> 899.00</ins> 
									</div>  
									
									<div class="product-option-shop">
										<a class="add_to_cart_button" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to cart</a>
									</div>                       
								</div>
							  </div>
							  <div class="col-md-3">
							   <div class="single-shop-product">
									<div class="product-upper">
										<img src="<?php echo base_url();?>userassets/img/20.png" class="img-responsive" alt="">
									</div>
									<h2><a href="">Apple new mac book 2015 March :P</a></h2>
									<div class="product-carousel-price">
									 <del><i class="fa fa-inr" aria-hidden="true"></i> 999.00</del>   <ins><i class="fa fa-inr" aria-hidden="true"></i> 899.00</ins> 
									</div>  
									
									<div class="product-option-shop">
										<a class="add_to_cart_button" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to cart</a>
									</div>                       
								</div>
							  </div>
							  
							  <div class="col-md-3">
							   <div class="single-shop-product">
									<div class="product-upper">
										<img src="<?php echo base_url();?>userassets/img/20.png" class="img-responsive" alt="">
									</div>
									<h2><a href="">Apple new mac book 2015 March :P</a></h2>
									<div class="product-carousel-price">
									 <del><i class="fa fa-inr" aria-hidden="true"></i> 999.00</del>   <ins><i class="fa fa-inr" aria-hidden="true"></i> 899.00</ins> 
									</div>  
									
									<div class="product-option-shop">
										<a class="add_to_cart_button" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to cart</a>
									</div>                       
								</div>
							  </div>
							  
							  <div class="col-md-3">
							   <div class="single-shop-product">
									<div class="product-upper">
										<img src="<?php echo base_url();?>userassets/img/20.png" class="img-responsive" alt="">
									</div>
									<h2><a href="">Apple new mac book 2015 March :P</a></h2>
									<div class="product-carousel-price">
									 <del><i class="fa fa-inr" aria-hidden="true"></i> 999.00</del>   <ins><i class="fa fa-inr" aria-hidden="true"></i> 899.00</ins> 
									</div>  
									
									<div class="product-option-shop">
										<a class="add_to_cart_button" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to cart</a>
									</div>                       
								</div>
							  </div>
							  
							  
							 </div>
						</div>
						-->
						 
				</div>
		     </div>
			
			
            </div>
        </div>
    </div>


	<?php include('include/footer.php');?>
  </body>
</html>
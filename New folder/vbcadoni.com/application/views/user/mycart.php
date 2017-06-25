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
</head>
  <body>
   
    <?php include('include/header.php');?>
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>My Cart Items</h1>
                </div>				 
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
				<table class="table table-striped table-responsive">
				<thead>
					<tr>
						<th>#</th>
						<th>Test Series</th>
						<th>Price</th>
						<th>Remove</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$mycart	=	$array['mycart'];
					if(count($mycart))
					{
						$i=0;
						$total=0;
						foreach($mycart as $x)
						{
							?>
								<tr id="<?php echo $x['cart_id'];?>">
									<td><?php echo ++$i;?></td>
									<td>
										
										<img src="<?php echo base_url('img/series/'.$x['series_id'].'/'.$x['series_image']);?>" alt="<?php echo $x['series_name'];?>" class="img img-responsive" style="height:200px;">
										<br><h3><?php echo $x['series_name'];?></h3>
									</td>
									<td>
										<i class="fa fa-inr" aria-hidden="true"> <b> </i><?php echo $x['series_discount_price'];?></b>
									</td>
									<td>
										<button class="btn btn-danger" onClick="removecartitem('<?php echo $x['cart_id'];?>','<?php echo $x['series_discount_price'];?>');"><i class="fa fa-minus-square" aria-hidden="true"></i></button>
									</td>
								</tr>
								
							<?php
							$total	=	$total+$x['series_discount_price'];
						}
						?>
							<tr>
								<td colspan=""></td>
								<td colspan=""></td>
								<td colspan="">
									<h3 class="">Total: <i class="fa fa-inr" aria-hidden="true"></i><span id="total"> <?php echo $total;?></span> </h3>
									<input type="text" value="<?php echo $total;?>" id="total2">
								</td>
								<td>
									<a href="" class="btn btn-primary btn-block btn-lg" style="padding:8px;border-radius:0px;background:#1abc9c;">Proceed To Checkout</a>
								</td>
							</tr>
						<?php
					}
					else
					{
						?>
						<tr><td colspan="4"><h3 class="text text-center"><b>No Test Series Found in MyCart</b></h3></td></tr>
						<?php
					}
				?>
				
				</tbody>
				</table>
            </div>
        </div>
    </div>


	<?php include('include/footer.php');?>
  </body>
</html>
<script>
	function removecartitem(str,str2)
	{
				
		var xmlhttp;
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				var result	=	xmlhttp.responseText;
				if(result==1)
				{
					var total		=	$('#total2').val();
					var newtotal	=	total-str2;
					
					$('#total').html(newtotal);
					$('#total2').val(newtotal);
					$('#'+str).hide();
				}
			}
		}
		xmlhttp.open("GET",'<?php echo base_url('mycart/removeitem');?>?cart_id='+str,true);
		xmlhttp.send();			
		 
		
	}
</script>
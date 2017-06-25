<?php
	$free	=	$array['free'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MY TEST SERIES | ONLINE TEST | VBCADONI</title>
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
                    <h1>My Test Series</h1>
                </div>				 
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#home"><b>Paid Test Series</b></a></li>
					<li><a data-toggle="tab" href="#menu1"><b>Practise Tests</b></a></li>					 
				</ul>
				<div class="tab-content">
					<div id="home" class="tab-pane fade in active">
						<h1>No PAid Test Series Found.</h1>
					</div>
					<div id="menu1" class="tab-pane fade">
						<table class="table table-striped table-responsive">
							<thead>
								<tr>
									<th>#</th>
									<th>Test Series</th>
									<th>Price</th>
									 
								</tr>
							</thead>
							<tbody>
							<?php
								if(count($free))
								{
									$i=0;
									foreach($free as $x)
									{
									?>
									<tr>
										<th><img src="<?php echo base_url();?>img/series/<?php echo $x['series_id'];?>/<?php echo $x['series_image'];?>" class="img img-responsive" style="height:150px;width:200px;"></th>
										<th><?php echo $x['series_name'];?></th>									 
										<th> 
											<a href="<?php echo base_url('Test/viewpapers/'.$x['series_slug']);?>" style="border-radius:0px;" class="btn btn-warning btn-fill btn-block">View All Tests <i class="fa fa-chevron-right" aria-hidden="true"></i></a><br>
 										</th>
									</tr>
									<?php
									}
								}
								else
								{
									
								}
							?>
							
							</tbody>
						</table> 
					</div>					 
				</div>
				 
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
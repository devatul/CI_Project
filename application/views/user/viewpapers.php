<?php
	$paper	=	$array['paper'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.ico">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>VIEW PAPERS | ONLINE TEST | VBCADONI</title>
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
                    <h1><?= @$paper[0]['series_name'] ?></h1>
                </div>
            </div>
        </div>
    </div>


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
				<table class="table table-striped table-responsive">

				<tbody>
				<?php

					if(count($paper))
					{

						foreach($paper as $x)
						{
							?>
							<tr>
								<td><img src="<?php echo base_url('img/papers');?>/<?php echo $x['paper_id'];?>/<?php echo $x['paper_image'];?>" class="img img-responsive img-thumbnail" style="width:100px;height:100px;"></td>
 								<td><b><?php echo $x['paper_name'];?></b>
									<br><b>Duration: </b>
									<?php echo $x['paper_duration'];?> Mins</td>
								<td>
									<a href="javascript:void(0);" onClick="window.open('<?php echo site_url('paper/taketest/'.$x['paper_slug']);?>', '', 'fullscreen=yes, scrollbars=auto');" style="border-radius:0px;" class="btn btn-primary btn-block">Start Test</a><br>


								</td>
							</tr>
							<?php
						}
						echo "<tr><td colspan='3'>".$this->pagination->create_links()."</td></tr>";
					}
					else
					{
						?>
						<tr><td colspan="4"><h3 class="text text-center"><b>No Test Papers Available Yet.</b></h3></td></tr>
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

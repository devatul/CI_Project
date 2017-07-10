 <div class="header-area">
        <div class="container">
            <div class="row">            
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key"> <i class="fa fa-phone" aria-hidden="true"></i> +91-7981858158</span></a>
                            </li>

                              
                        </ul>
                    </div>
                </div>
				
				<div class="col-md-8">
                    <div class="user-menu">
                        <ul>
						<?php
							if(isset($_SESSION['logged_id']))
							{
								?>
									<li class="dropdown dropdown-small">
										<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">MY ACCOUNT<b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="<?= base_url('myaccount/accountinfo');?>">ACCOUNT INFO</a></li>
											<li><a href="<?= base_url('myaccount/changepassword');?>">CHANGE PASSWORD</a></li>
											<li><a href="<?= base_url('test/mytestseries');?>">MY TEST SERIES</a></li>
											<li><a href="#">ORDER HISTORY</a></li>
											 
											<li class="divider"></li>
											<li><a href="<?php echo base_url('logout');?>"><i class="fa fa-sign-out"></i> Logout</a></li>

										</ul>
									</li>
 								<?php
							}
							else
							{
								?>
								<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-user"></i> Login/Singup</a></li>
								<?php
							}
						?>
							  
                        </ul>
                    </div>
                </div>
				
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container" style="height:62px;">
            <div class="row" style="padding:0px;">
                <div class="col-sm-6" style="margin:0px;padding:0px;">
                    
                        <h1><a href="<?php echo base_url();?>"><img src="<?php echo base_url('img/logo.jpg');?>" style="height:60px;" class="img img-responsive"/></a></h1>
                     
                </div>
                
                <div class="col-sm-6" style="margin:0px;padding:0px;">
                    <div class="shopping-item"style="margin:7px;">
						<?php
							if(isset($_SESSION['logged_id']))
							{
								?>
								<a href="<?php echo base_url('mycart');?>">My Cart<i class="fa fa-shopping-cart"></i></a>
								<?php
							}
							else
							{
								?>
								<a href="#" data-toggle="modal" data-target="#myModal" >My Cart<i class="fa fa-shopping-cart"></i></a>
								<?php
							}
						?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <!--
						<li><a href="<?= base_url('courses');?>">Courses</a></li>
                        -->
						<li><a href="<?= base_url('testseries');?>">Test Series</a></li>
                     
                        <li><a href="#">Correspondence Courses</a></li>
                        <li class="dropdown dropdown-small">
							<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">ClassRoom Program</span><b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url('dailyupdates');?>">Daily Updates</a></li>
								<li><a href="<?php echo base_url('notifications');?>">Notifications</a></li>
							</ul>
						</li>
						 
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
	
	
	<!------------------------------------Modal Section---------------------------------------->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
                <h4 class="modal-title" id="myModalLabel">
                    Registration/Login</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
						    <li class="active"><a href="#Registration" data-toggle="tab">Registration</a></li>
                            <li><a href="#Login" data-toggle="tab">Login</a></li>                            
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">                            
                            <div class="tab-pane active" id="Registration">
                                <form role="form" action="" class="form-horizontal">
									<div id="regmsgbar"></div>
									<div class="form-group">
										<div class="col-sm-12">
										  <input type="text" class="form-control" id="reg_name" placeholder="Name" />
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<input type="email" class="form-control" id="reg_email" placeholder="Email" />
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<input type="text" class="form-control" id="reg_mobile" placeholder="Mobile" />
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<input type="password" class="form-control" id="reg_password" placeholder="Password" />
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<input type="password" class="form-control" id="reg_cpassword" placeholder="Confirm Password" />
										</div>
									</div>
									<div class="row">
										<div class="col-sm-10">
											<a onClick="register();" class="btn btn-success btn-md">REGISTER</a>
										</div>
									</div>									 
                                </form>
                            </div>
							<div class="tab-pane" id="Login">
								<div id="logmsgbar"></div>
                                <form role="form" class="form-horizontal">
									<div class="form-group">
										<div class="col-sm-12">
											<input type="email" class="form-control" id="log_email" placeholder="Email" />
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<input type="password" class="form-control" id="log_password" placeholder="password" />
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<a onClick="login();" class="btn btn-success btn-md">Login</a>
											<a href="javascript:;">Forgot your password?</a>
										</div>
									</div>
                               
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	<!------------------------------------Modal Section---------------------------------------->
	
	<script>
		 
		function register()
		{
			var user_email		=	$('#reg_email').val();
			var user_name		=	$('#reg_name').val();
			var user_mobile		=	$('#reg_mobile').val();
			var user_password	=	$('#reg_password').val();
			var user_cpassword	=	$('#reg_cpassword').val();
			var len				=	user_password.length;
			/*
			alert(user_email);
			alert(user_name);
			alert(user_mobile);
			alert(user_password);
			alert(user_cpassword);
			*/ 
			 
			 
			if(user_email=='' || user_name=='' || user_mobile=='' ||user_password=='' || user_cpassword=='')
			{
				$('#regmsgbar').html('<div class="alert alert-danger">Please Fill all the fields.</div>');
				//alert('Please Fill all the fields.');
			}
			else if(len<=5)
			{
				$('#regmsgbar').html('<div class="alert alert-danger">Passwords can not be less than 6 characters.</div>');
			}
			else if(user_password!=user_cpassword)
			{
				$('#regmsgbar').html('<div class="alert alert-danger">Passwords do not match.</div>');
			}
			else
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
						document.getElementById("regmsgbar").innerHTML=xmlhttp.responseText;
						setTimeout(function(){ location.reload(); }, 2000);
					}
				}
				xmlhttp.open("GET",'<?php echo base_url('register/storeuser');?>?user_email='+user_email+'&user_name='+user_name+'&user_mobile='+user_mobile+'&user_password='+user_password,true);
				xmlhttp.send();
				 
			}
		}
		
		function login()
		{
			var user_email		=	$('#log_email').val();			 
			var user_password	=	$('#log_password').val();
			if(user_email=='' || user_password=='')
			{
				$('#logmsgbar').html('<div class="alert alert-danger">Please Fill both the fields.</div>');				 
			}			 
			else
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
						 
						if(xmlhttp.responseText==1)
						{
							$('#logmsgbar').html("<div class='alert alert-success'><h5>Logged In!</h5></div>");
							setTimeout(function(){ location.reload(); }, 2000);
						}
						else
						{
							$('#logmsgbar').html("<div class='alert alert-danger'><h5>OOPS!.. Invalid Credentials</h5></div>");
						}
					
					}
				}
				xmlhttp.open("GET",'<?php echo base_url('login/checklogin');?>?user_email='+user_email+'&user_password='+user_password,true);
				xmlhttp.send();
				 
			}
		}
		function addtocart(str)
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
					 
					if(xmlhttp.responseText==1 || xmlhttp.responseText==3 )
					{
						$('#addtocartmodalbtn').click();
					}
					else
					{
						 alert('Error');
					}
				
				}
			}
			xmlhttp.open("GET",'<?php echo base_url('cart/addtocart');?>?cart_series_id='+str,true);
			xmlhttp.send();
		}
		
		 
	</script>
	  <button type="button" class="hidden" id="addtocartmodalbtn" data-toggle="modal" data-target="#cartmodal">Open Small Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="cartmodal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Cart</h2>
        </div>
        <div class="modal-body">
          <h4><b>Item Added to Cart.</b></h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
        </div>
      </div>
    </div>
  </div>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.ico">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>ADMIN | VBCADONI</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet"/>
<link href="<?php echo base_url();?>assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
<link href="<?php echo base_url();?>assets/css/demo.css" rel="stylesheet" />
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url();?>assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
<script src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">VBCADONI</a>
            </div>
            <ul class="nav">
                <li class="">
                    <a href="<?php echo site_url('admin');?>">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/course');?>">
                        <i class="pe-7s-user"></i>
                        <p>Course Section</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/testseries');?>">
                        <i class="pe-7s-note2"></i>
                        <p>Test Series Section</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/testpaper');?>">
                        <i class="pe-7s-news-paper"></i>
                        <p>Test Paper Section</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/manageusers');?>">
                        <i class="pe-7s-note2"></i>
                        <p>Manage Users</p>
                    </a>
                </li>
				        <li>
                    <a href="<?php echo site_url('admin/dailyupdates');?>">
                        <i class="pe-7s-science"></i>
                        <p>Daily Updates</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/notifications');?>">
                        <i class="pe-7s-map-marker"></i>
                        <p>Notifications</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-dashboard"></i></a></li>
                        <li><a class="navbar-brand" href="#">Dashboard</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="">My Account</a></li>                        
                        <li><a href="<?php echo site_url('admin/logout');?>">Log out</a></li>
                    </ul>
                </div>
            </div>
        </nav>

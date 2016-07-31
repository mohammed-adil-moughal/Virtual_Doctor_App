<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">
    <title>E-Daktari</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css" id="style-resource-1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-icons/entypo/css/entypo.css" id="style-resource-2">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic" id="style-resource-3">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" id="style-resource-4">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/neon-core.css" id="style-resource-5">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/neon-theme.css" id="style-resource-6">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/neon-forms.css" id="style-resource-7">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css" id="style-resource-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/webrtc-style.css" id="style-resource-9">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-icons/entypo/css/font-awesome.min.css" id="style-resource-10">
    <!--<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.3.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <!--<script src="<?php echo base_url(); ?>assets/js/webrtc/modernizr.custom.js"></script>-->
    <!--[if lt IE 9]><script src="http://demo.neontheme.com/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->
    <!-- TS1458243070: Neon - Responsive Admin Template created by Laborator -->
</head>
<body class="page-body" data-url="<?php echo base_url(); ?>">
    <!-- TS145824307018115: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
    <div class="page-container">
        <!-- TS145824307014816: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
        <div class="sidebar-menu">
            <div class="sidebar-menu-inner">
                <header class="logo-env">
                    <!-- logo -->
                    <div class="logo">
                        <a href="<?php echo base_url(); ?>"> <h1 style="color:white">E-Daktari</h1></a>
                    </div>
                    <!-- logo collapse icon -->
                    <div class="sidebar-collapse">
                        <a href="#" class="sidebar-collapse-icon">
                            <!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition --><i class="entypo-menu"></i> </a>
                    </div>
                    <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
                    <div class="sidebar-mobile-menu visible-xs">
                        <a href="#" class="with-animation">
                            <!-- add class "with-animation" to support animation --><i class="entypo-menu"></i> </a>
                    </div>
                </header>
                <ul id="main-menu" class="main-menu">
                    <li> <a href="<?php echo base_url(); ?>"><i class="entypo-home"></i><span class="title">Home</span></a> </li>
                    <li> <a href="<?php echo base_url(); ?>patients"><i class="entypo-heart"></i><span class="title">Patients</span></a> </li>
                    <li> <a href="<?php echo base_url(); ?>doctors"><i class="entypo-plus-squared"></i><span class="title">Doctors</span></a> </li>
                    
                </ul>
            </div>
        </div>
        <div class="main-content">
            <!-- TS145824307016045: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
            <div class="row">
                <!-- Profile Info and Notifications -->
                <div class="col-md-6 col-sm-8 clearfix">
                    <ul class="user-info pull-left pull-none-xsm">
                        <!-- Profile Info -->
                        <li class="profile-info dropdown">
                            <!-- add class "pull-right" if you want to place this from right -->
                            <a class="dropdown-toggle" data-toggle="dropdown"> 
                                <img src="<?php echo base_url(); ?>assets/images/default-profile.png" alt="" class="img-circle" width="44" /> <?php echo $loggedUserInfo->firstname.' '.$loggedUserInfo->lastname ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Raw Links -->
                <div class="col-md-6 col-sm-4 clearfix hidden-xs">
                    <ul class="list-inline links-list pull-right">
                        <li>
                            <a href="chatgrp"  data-collapse-sidebar="1"> <i class="entypo-chat"></i> Chat
                                <span class="badge badge-success chat-notifications-badge is-hidden">0</span> </a>
                        </li>
                        <li class="sep"></li>
                        <li> 
                            <a href="<?php echo base_url(); ?>logout">
                                Log Out <i class="entypo-logout right"></i> 
                            </a> 
                        </li>
                    </ul>
                </div>
            </div>
            <hr />
            
           
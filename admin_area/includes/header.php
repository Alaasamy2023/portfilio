<?php


include("db.php");



?>





<!doctype html>
<html class="no-js " lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>admin</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<!-- JQuery DataTable Css -->
<link rel="stylesheet" href="assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
<!-- Custom Css -->
<link  rel="stylesheet" href="assets/css/style.min.css">
</head>

<body class="theme-blush">


<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="index.html"><img src="assets/images/logo.svg" width="25" alt="Aero"><span class="m-l-10">Aero</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="profile.html"><img src="assets/images/profile_av.jpg" alt="User"></a>
                    <div class="detail">
                        <h4>Michael</h4>
                        <small>Super Admin</small>
                    </div>
                </div>
            </li>
            <li><a href="index.html"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
           
          <!-- ----------------------------------------------------------------------  -->
           
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>hero</span></a>
                <ul class="ml-menu">
                    <li><a href="show_hero.php">view</a></li>
                    <li><a href="chat.html">Add hero</a></li>
                  
                </ul>
                </li>



          <!-- ----------------------------------------------------------------------  -->



                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>social</span></a>
                <ul class="ml-menu">
                    <li><a href="show_social.php">show social</a></li>
                    <li><a href="chat.html">Add social</a></li>
                  
                </ul>
                </li>

          <!-- ----------------------------------------------------------------------  -->


          <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>about</span></a>
                <ul class="ml-menu">
                    <li><a href="show_about.php">show about</a></li>
                    <li><a href="chat.html">Add about</a></li>
                  
                </ul>
                </li>

          <!-- ----------------------------------------------------------------------  -->

          <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>FACTS</span></a>
                <ul class="ml-menu">
                    <li><a href="show_fact.php">show FACTS</a></li>
                    <li><a href="chat.html">Add FACTS</a></li>
                  
                </ul>
                </li>

          <!-- ----------------------------------------------------------------------  -->

          <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>SKILLS</span></a>
                <ul class="ml-menu">
                    <li><a href="show_skills.php">show SKILLS</a></li>
                    <li><a href="show_skills_info.php">show SKILLS information</a></li>

                    <li><a href="chat.html">Add SKILLS</a></li>
                  
                </ul>
                </li>

          <!-- ----------------------------------------------------------------------  -->

          <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>RESUME</span></a>
                <ul class="ml-menu">
                    <li><a href="show_resume.php">show RESUME</a></li>
                    <li><a href="chat.html">Add RESUME</a></li>
                  
                </ul>
                </li>

          <!-- ----------------------------------------------------------------------  -->

          <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Sumary</span></a>
                <ul class="ml-menu">
                    <li><a href="show_information.php">show Sumary</a></li>
                    <li><a href="chat.html">Add Sumary</a></li>
                  
                </ul>
                </li>

          <!-- ----------------------------------------------------------------------  -->

          <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>PORTFOLIO</span></a>
                <ul class="ml-menu">
                    <li><a href="show_portfolio.php">show PORTFOLIO</a></li>
                    <li><a href="chat.html">Add PORTFOLIO</a></li>
                  
                </ul>
                </li>

          <!-- ----------------------------------------------------------------------  -->



          <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>SERVICES</span></a>
                <ul class="ml-menu">
                    <li><a href="show_service.php">show SERVICES</a></li>
                    <li><a href="chat.html">Add SERVICES</a></li>
                  
                </ul>
                </li>

          <!-- ----------------------------------------------------------------------  -->



          <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>CONTACT</span></a>
                <ul class="ml-menu">
                    <li><a href="show_contact.php">show CONTACT</a></li>
                  
                </ul>
                </li>

          <!-- ----------------------------------------------------------------------  -->







        </ul>
    </div>
</aside>


<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                   
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div>
            </div>
        </div>

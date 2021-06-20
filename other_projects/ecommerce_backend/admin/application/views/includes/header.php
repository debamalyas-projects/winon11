<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <style>
    	.error{
    		color:red;
    		font-weight: normal;
    	}
    </style>
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>
    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- <body class="sidebar-mini skin-black-light"> -->
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>Ecommerce</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Ecommerce</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $name; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $name; ?>
                      <small><?php echo $role_text; ?></small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo base_url(); ?>loadChangePass" class="btn btn-default btn-flat"><i class="fa fa-key"></i> Change Password</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <?php echo $name; ?>
          <small><?php echo $role_text; ?></small>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>dashboard">
                <span>Dashboard</span></i>
              </a>
            </li>
            <?php
            if($role == 1 || $role == 2)
            {
            ?>
			<li class="treeview">
              <a href="<?php echo base_url(); ?>assetListing">
                <span>Asset</span>
              </a>
            </li>
			<li class="treeview">
              <a href="<?php echo base_url(); ?>brandListing">
                <span>Brand</span>
              </a>
            </li>
			<li class="treeview">
              <a href="<?php echo base_url(); ?>serviceListing">
                <span>Service</span>
              </a>
            </li>
			<!--<li class="treeview">
              <a href="<?php echo base_url(); ?>templateListing">
                <span>Template</span>
              </a>
            </li>-->
			<li class="treeview">
              <a href="<?php echo base_url(); ?>categoryListing">
                <span>Category</span>
              </a>
            </li>
			<li class="treeview">
              <a href="<?php echo base_url(); ?>contentListing">
                <span>Content</span>
              </a>
            </li>
			
			<li class="treeview">
              <a href="<?php echo base_url(); ?>productListing">
                <span>Product</span>
              </a>
            </li>
			<li class="treeview">
              <a href="<?php echo base_url(); ?>attributeListing">
                <span>Attribute</span>
              </a>
            </li>
			<li class="treeview">
              <a href="<?php echo base_url(); ?>unitListing">
                <span>Add Unit</span>
              </a>
            </li>
			<li class="treeview">
              <a href="<?php echo base_url(); ?>promotionListing">
                <span>Promotion</span>
              </a>
            </li>
			<li class="treeview">
              <a href="<?php echo base_url(); ?>assetlinkListing">
                <span>Asset Link</span>
              </a>
            </li>
			<li class="treeview">
              <a href="<?php echo base_url(); ?>ratingListing">
                <span>Rating</span>
              </a>
            </li>
			<li class="treeview">
              <a href="<?php echo base_url(); ?>reviewListing">
                <span>Review</span>
              </a>
            </li>
			<li class="treeview">
              <a href="<?php echo base_url(); ?>faqListing">
                <span>FAQ</span>
              </a>
            </li>
			<li class="treeview">
              <a href="<?php echo base_url(); ?>vendorListing">
                <span>Vendor</span>
              </a>
            </li>
			<li class="treeview">
              <a href="<?php echo base_url(); ?>deliverypersonmanagementListing">
                <span>Delivery Person</span>
              </a>
            </li>
			<li class="treeview">
              <a href="<?php echo base_url(); ?>customerListing">
                <span>Customer</span>
              </a>
            </li>
            <?php
            }
            if($role == 1)
            {
            ?>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>userListing">
                <span>Users</span>
              </a>
            </li>
            <?php
            }
            ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
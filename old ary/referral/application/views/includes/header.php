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
    <script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>../admin/ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>
    <script src="<?php echo base_url(); ?>assets/tiny/tiny/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="<?php echo base_url(); ?>assets/tiny/tiny/custom.tinymce.js"></script>
    
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
          <span class="logo-mini"><b>ED</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Eridiocese</b></span>
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
                <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
              </a>
            </li>
      <?php
      if($role == 1 || $role==4)
      {
      ?>
	   <li class="treeview">
        <a href="<?php echo base_url(); ?>viewclergy_details"><i class="fa fa-pencil"></i> <span>Add/Edit Clergy Details</span>
              
            </a>   
      </li>
      <li class="treeview">
        <a href="<?php echo base_url(); ?>view_human_rights"><i class="fa fa-pencil"></i> <span>Add/Edit Human Rights</span>
              
            </a>   
      </li>
      <?php
      }
      ?>
      <?php
      if($role == 1 || $role == 2)
      {
      ?>
      <li class="treeview">
        <a href="<?php echo base_url(); ?>view_clergy_application"><i class="fa fa-adjust"></i> <span>Clergy Application form</span>
              
            </a>   
      </li>
    <?php } 
    if($role == 1)
    {
    ?>  
      <li class="treeview">
        <a href="<?php echo base_url(); ?>user_view_clergy_application"><i class="fa fa-adjust"></i> <span>Edit Clergy Application</span>
              
            </a>   
      </li>
  <?php }
  if($role == 1 || $role == 2)
      {
    ?>
      <li class="treeview">
        <a href="<?php echo base_url(); ?>view_bible_application"><i class="fa fa-university"></i> <span>University Application form</span>
              
            </a>   
      </li>
    <?php }
    if($role == 1)
    {
    ?>
     <li class="treeview">
        <a href="<?php echo base_url(); ?>edit_university_application"><i class="fa fa-adjust"></i> <span>Edit University Application</span>
              
            </a>   
      </li>
	<li class="treeview">
        <a href="<?php echo base_url(); ?>view_nodue_application"><i class="fa fa-ticket"></i> <span>No Due Application form</span>
              
            </a>   
      </li>
      <li class="treeview">
        <a href="<?php echo base_url(); ?>view_bill_application"><i class="fa fa-btc"></i> <span>Bill Application form</span>
              
            </a>   
      </li>
       <li class="treeview"><a href="#"><i class="fa fa-money"></i>Income</a>
          <ul class="treeview-menu">
          
		 <li><a href="<?php echo base_url(); ?>add_income">Add Income</a></li>
		  </ul>
		  </li>
     
      <li class="treeview">
        <a href="<?php echo base_url(); ?>view_entryform"><i class="fa fa-database"></i> <span>Entry forms</span>
              
            </a>   
      </li>
      <?php
      }
      ?>  
            <?php
            if($role == 1 || $role ==4)
            {
            ?>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>userListing">
                <i class="fa fa-users"></i>
                <span>Users</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#" >
                <i class="fa fa-files-o"></i>
                <span>Reports</span>
              </a>
              <ul class="treeview-menu">
              <li><a href="<?php echo base_url(); ?>View_Income">Income Reports</a></li> 
              <li><a href="<?php echo base_url(); ?>Clergy_Expiring_report">Clergy Expiring report</a></li> 
              <li><a href="<?php echo base_url(); ?>Clergy_Birthday_report">Clergy Birthdate report</a></li> 
              <li><a href="<?php echo base_url(); ?>Human_Rights_Expiring_report">Human Rights Expiring report</a></li> 
              <li><a href="<?php echo base_url(); ?>Human_Rights_Birthday_report">Human Rights Birthdate report</a></li> 
             </ul>
            </li>
            <?php
            }
            ?>
          </ul>
           <script>
      		$(document).ready(function(){
                /** add active class and stay opened when selected */
                var url = window.location;
                // for sidebar menu entirely but not cover treeview
                $('ul.sidebar-menu a').filter(function() {
                     return this.href == url;
                }).parent().addClass('active');

                // for treeview
                $('ul.treeview-menu a').filter(function() {
                     return this.href == url;
                }).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');
            });
      </script>
        </section>
        <!-- /.sidebar -->
      </aside>
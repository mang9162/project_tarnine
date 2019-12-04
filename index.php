<?php
session_start();
ob_start();

if($_SESSION['USERNAME'] == ''){
  header( "location: services/logout.php" );
  exit(0);
}
  
include("connect/database.php");

$conDB = new db_conn();

//$strSQL = "SELECT * FROM `acc_login` WHERE acc_login.acc_username = '$username' AND acc_login.acc_password = '$password'";
//$objQuery = $conDB->sqlQuery($strSQL);
//$objResult = mysqli_fetch_assoc($objQuery);

$strSQL = "SELECT * FROM `user_account` WHERE `username` = '".$_SESSION['USERNAME']."' LIMIT 1";
$objQuery = $conDB->sqlQuery($strSQL);
$objResult = mysqli_fetch_assoc($objQuery);

$name = $objResult['name'];

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
<link rel="stylesheet" href="dist/css/style.css">
<title>Lawyer System.</title>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div id="alert-background"></div>
<div class="wrapper">
  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="" class="logo">
      <span class="logo-mini" id="companycode">T9</span>
      <span class="logo-lg" id="company">Tanine</span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell"></i>
              <span class="label label-danger">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="session.php" target="_blank" >
              <i class="fa fa-book" aria-hidden="true"></i>
            </a>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/profile/user.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs" id="username"><?php echo $name; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="dist/img/profile/user.png" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat" onClick="logout()">Sign out</a>
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
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HOME</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="#" onClick="goPage('pages/dashboard.php');" style="padding-left:11px;"><img src="dist/img/icon/presentation.svg" width="24" style="margin-right:10px;"><span>Dashboard</span></a></li>
        <li class="treeview">
          <a href="#" style="padding-left:11px;"><img src="dist/img/icon/invoice.svg" width="24" style="margin-right:10px;"><span>Document</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#" onClick="goPage('pages/notis_list.php');">Notis</a></li>
            <!-- <li><a href="#" onClick="goPage('pages/vendor.php');">Notis</a></li> -->
          </ul>
        </li>
        <li><a href="#" onClick="goPage('pages/blank.php');" style="padding-left:11px;"><img src="dist/img/icon/files.svg" width="24" style="margin-right:10px;"><span>Blank</span></a></li>
        <li><a href="#" style="padding-left:11px;"><img src="dist/img/icon/files.svg" width="24" style="margin-right:10px;"><span>Report</span></a></li>
        <li><a href="#" style="padding-left:11px;"><img src="dist/img/icon/it.svg" width="24" style="margin-right:10px;"><span>Administrator</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" ><iframe id="main-display" src="pages/<?php echo $_SESSION['PAGE'];?>"></iframe></div>
  <!-- /.content-wrapper -->
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Version alpla0.0.01
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="#">Lawyer System, T9.</a></strong> All rights reserved.
  </footer>
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/app.js"></script>
</body>

</html>
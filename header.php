<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>RELAWAN COVID19</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
</head>
<div class="wrapper">
  <header class="main-header">
    <a href="index.php" class="logo">
      <span class="logo-mini">DRC</span>
      <span class="logo-lg">Relawan Covid19</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
       <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">Settings</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="gambar/arah2.jpg" class="img-circle" alt="User Image">
                <p>
				<?php
					echo "AGUNG H";
					echo "<br>";
					echo "Admin";
				?>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profil.php" class="btn btn-default btn-flat">Profil</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
 <aside class="main-sidebar">
   <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
       <li class="treeview">
          <a href="#">
            <i class="fa fa fa-file-text"></i> <span>DATA RELAWAN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="data/data_relawan.php"><i class="fa"></i>Lihat Relawan</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>INPUT RELAWAN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="tambah/input_relawan.php"><i class="fa"></i>Input Relawan</a></li>
          </ul>
        </li>
      </ul>
   </section>
 </aside>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('');?>vendor/stint/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url('');?>vendor/stint/css/img/satlantas_logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    SATLANTAS BENGKALIS
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="<?php echo base_url('');?>vendor/stint/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="<?php echo base_url('');?>vendor/stint/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo base_url('');?>vendor/stint/assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url('');?>vendor/stint/assets/demo/demo.css" rel="stylesheet" />
</head>
<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="<?php echo base_url('index.php/homepage');?>" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="<?php echo base_url('');?>vendor/stint/css/img/satlantas_logo.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="<?php echo base_url('index.php/homepage');?>" class="simple-text logo-normal">
		<?php echo $this->session->userdata('auth')['nama']; ?>
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="./dashboard.html">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./icons.html">
              <i class="nc-icon nc-single-copy-04"></i>
              <p>Report</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('index.php/data');?>">
              <i class="nc-icon nc-paper"></i>
              <p>Data</p>
            </a>
          </li>
		  <?php
		  
		  if ($this->session->userdata('auth')['role'] == 1)
		  echo '<li>
            <a href="./notifications.html">
              <i class="nc-icon nc-single-02"></i>
              <p>User Management</p>
            </a>
          </li>';?>

          <li class="active-pro">
            <a href="<?php echo base_url('index.php/auth/logout');?>">
              <i class="nc-icon nc-button-power"></i>
              <p>Log Out</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
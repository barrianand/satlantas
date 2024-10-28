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
          <li>
            <a href="<?php echo base_url('index.php/homepage');?>">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('index.php/laporan');?>">
              <i class="nc-icon nc-single-copy-04"></i>
              <p>Report</p>
            </a>
          </li>
          <li class="active ">
            <a href="<?php echo base_url('index.php/data');?>">
              <i class="nc-icon nc-paper"></i>
              <p>Data</p>
            </a>
          </li>
		  <?php
		  
		  if ($this->session->userdata('auth')['role'] == 1){
        ?><li>
              <a href="<?php echo base_url('index.php/users');?>">
                <i class="nc-icon nc-single-02"></i>
                <p>User Management</p>
              </a>
            </li><?php
          } ?>

          <li class="active-pro">
            <a href="<?php echo base_url('index.php/auth/logout');?>">
              <i class="nc-icon nc-button-power"></i>
              <p>Log Out</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
<body class="">
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Data Record Satlantas Bengkalis</a>
          </div>
        </div>
      </nav>
      <?php
        if(!empty($this->uri->segment(3))){
        $tgl = 0;
        } else $tgl = 1;
      ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Rekap Data Hasil Survey Indeks Kepuasan Masyakarat</h4>
                <form action="<?php echo base_url('index.php/data/filtering');?>" method="post">
                  <label for="fdate">From Date</label>
			      			<input type="date" name="fdate" required>
			      			<label for="tdate">To Date</label>
			            <input type="date" name="tdate" required>
                  <button type="submit" class="btn btn-primary">Cari</button>
                  <button type="button" class="btn btn-primary float-right" onclick="location.href='<?= base_url(); ?>index.php/data/export/<?php echo $tgl;?>'">
                    Export Data
                </button>
		          </form>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        No
                      </th>
                      <th>
                        Nama
                      </th>
                      <th>
                        No HP
                      </th>
                      <th class="col-md-1">
                        Masukkan
                      </th>
                      <th>
                        <a data-mdb-ripple-color="blue" href='<?= base_url(); ?>index.php/data/filtering/<?php echo $tgl;?>'>
                        Tanggal
                        </a>
                      </th>
                      <th>U1</th>
                      <th>U2</th>
                      <th>U3</th>
                      <th>U4</th>
                      <th>U5</th>
                      <th>U6</th>
                      <th>U7</th>
                      <th>U8</th>
                      <th>U9</th>
                      <th>
                        Email
                      </th>
                    </thead>
                    <tbody>
                    <?php 
                    $nomor = 1;
                    foreach ($h->result() as $row)  
                    {  
                        ?><tr>  
                        <td><?php echo $nomor;
                            $nomor++;?></td>

                        <td><?php echo $row->nama;?></td>  
                        <td><?php echo $row->no_hp;?></td>  
                        <td><?php echo $row->masukkan;?></td>
                        <td><?php echo $row->tanggal;?></td>
                        <td><?php echo $row->a1;?></td>
                        <td><?php echo $row->a2;?></td>
                        <td><?php echo $row->a3;?></td>
                        <td><?php echo $row->a4;?></td>
                        <td><?php echo $row->a5;?></td>
                        <td><?php echo $row->a6;?></td>
                        <td><?php echo $row->a7;?></td>
                        <td><?php echo $row->a8;?></td>
                        <td><?php echo $row->a9;?></td>
                        <td><?php echo $row->email;?></td>
                        </tr>  
                    <?php }  
                    ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>
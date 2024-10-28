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
  <script src="<?php echo base_url('');?>vendor/stint/js/canvasjs.min.js"></script>
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
          <li class="active">
            <a href="<?php echo base_url('index.php/laporan');?>">
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
      <?php
      $k1=0;
      $k2=0;
      $k3=0;
      $k4=0;

      $u1=0; $u2=0; $u3=0; $u4=0; $u5=0; $u6=0; $u7=0; $u8=0; $u9=0;
      $total=0;
      foreach ($h as $row)  
      {  
        if($row['a1']=='4'){ $k1++;} 
        elseif ($row['a1']=='3') { $k2++;} 
        elseif ($row['a1']=='2') { $k3++;} 
        else { $k4++;}

        if($row['a2']==4){ $k1++;} 
        elseif ($row['a2']==3) { $k2++;} 
        elseif ($row['a2']==2) { $k3++;} 
        else { $k4++;}

        if($row['a3']==4){ $k1++;} 
        elseif ($row['a3']==3) { $k2++;} 
        elseif ($row['a3']==2) { $k3++;} 
        else { $k4++;}

        if($row['a4']==4){ $k1++;} 
        elseif ($row['a4']==3) { $k2++;} 
        elseif ($row['a4']==2) { $k3++;} 
        else { $k4++;}

        if($row['a5']==4){ $k1++;} 
        elseif ($row['a5']==3) { $k2++;} 
        elseif ($row['a5']==2) { $k3++;} 
        else { $k4++;}
        
        if($row['a6']==4){ $k1++;} 
        elseif ($row['a6']==3) { $k2++;} 
        elseif ($row['a6']==2) { $k3++;} 
        else { $k4++;}

        if($row['a7']==4){ $k1++;} 
        elseif ($row['a7']==3) { $k2++;} 
        elseif ($row['a7']==2) { $k3++;} 
        else { $k4++;}

        if($row['a8']==4){ $k1++;} 
        elseif ($row['a8']==3) { $k2++;} 
        elseif ($row['a8']==2) { $k3++;} 
        else { $k4++;}

        if($row['a9']==4){ $k1++;} 
        elseif ($row['a9']==3) { $k2++;} 
        elseif ($row['a9']==2) { $k3++;} 
        else { $k4++;}

        $total++;
        $u1 = $u1 + $row['a1'];
        $u2 = $u2 + $row['a2'];
        $u3 = $u3 + $row['a3'];
        $u4 = $u4 + $row['a4'];
        $u5 = $u5 + $row['a5'];
        $u6 = $u6 + $row['a6'];
        $u7 = $u7 + $row['a7'];
        $u8 = $u8 + $row['a8'];
        $u9 = $u9 + $row['a9'];
      }

      $jan=0;
      $feb=0;
      $mar=0;
      $apr=0;
      $mei=0;
      $jun=0;
      $jul=0;
      $aug=0;
      $sep=0;
      $okt=0;
      $nov=0;
      $des=0;

      foreach ($i as $row)  
      {  
        if($row['bulan']==1){ $jan = $row['jumlah'];}
        elseif($row['bulan']==2){ $feb = $row['jumlah'];}
        elseif($row['bulan']==3){ $mar = $row['jumlah'];}
        elseif($row['bulan']==4){ $apr = $row['jumlah'];}
        elseif($row['bulan']==5){ $mei = $row['jumlah'];}
        elseif($row['bulan']==6){ $jun = $row['jumlah'];}
        elseif($row['bulan']==7){ $jul = $row['jumlah'];}
        elseif($row['bulan']==8){ $aug = $row['jumlah'];}
        elseif($row['bulan']==9){ $sep = $row['jumlah'];}
        elseif($row['bulan']==10){ $okt = $row['jumlah'];}
        elseif($row['bulan']==11){ $nov = $row['jumlah'];}
        elseif($row['bulan']==12){ $des = $row['jumlah'];}
      }

      $u1 = $u1/$total;
      $u2 = $u2/$total;
      $u3 = $u3/$total;
      $u4 = $u4/$total;
      $u5 = $u5/$total;
      $u6 = $u6/$total;
      $u7 = $u7/$total;
      $u8 = $u8/$total;
      $u9 = $u9/$total;

      // jumlah NRR IKM Tertimbang
      // jumlah NRR IKM per unsur x 0.111
      $u1t = $u1 * 0.111;
      $u2t = $u2 * 0.111;
      $u3t = $u3 * 0.111;
      $u4t = $u4 * 0.111;
      $u5t = $u5 * 0.111;
      $u6t = $u6 * 0.111;
      $u7t = $u7 * 0.111;
      $u8t = $u8 * 0.111;
      $u9t = $u9 * 0.111;

      // Mencari indeks kepuasan masyakarat
      // jumlah NRR IKM Tertimbang dikali 25
      $ikm = ($u1t + $u2t + $u3t + $u4t + $u5t + $u6t + $u7t + $u8t + $u9t) * 25; 

      ?>
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
            <a class="navbar-brand" href="javascript:;">Laporan Keseluruhan</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title"> Rekap Data Hasil Survey Indeks Kepuasan Masyakarat</h4>
                  <form action="<?php echo base_url('index.php/laporan/filtering');?>" method="post">
                    <label for="fdate">From Date</label>
                    <input type="date" name="fdate" required>
                    <label for="tdate">To Date</label>
                    <input type="date" name="tdate" required>
                    <button type="submit" class="btn btn-primary">Cari</button>
                    
                    <button type="button" class="btn btn-primary float-right"
                    onclick="window.open('<?= base_url(); ?>index.php/laporan/pdf','popUpWindow','height=1000,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');">
                    <!-- onclick="location.href='<?= base_url(); ?>index.php/laporan/pdf'"> -->
                      Print Data
                  </button>
                </form>
                </div>
              </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7">
              <div class="card card-chart">
                <div class="card-header">
                  <h5 class="card-title">Nilai Rata-Rata Unsur IKM</h5>
                  <p class="card-category">Diagram Chart</p>
                </div>
                <div class="card-body">
                  <div id="chartContainer"></div>
                <div class="card-footer">
                  <hr />
                  <div class="card-stats">
                    <i class="fa fa-check"></i> Nilai Rata-Rata Unsur Indeks Kepuasan Masyakarat
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-5">
              <div class="card ">
                <div class="card-header ">
                  <h5 class="card-title">Komposisi IKM</h5>
                  <p class="card-category">Diagram Pie</p>
                </div>
                <div class="card-body ">
                  <div id="piechart"></div>
                </div>
                <div class="card-footer ">
                  <hr>
                  <div class="stats">
                    <i class="fa fa-calendar"></i> Komposisi Berdasarkan Kategori
                  </div>
                </div>
              </div>
            </div>
        </div>


        <div class="row">
          <div class="col-md-12">
            <div class="card ">
            <div class="card-body">
              <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                      <th>Unsur 1</th>
                      <th>Unsur 2</th>
                      <th>Unsur 3</th>
                      <th>Unsur 4</th>
                      <th>Unsur 5</th>
                      <th>Unsur 6</th>
                      <th>Unsur 7</th>
                      <th>Unsur 8</th>
                      <th>Unsur 9</th>
                      <th>Total</th>
                      <th>Persentase</th>
                    </thead>
                    <tbody>
                    <tr>  
                        <td><?php echo $u1*$total;?></td>  
                        <td><?php echo $u2*$total;?></td>  
                        <td><?php echo $u3*$total;?></td>
                        <td><?php echo $u4*$total;?></td>
                        <td><?php echo $u5*$total;?></td>
                        <td><?php echo $u6*$total;?></td>
                        <td><?php echo $u7*$total;?></td>
                        <td><?php echo $u8*$total;?></td>
                        <td><?php echo $u9*$total;?></td>
                        <td><?php echo $total*9;?></td>
                        <td><?php echo $ikm;?></td>
                    </tr>  
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-satisfied text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Survey Kepuasan Masyarakat</p>
                      <p class="card-title"><?=round($ikm,2)?>%<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i>
                  <?php
                  if($ikm>81.26) echo 'Sangat Baik';
                  elseif($ikm>62.51) echo 'Baik';
                  elseif($ikm>43.76) echo 'Kurang Baik';
                  else echo 'Tidak Baik';
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-single-02 text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Total Responden</p>
                      <p class="card-title"><?=$total?> Orang<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i>
                  Masyakarat Duri
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-6">
            <div class="card ">
            <div class="card-body">
                <h5 class="card-title">Persentase Kategori</h5>
              <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                      <th>Kategori</th>
                      <th>Jumlah</th>
                      <th>Persentase (%)</th>
                    </thead>
                    <tbody>
                    <tr>  
                        <td>Sangat Baik</td>  
                        <td><?php echo $k1;?></td>  
                        <td><?php 
                            $persentase = $k1/($total*9) * 100;
                            echo round($persentase,2);?>
                        </td>
                    </tr>  
                    <tr>  
                        <td>Baik</td>  
                        <td><?php echo $k2;?></td>  
                        <td><?php 
                            $persentase = $k2/($total*9) * 100;
                            echo round($persentase,2);?>
                        </td>
                    </tr>  
                    <tr>  
                        <td>Cukup Baik</td>  
                        <td><?php echo $k3;?></td>  
                        <td><?php 
                            $persentase = $k3/($total*9) * 100;
                            echo round($persentase,2);?>
                        </td>
                    </tr>  
                    <tr>  
                        <td>Tidak Baik</td>  
                        <td><?php echo $k4;?></td>  
                        <td><?php 
                            $persentase = $k4/($total*9) * 100;
                            echo round($persentase,2);?>
                        </td>
                    </tr>  
                    <tr>  
                        <td>Total</td>  
                        <td><?php echo $total*9;?></td>  
                        <td>100</td>
                    </tr>  
                    </tbody>
                  </table>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card ">
            <div class="card-body">
                <h5 class="card-title">Keterangan Setiap Unsur</h5>
              <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                      <th>No.</th>
                      <th>Unsur Pelayanan</th>
                      <th>Nilai Rata</th>
                    </thead>
                    <tbody>
                    <tr>  
                        <td>U1</td>  
                        <td>Persyaratan</td>  
                        <td><?php echo round($u1,3);?></td>
                    </tr>  
                    <tr>  
                        <td>U2</td>  
                        <td>Prosedur</td>  
                        <td><?php echo round($u2,3);?></td>
                    </tr>  
                    <tr>  
                        <td>U3</td>  
                        <td>Waktu Layanan</td>  
                        <td><?php echo round($u3,3);?></td>
                    </tr>  
                    <tr>  
                        <td>U4</td>  
                        <td>Biaya/Tarif</td>  
                        <td><?php echo round($u4,3);?></td>
                    </tr>  
                    <tr>  
                        <td>U5</td>  
                        <td>Produk Layanan</td>  
                        <td><?php echo round($u5,3);?></td>
                    </tr>  
                    <tr>  
                        <td>U6</td>  
                        <td>Kompetensi Pelaksana</td>  
                        <td><?php echo round($u6,3);?></td>
                    </tr>  
                    <tr>  
                        <td>U7</td>  
                        <td>Perilaku Pelaksana</td>  
                        <td><?php echo round($u7,3);?></td>
                    </tr>  
                    <tr>  
                        <td>U8</td>  
                        <td>Penanganan Pengaduan, Saran dan Masukkan</td>  
                        <td><?php echo round($u8,3);?></td>
                    </tr>  
                    <tr>  
                        <td>U9</td>  
                        <td>Sarana dan Prasarana</td>  
                        <td><?php echo round($u9,3);?></td>
                    </tr>  
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?php echo base_url('');?>vendor/stint/assets/js/core/jquery.min.js"></script>
  <script src="<?php echo base_url('');?>vendor/stint/assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url('');?>vendor/stint/assets/js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url('');?>vendor/stint/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?php echo base_url('');?>vendor/stint/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url('');?>vendor/stint/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url('');?>vendor/stint/assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url('');?>vendor/stint/assets/demo/demo.js"></script>
  <script type="text/javascript" src="<?php echo base_url('');?>vendor/stint/js/loader.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });

    // Proses diagram pie
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
      ['Kategori', 'Jumlah'],
      ['Sangat Baik', <?=$k1?>],
      ['Baik', <?=$k2?>],
      ['Cukup Baik', <?=$k3?>],
      ['Tidak Baik', <?=$k4?>]
    ]);

    // Optional; add a title and set the width and height of the chart
    var options = {'title':'IKM Composition', 'width':400, 'height':300};

    // Display the chart inside the <div> element with id="piechart"
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
    }

    // Proses diagram chart
    google.charts.setOnLoadCallback(drawChart2);
    function drawChart2() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Rata-Rata", { role: "style" } ],
        ["U1", <?=$u1?>, "#b87333"],
        ["U2", <?=$u2?>, "silver"],
        ["U3", <?=$u3?>, "gold"],
        ["U4", <?=$u4?>, "blue"],
        ["U5", <?=$u5?>, "lightblue"],
        ["U6", <?=$u6?>, "green"],
        ["U7", <?=$u7?>, "red"],
        ["U8", <?=$u8?>, "grey"],
        ["U9", <?=$u9?>, "gold"],
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Rata-Rata Unsur",
        width: 650,
        height: 400,
        bar: {groupWidth: "90%"},
        legend: { position: "absolute" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("chartContainer"));
      chart.draw(view, options);
    }

    // proses line chart
    google.charts.setOnLoadCallback(drawChart3);

      function drawChart3() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Total Responden'],
            ['Jan',  <?=$jan?>],
            ['Feb',  <?=$feb?>],
            ['Mar',  <?=$mar?>],
            ['Apr',  <?=$apr?>],
            ['Mei',  <?=$mei?>],
            ['Jun',  <?=$jun?>],
            ['Jul',  <?=$jul?>],
            ['Aug',  <?=$aug?>],
            ['Sep',  <?=$sep?>],
            ['Okt',  <?=$okt?>],
            ['Nov',  <?=$nov?>],
            ['Des',  <?=$des?>]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('lineChart'));

        chart.draw(data, options);
      }
  </script>
</body>

</html>

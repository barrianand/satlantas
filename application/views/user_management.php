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
<style>
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto; /* 15% from the top and centered */
  margin-left: 40%;
  padding: 20px;
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 20px ;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>

</head>
<body>
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
          <li>
            <a href="<?php echo base_url('index.php/data');?>">
              <i class="nc-icon nc-paper"></i>
              <p>Data</p>
            </a>
          </li>
		  <?php
		  
          if ($this->session->userdata('auth')['role'] == 1){
            ?><li class="active ">
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
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Rekap Data Hasil Survey Indeks Kepuasan Masyakarat</h4>
                <button id="myBtn" type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#myModal">
                    Tambah User
                </button>
                <!-- The Modal -->
                
                <div id="myModal" class="modal wrapper">

                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>Tambah User</h2>
                        <h2><span class="close">&times;</span></h2>
                    </div>
                    <div class="modal-body">
                    <form action="<?php echo base_url('index.php/users/tambah_data');?>" class="signin-form" method="post">
                        <div class="form-group">
                            <label class="form-control-placeholder" for="nama">Nama</label>
                            <input id="password-field" class="form-control" name="nama" required>
                        </div>
			      		<div class="form-group mt-3">
                          <label class="form-control-placeholder" for="username">Username</label>
			      			<input type="text" class="form-control" name="username" required>
			      		</div>
                        <div class="form-group">
                            <label class="form-control-placeholder" for="password">Password</label>    
                            <input id="password-field" type="password" class="form-control" name="password" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                        <label for="role">Pilih Role :</label>
                            <select class="form-select form-select-lg mb-3 "  aria-label=".form-select-lg example" name="role" id="role">
                            <option value="1">Administrator</option>
                            <option value="2">Staff</option>
                            </select>
                        </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Tambah</button>
		            </div>
		          </form>
                    </div>
                </div>
                </div>  


              <div class="card-body">
              <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Actions</th>
                    </tr>
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
                        <td><?php echo $row->username;?></td>
                        <td><?php 
                        if($row->role==1) echo 'Administrator';
                        else echo 'Staff';?></td>  
                        <td>
                        <a type="button" class="btn btn-link btn-rounded btn-sm fw-bold"
                                data-mdb-ripple-color="blue" href='<?= base_url(); ?>index.php/users/form_edit_data/<?php echo $row->id;?>'>
                        Edit
                        </a>
                        <a type="button" class="btn btn-link btn-rounded btn-sm fw-bold" onclick="return confirm('Anda yakin ingin menghapus data ini?')"
                                data-mdb-ripple-color="blue" href='<?= base_url(); ?>index.php/users/delete_data/<?php echo $row->id;?>'>
                        Hapus
                        </a>
                        </td>
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
    <script type="text/javascript">
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
    modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
    modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }
</script>
</html>

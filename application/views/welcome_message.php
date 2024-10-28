<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Satlantas Login Page</title>

  <link rel="stylesheet" href="<?php echo base_url('');?>vendor/stint/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url('');?>vendor/stint/css/fonts.css">
  <link rel="icon" type="image/png" href="<?php echo base_url('');?>vendor/stint/css/img/satlantas_logo.png">
  <script src="<?php echo base_url('');?>vendor/stint/js/jquery.min.js"></script>
  <script src="<?php echo base_url('');?>vendor/stint/js/popper.js"></script>
  <script src="<?php echo base_url('');?>vendor/stint/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url('');?><?php echo base_url('');?>vendor/stint/js/main.js"></script>
</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(<?php echo base_url('');?>vendor/stint/css/img/satlantas_logo.png);
												background-size: 50%;"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100"><center>
			      			<h3 class="mb-4">Satlantas Bengkalis</h3>
							<h4 class="mb-4">Indeks Kepuasan Pelanggan</h4>
			      		</div>
			      	</div>
					  <div class="form-group">
		            	<button type="button" class="form-control btn btn-primary rounded submit px-3" onclick="location.href='<?php echo base_url('index.php/auth/login');?>'">Login</button>
		            </div>
					<div class="form-group">
		            	<button type="button" class="form-control btn btn-primary rounded submit px-3" onclick="location.href='<?php echo base_url('index.php/formulir/formulir');?>'">Tamu</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
									</div>
									<div class="w-50 text-md-right"></div>
		            </div>
		          <p class="text-center">Silahkan pilih "Tamu" untuk mengisi form!</p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>



	</body>
</html>


<!doctype html>
<html lang="en">
  <head>
  	<title>Login Indeks Kepuasan Masyarakat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="<?php echo base_url('');?>vendor/stint/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url('');?>vendor/stint/css/fonts.css">

  <script src="<?php echo base_url('');?>vendor/stint/js/jquery.min.js"></script>
  <script src="<?php echo base_url('');?>vendor/stint/js/popper.js"></script>
  <script src="<?php echo base_url('');?>vendor/stint/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url('');?>vendor/stint/js/main.js"></script>

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
			      	<div class="row justify-content-center">
			      			<h3 class="mb-4">SATLANTAS DURI</h3>
			      	</div>
					<div class="row justify-content-center">
						  <?php if(!empty($output)){
							  ?><p class="alert alert-danger"><?php echo $output;?>
							  <a href="#" class="close fade in" data-dismiss="alert" aria-label="close">&times;</a></p>
						  <?php }?>
			      	</div>
					<form action="" class="signin-form" method="post">
			      		<div class="form-group mt-3">
			      			<input type="text" class="form-control" name="username" required>
			      			<label class="form-control-placeholder" for="username">Username</label>
			      		</div>
		            <div class="form-group">
		              <input id="password-field" type="password" class="form-control" name="password" required>
		              <label class="form-control-placeholder" for="password">Password</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
	</body>
</html>


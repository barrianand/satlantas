<!doctype html>
<html lang="en">
  <head>
  	<title>Form Indeks Kepuasan Masyarakat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="<?php echo base_url('');?>vendor/stint/css/img/satlantas_logo.png">
    
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
				<div class="col-md-7 col-lg-9">
					<div class="wrap">
						<div class="img" style="background-image: url(<?php echo base_url('');?>vendor/stint/css/img/satlantas_logo.png);
												background-size: 25%;"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="row justify-content-center">
			      			<h3 class="mb-4">Indeks Kepuasan Masyarakat</h3>
			      	</div>  
					<form action="" class="signin-form" method="post" onsubmit="alert('Terima Kasih telah berpartisipasi');">
                    <div class="form-group mt-3">
			      		<input type="text" class="form-control" name="nama" required>
			      		<label class="form-control-placeholder" for="nama">Nama</label>
			      	</div>

                    <div class="form-group mt-3">
			      		<input type="text" class="form-control" name="no_hp" required>
			      		<label class="form-control-placeholder" for="no_hp">No Handphone</label>
			      	</div>

                    <div class="form-group mt-3">
			      		<input type="email" class="form-control" name="email" required>
			      		<label class="form-control-placeholder" for="email">Email</label>
			      	</div>
                      
                    <div class="form-group mt-3">
			      		<label class="form-control-text">1. Bagaimana pendapat saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya?</label>
			      	</div>
                    <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a1" id="a11" value="4" required>
                        <label class="form-check-label" for="a11">Sangat Sesuai</label>
                        </div>
                        <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a1" id="a12" value="3">
                        <label class="form-check-label" for="a12">Sesuai</label>
                        </div>
                        <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a1" id="a13" value="2">
                        <label class="form-check-label" for="a13">Kurang Sesuai</label>
                        </div>
                        <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a1" id="a14" value="1">
                        <label class="form-check-label" for="a14">Tidak Sesuai</label>
                    </div>

                    <div class="form-group mt-3">
			      		<label class="form-control-text">2. Bagaimana pemahaman Saudara tentang kemudahan prosedur pelayanan di unit ini?</label>
			      	</div>
                    <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a2" id="a21" value="4" required>
                        <label class="form-check-label" for="a21">Sangat Mudah</label>
                        </div>
                        <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a2" id="a22" value="3">
                        <label class="form-check-label" for="a22">Mudah</label>
                        </div>
                        <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a2" id="a23" value="2">
                        <label class="form-check-label" for="a23">Kurang Mudah</label>
                        </div>
                        <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a2" id="a24" value="1">
                        <label class="form-check-label" for="a24">Tidak Mudah</label>
                    </div>

                    <div class="form-group mt-3">
			      		<label class="form-control-text">3. Bagaimana pendapat saudara tentang kecepatan waktu dalam memberikan pelayanan?</label>
			      	</div>
                    <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a3" id="a31" value="4" required>
                        <label class="form-check-label" for="a31">Sangat Cepat</label>
                        </div>
                        <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a3" id="a32" value="3">
                        <label class="form-check-label" for="a32">Cepat</label>
                        </div>
                        <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a3" id="a33" value="2">
                        <label class="form-check-label" for="a33">Kurang Cepat</label>
                        </div>
                        <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a3" id="a34" value="1">
                        <label class="form-check-label" for="a34">Tidak Cepat  </label>
                    </div>

                    <div class="form-group mt-3">
			      		<label class="form-control-text">4. Bagaimana pendapat saudara tentang kewajaran  biaya/tarif dalam pelayanan?</label>
			      	</div>
                    <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a4" id="a41" value="4" required>
                        <label class="form-check-label" for="a41">Gratis</label>
                        </div>
                        <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a4" id="a42" value="3">
                        <label class="form-check-label" for="a42">Murah</label>
                        </div>
                        <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a4" id="a43" value="2">
                        <label class="form-check-label" for="a43">Cukup Mahal</label>
                        </div>
                        <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a4" id="a44" value="1">
                        <label class="form-check-label" for="a44">Sangat Mahal</label>
                    </div>

                    <div class="form-group mt-3">
			      		<label class="form-control-text">5. Bagaimana pendapat saudara tentang kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang diberikan?</label>
			      	</div>
                    <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a5" id="a51" value="4" required>
                        <label class="form-check-label" for="a51">Sangat Sesuai</label>
                        </div>
                        <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a5" id="a52" value="3">
                        <label class="form-check-label" for="a52">Sesuai</label>
                        </div>
                        <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a5" id="a53" value="2">
                        <label class="form-check-label" for="a53">Kurang Sesuai</label>
                        </div>
                        <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a5" id="a54" value="1">
                        <label class="form-check-label" for="a54">Tidak Sesuai</label>
                    </div>

                    <div class="form-group mt-3">
			      		<label class="form-control-text">6. Bagaimana pendapat saudara tentang kompetensi / kemampuan petugas dalam pelayanan?</label>
			      	</div>
                    <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a6" id="a61" value="4" required>
                        <label class="form-check-label" for="a61">Sangat Kompeten</label>
                        </div>
                        <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a6" id="a62" value="3">
                        <label class="form-check-label" for="a62">Kompeten</label>
                        </div>
                        <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a6" id="a63" value="2">
                        <label class="form-check-label" for="a63">Kurang Kompeten</label>
                        </div>
                        <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a6" id="a64" value="1">
                        <label class="form-check-label" for="a64">Tidak Kompeten</label>
                    </div>

                    <div class="form-group mt-3">
			      		<label class="form-control-text">7. Bagaimana pendapat saudara tentang perilaku petugas dalam pelayanan terkait kesopanan dan keramahan?</label>
			      	</div>
                    <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a7" id="a71" value="4" required>
                        <label class="form-check-label" for="a71">Sangat Sopan dan Ramah</label>
                        </div>
                        <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a7" id="a72" value="3">
                        <label class="form-check-label" for="a72">Sopan dan Ramah</label>
                        </div>
                        <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a7" id="a73" value="2">
                        <label class="form-check-label" for="a73">Kurang Sopan dan Ramah</label>
                        </div>
                        <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a7" id="a74" value="1">
                        <label class="form-check-label" for="a74">Tidak Sopan dan Ramah</label>
                    </div>

                    <div class="form-group mt-3">
			      		<label class="form-control-text">8. Bagaimana pendapat saudara tentang kualitas sarana dan prasarana?</label>
			      	</div>
                    <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a8" id="a81" value="4" required>
                        <label class="form-check-label" for="a81">Sangat Baik</label>
                        </div>
                        <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a8" id="a82" value="3">
                        <label class="form-check-label" for="a82">Baik</label>
                        </div>
                        <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a8" id="a83" value="2">
                        <label class="form-check-label" for="a83">Cukup</label>
                        </div>
                        <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a8" id="a84" value="1">
                        <label class="form-check-label" for="a84">Buruk</label>
                    </div>

                    <div class="form-group mt-3">
			      		<label class="form-control-text">9. Bagaimana pendapat saudara tentang kualitas sarana dan prasarana?</label>
			      	</div>
                    <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a9" id="a91" value="4" required>
                        <label class="form-check-label" for="a91">Dikelola dengan Baik</label>
                        </div>
                        <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a9" id="a92" value="3">
                        <label class="form-check-label" for="a92">Ada Tapi Tidak Berfungsi</label>
                        </div>
                        <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a9" id="a93" value="2">
                        <label class="form-check-label" for="a93">Berfungsi Kurang Maksimal</label>
                        </div>
                        <div class="form-group form-check-inline">
                        <input class="form-check-input" type="radio" name="a9" id="a94" value="1">
                        <label class="form-check-label" for="a94">Tidak Ada</label>
                    </div>

                    <div class="form-group mt-3">
			      		<input type="text" class="form-control" name="masukkan" required>
			      		<label class="form-control-placeholder" for="masukkan">Kritk/Saran</label>
			      	</div>

                      <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Submit</button>
		            </div>
		          </form>
                  <div class="form-group">
                    <button type="button" class="form-control btn btn-dark rounded submit px-3" onclick="location.href='<?php echo base_url('index.php/auth/logout');?>'">Back to Home</button>
		            </div>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
	</body>
</html>



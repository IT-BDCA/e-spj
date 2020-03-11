<!-- Native V.0.1 BMandiri
 ************************************************
 * Developer    : Lian A.k.a ********************
 * Company      : Bahtera Mandiri ***************
 * Release Date : 9 Februari 2016 ***************
 ************************************************
 -->
<?php 
session_start();
require_once "../lib/config/database.php";
// fungsi untuk pengecekan status login user 
if (empty($_SESSION['username']) && empty($_SESSION['password'])){ ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Apa yang akan terjadi jangan salahakan saya, karena saya hanya mencoba untuk lebih baik.">
    <meta name="author" content="lian a.k.a">
    <title>Login Admin</title>
    <!-- Bootstrap 3.3.2 -->
    <link href="assets/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="assets/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="assets/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
    
</head>
<body class="login-page" style="height:auto;">
<div class="login-box">
  
  <!-- /.login-logo -->
  <div class="login-box-body">
	<?php  
						  // fungsi untuk menampilkan pesan
						  // jika alert = "" (kosong)
						  // tampilkan pesan "" (kosong)
						  if (empty($_GET['alert'])) {
							echo "";
						  } 
						  // jika alert = 1
						  // tampilkan pesan Gagal "username atau password salah, cek kembali username dan password Anda"
						  elseif ($_GET['alert'] == 1) {
							echo "<div class='alert alert-danger alert-dismissable'>
									<button type='button' class='close' data-dismiss='alert' aria-hidden='true'><i class='fa fa-times-circle-o' aria-hidden='true'></i></button>
									<h4><i class='fa fa-exclamation-triangle' aria-hidden='true'></i>  Login Failed</h4>
										Username dan password tidak benar.
								  </div>";
						  }
						  // jika alert = 2
						  // tampilkan pesan Sukses "Anda telah berhasil logout"
						  elseif ($_GET['alert'] == 2) {
							echo "<div class='alert alert-success alert-dismissable'>
									<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
									<h4>  <i class='icon fa fa-check-circle'></i> Success!</h4>
									Berhasil keluar.
								  </div>";
						  }
						  // jika alert = 3
						  // anti injeksi ^_-
						  elseif ($_GET['alert'] == 3) {
							echo "<div class='alert alert-danger alert-dismissable'>
									<button type='button' class='close' data-dismiss='alert' aria-hidden='true'><i class='fa fa-times-circle-o' aria-hidden='true'></i></button>
									<h4><i class='fa fa-exclamation-triangle' aria-hidden='true'></i>  Login Failed</h4>
										Ampun om jangan di injeksi.
								  </div>";
						  }
						  // jika alert = 4
						  // anti masuk ^_-
						  elseif ($_GET['alert'] == 4) {
							echo "<div class='alert alert-danger alert-dismissable'>
									<button type='button' class='close' data-dismiss='alert' aria-hidden='true'><i class='fa fa-times-circle-o' aria-hidden='true'></i></button>
									<h4><i class='fa fa-exclamation-triangle' aria-hidden='true'></i>  Login Failed</h4>
										Ini terjadi karena ada niat yang tidak benar.
								  </div>";
						  }
						  ?>
    <p class="login-box-msg">Akses Area</p>

    <form action="login_check.php" method="POST">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username">
        <span class="fa fa-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="fa fa-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
           &reg; 2016 - <?php $y = date('Y'); echo $y; ?>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    
    <!-- /.social-auth-links -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

	 <!-- jQuery 2.1.3 -->
    <script src="assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	</body>
</html>
<?php }else { echo "<meta http-equiv='refresh' content='0; url=main.php?page=home'>"; } ?>

<?php 
session_start();
// fungsi untuk pengecekan status login user 
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=4'>";
}
// jika user sudah login, maka jalankan perintah untuk pemanggilan file propinsi konten
else { 
require_once "../../lib/config/database.php";
$queryx = mysqli_query($koneksi, "SELECT * FROM tbl_users WHERE id_users = '$_SESSION[id_users]'") 
or die('Ada kesalahan pada query user: '.mysqli_error($koneksi));
$dtp  = mysqli_fetch_assoc($queryx);
$dt = $dtp['nm_users'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Apa yang akan terjadi jangan salahakan saya, karena saya hanya mencoba untuk lebih baik.">
    <meta name="author" content="lian a.k.a">
    <title>Panel Area</title>
	<!-- Bootstrap 3.3.7 -->
    <link href="<?php echo $link_web; ?>/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo $link_web; ?>/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo $link_web; ?>/assets/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo $link_web; ?>/assets/css/skins/skin-blue.min.css">
    <!-- Date Picker -->
    
    <!-- Custom CSS -->
    <link href="<?php echo $link_web; ?>/assets/css/style.css" rel="stylesheet" type="text/css" />    
    <!-- Fungsi untuk membatasi karakter yang diinputkan -->
    <script src="<?php echo $link_web; ?>/assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
	
    
	
  </head>
<body class="skin-blue fixed">
   <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="main.php?page=info" class="logo"><b>Panel</b> sistem</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- panggil file "top-menu.php" untuk menampilkan menu -->
              <?php include "../top-menu.php" ?>
              
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
            
            <!-- panggil file "sidebar-menu.php" untuk menampilkan menu -->
            <?php include "../sidebar-menu.php" ?>

        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- panggil file "content-menu.php" untuk menampilkan content -->
        <section class="content-header">
	<div class="row">
        <div class="col-xs-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo $link_web; ?>/k_panel/home.php"><i class="fa fa-home"></i> Home</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div>
	</div>
</section>
		<section class="content">
			  <div class="row">
				<div class="col-xs-12">	
					<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
					  <li class="active"><a href="#tab_1" data-toggle="tab"><i class='fa fa-info-circle' aria-hidden='true'></i>  Selamat Datang <?php print $_SESSION['username']; ?></a></li>
					  <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-home"></i></a></li>
					</ul>
					<div class="tab-content">
					  <div class="tab-pane active" id="tab_1">
						Anda login sebagai administrator, ini adalah page awal setelah melakukan aktivitas login, untuk melakukan aktivitas lainnya silakan pilih menu yang ada panel kiri.
						<br /><hr class="col-xs-12">
						
					  </div>              
					</div>
					<!-- /.tab-content -->
				  </div>
				  
								
				</div>
			</div>
			
		</section>
		
		<div class="modal fade" id="logout" data-backdrop="false" aria-hidden="false" data-keyboard="false">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title"><i class="fa fa-sign-out"> Logout</i></h4>
			  </div>
			  <div class="modal-body">
				<p>Apakah anda akan keluar dari aplikasi? </p>
			  </div>
			  <div class="modal-footer">
				<a type="button" class="btn btn-danger" href="../logout.php">Ya</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
			  </div>
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		
		
        
      </div><!-- /.content-wrapper -->
	  <?php require_once '../footer.php'; ?>
    </div><!-- ./wrapper -->

    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo $link_web; ?>/assets/js/bootstrap.min.js" type="text/javascript"></script> 
	<!-- datepicker -->
    <!-- Slimscroll -->
    <script src="<?php echo $link_web; ?>/assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo $link_web; ?>/assets/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?php echo $link_web; ?>/assets/js/app.min.js" type="text/javascript"></script>
	
	

    <!-- page script -->
   

	</body>
</html>
<?php } ?>

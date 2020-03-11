<?php 
session_start();
// fungsi untuk pengecekan status login user 
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=4'>";
}
// jika user sudah login, maka jalankan perintah untuk pemanggilan file propinsi konten
else { 
require_once "../lib/config/database.php";
$queryx = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE id_user = '$_SESSION[id_users]'") 
or die('Ada kesalahan pada query user: '.mysqli_error($koneksi));
$dtp  = mysqli_fetch_assoc($queryx);
$dt = $dtp['nm_user'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Apa yang akan terjadi jangan salahakan saya, karena saya hanya mencoba untuk lebih baik.">
    <meta name="author" content="lian a.k.a">
    <title>Administrator E-SPJ</title>
	<!-- Bootstrap 3.3.7 -->
    <link href="assets/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="assets/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="assets/css/skins/skin-blue.min.css">
    <!-- Date Picker -->
    
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
	<!-- Datatable -->
	<link href="assets/plugins/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Fungsi untuk membatasi karakter yang diinputkan -->
    <script language="javascript">
      function getkey(e)
      {
        if (window.event)
          return window.event.keyCode;
        else if (e)
          return e.which;
        else
          return null;
      }

      function goodchars(e, goods, field)
      {
        var key, keychar;
        key = getkey(e);
        if (key == null) return true;
       
        keychar = String.fromCharCode(key);
        keychar = keychar.toLowerCase();
        goods = goods.toLowerCase();
       
        // check goodkeys
        if (goods.indexOf(keychar) != -1)
            return true;
        // control keys
        if ( key==null || key==0 || key==8 || key==9 || key==27 )
          return true;
          
        if (key == 13) {
          var i;
          for (i = 0; i < field.form.elements.length; i++)
            if (field == field.form.elements[i])
              break;
          i = (i + 1) % field.form.elements.length;
          field.form.elements[i].focus();
          return false;
        };
        // else return false
        return false;
      }
    </script>
	<script src="assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
	<link href="assets/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />`
    <script src="assets/plugins/tinymcpuk/jscripts/tiny_mce/tiny_mce.js" type="text/javascript"></script>
	<script src="assets/plugins/tinymcpuk/jscripts/tiny_mce/tiny_bmandiri.js" type="text/javascript"></script>
	
    
	
  </head>
<body class="skin-blue fixed">
   
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
              <?php include "top-menu.php" ?>
              
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
            <?php include "sidebar-menu.php" ?>

        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- panggil file "content-menu.php" untuk menampilkan content -->
        
		
				
				<?php 
					$linkx = $_SERVER['SERVER_NAME'];
					$linkxx = $_SERVER['REQUEST_URI'];
					$combine = 'http://'.$linkx.''.$linkxx;
					if($combine == 'http://localhost/bpbd/admin/main.php'){
						echo "<meta http-equiv='refresh' content='0; url=main.php?page=home'>";
					}else{
						require_once 'content.php';
					}
				 
				
				?>
			
		
		
		
		
        
      </div><!-- /.content-wrapper -->
	  
	<!-- Awal Footer -->
	<?php require_once 'footer.php'; ?>
	<!-- Akhir Footer -->
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
				<a type="button" class="btn btn-danger" href="logout.php">Ya</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
			  </div>
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
    
   <!-- Bootstrap 3.3.2 JS -->
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script> 
	<!-- datepicker -->
    <!-- Slimscroll -->
    <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='assets/plugins/fastclick/fastclick.min.js'></script>
	<!-- Data tabel script -->
    <script src="assets/plugins/datatables/dataTables.responsive.min.js" type="text/javascript"></script>
    <script src="assets/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
	<script src="assets/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/plugins/datatables/dataTables.bootstrap4.min.js" type="text/javascript"></script>

	<!-- bootstrap time picker -->
	<script src="assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
	<script src="assets/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
	<!-- Boostrap componen script -->	
	<script src="assets/js/app.min.js"></script>
	<!-- page script -->
    <script type="text/javascript">
      $(function () {
        $('#lkpicker').datepicker({
			format: 'yyyy-mm-dd',
			autoclose: 'true'
		});
		//Timepicker
		$("#jam_m").timepicker({
				defaultTime: 'current',
				template: 'dropdown',
				disableFocus: false,
				isOpen: true,
				showSeconds: false,
				showInputs: true
		});
		$("#jam_a").timepicker({
				defaultTime: 'current',
				template: 'dropdown',
				disableFocus: false,
				isOpen: true,
				showSeconds: false,
				showInputs: true
		});
		// DataTables
				$("#dataTables1").dataTable();
				$('#dataTables2').dataTable({
				  "bPaginate": true,
				  "bLengthChange": false,
				  "bFilter": true,
				  "bSort": false,
				  "bInfo": false,
				  "bAutoWidth": false,
				  "responsive": true
				  
				});
				$('#dataTables3').dataTable({
				  "bPaginate": true,
				  "bLengthChange": false,
				  "bFilter": true,
				  "bSort": false,
				  "bInfo": false,
				  "bAutoWidth": false,
				  "responsive": true
				  
				});
      });
    </script>
	

    <!-- page script -->

	</body>
	
</html>
<?php } ?>

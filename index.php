<?php include 'lib/config/database.php'; ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="images/muba.png" type="image/x-icon" />
	<title>Sifasum Kecamatan Sekayu</title>
    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="author" content="lian_aka">
    
  
	<!-- Stylesheets -->
	<link rel="stylesheet" href="lib/tema/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/misc.css">
	<link rel="stylesheet" href="css/blue-scheme.css">
  

	<!-- Datatable -->
	<link href="lib/plugins/datatables/datatables.bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="lib/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<script src="lib/tema/js/jQuery-2.1.3.min.js"></script>

</head>
<body>
	<?php include 'menu.php'; ?>
	<?php include 'router.php'; ?>
    <footer>
		<div class="row">
        <div class="col-md-12">
          <h1 class="copyright-text">Copyright &copy; 2019 Dedi Saputra</h1>
        </div> <!-- /.col-md-12 -->
      </div> <!-- /.row -->
    </footer> <!-- /.site-footer -->

    <!-- JavaScripts -->
	
	<script src="js/jquery-migrate-1.2.1.min.js"></script>
	<script src="lib/tema/js/bootstrap.min.js"></script>
	<!-- Scripts -->
	<script src="js/min/plugins.min.js"></script>
	<script src="js/min/medigo-custom.min.js"></script>
	<!-- Data tabel script -->
    <script src="lib/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
	<script src="lib/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
	<script src="lib/plugins/datatables/dataTables.bootstrap4.min.js" type="text/javascript"></script>
	<!-- page script -->
    <script type="text/javascript">
      $(function () {
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
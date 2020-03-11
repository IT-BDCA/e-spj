<!-- Native V.0.1 bjurnal
 ************************************************
 * Developer    : Lian A.k.a ********************
 * Company      : Bahtera Kreasi Mandiri ***************
 * Release Date : 14 Januari 2018 ***************
 ************************************************
 -->
 
<?php
error_reporting(0); 
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=4'>";
}
// jika user sudah login, maka jalankan perintah untuk pemanggilan file propinsi konten
else { 

?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="row">
        <div class="col-xs-12">
			<ol class="breadcrumb">
				<li><a href="main.php?page=home"><i class="fa fa-home"></i> Home</a></li>
				<li><a href="main.php?page=users"> Data Users</a></li>
				<li class="active"> Ubah Data Users</li>
			</ol>
		</div>
	</div>
</section>
<?php
$id = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_GET['id'])))));
if (isset($id)) {
      // fungsi query untuk menampilkan data dari tabel users
      $query = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE id_user = '$id'") 
                                      or die('Ada kesalahan pada query tampil data user : '.mysqli_error());
      $data  = mysqli_fetch_assoc($query);
	  if($data['id_user'] == true){
?>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header">
			<div class="col-xs-12">
			<h2>
				<i class="fa fa-list icon-title"></i>  Ubah Data User
			</h2>
			</div>

			</div>
			
			
			  <form class="form-horizontal" action="data/users/proses.php?act=update" method="POST" enctype="multipart/form-data">
			  <input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">
				<div class="box-body">
					<div class="col-md-12">
						  <div class="form-group">
							<label class="col-sm-3 pull-left">Username</label>
							<div class="col-sm-9">
							  <input type="text" class="form-control" name="nm_user" value="<?php print $data['nm_user']; ?>" min="6" max="10" required>
							</div>
						  </div>
						</div>
						
						<div class="col-md-12">
						  <div class="form-group">
							<label class="col-sm-3 pull-left">Password</label>
							<div class="col-sm-9">
							  <input type="password" class="form-control" name="ps_user"  min="6" max="10"><br />
							  Note : Kosongkan password bila tidak di ubah
							</div>
						  </div>
						</div>
				</div>  
				
				<div class="box-footer">
				  <div class="col-xs-12">
				  <div class="form-group">
					<div class="col-sm-offset-3 col-sm-9">
					  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Save">
					  <a href="main.php?page=users" class="btn btn-default btn-reset">Cancel</a>
					</div>
				  </div>
				  </div>
				</div><!-- /.box footer -->
			  </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php } else { echo "<meta http-equiv='refresh' content='0; url=main.php?page=users'>"; exit; } } else { echo "<meta http-equiv='refresh' content='0; url=main.php?page=users'>"; exit; } } ?>
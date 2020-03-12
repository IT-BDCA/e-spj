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
				<li><a href="main.php?page=jnsfasilitas"> Data Jenis Surat</a></li>
				<li class="active"> Ubah Data Jenis Surat</li>
			</ol>
		</div>
	</div>
</section>
<?php
if (isset($_GET['id'])) {
      // fungsi query untuk menampilkan data dari tabel portfolio
      $query = mysqli_query($koneksi, "SELECT * FROM tbl_jnsfasilitas WHERE id_jnsfasilitas = '$_GET[id]'") 
                                      or die('Ada kesalahan pada query tampil data jenis fasilitas : '.mysqli_error());
      $data  = mysqli_fetch_assoc($query);
	  if($data['id_jnsfasilitas'] == true){
?>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header">
			<div class="col-xs-12">
			<h2>
				<i class="fa fa-list icon-title"></i>  Ubah Data Jenis Surat
			</h2>
			</div>

			</div>
			
			
			  <form class="form-horizontal" action="data/jnsfasilitas/proses.php?act=update" method="POST">
			  <input type="hidden" name="id_jnsfasilitas" value="<?php echo $data['id_jnsfasilitas']; ?>">
				<div class="box-body">
				<div class="col-xs-12">

					<div class="form-group">
						<label class="col-sm-3 pull-left">Jenis Surat</label>
						<div class="col-sm-9">
						  <input type="text" class="form-control" name="nm_jnsfasilitas" value="<?php print $data['nm_jnsfasilitas']; ?>" required>
						</div>
					</div>
				  
				  
				</div>
				</div>
				<div class="box-footer">
				  <div class="col-xs-12">
				  <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Simpan">
					  <a href="main.php?page=jnsfasilitas" class="btn btn-default btn-reset">Batal</a>
					</div>
				  </div>
				  </div>
				</div><!-- /.box footer -->
			  </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php }else { echo "<meta http-equiv='refresh' content='0; url=main.php?page=kategori'>"; exit; } }else { echo "<meta http-equiv='refresh' content='0; url=main.php?page=kategori'>"; exit; }  ?>
<?php } ?>
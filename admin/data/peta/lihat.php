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
				<li><a href="main.php?page=peta"> Data Penanggung Jawab</a></li>
				<li class="active"> Lihat Data Penanggung Jawab</li>
			</ol>
		</div>
	</div>
</section>
<?php
if (isset($_GET['id'])) {
      // fungsi query untuk menampilkan data dari tabel portfolio
      $query = mysqli_query($koneksi, "SELECT * FROM tbl_peta WHERE id_peta = '$_GET[id]'") 
                                      or die('Ada kesalahan pada query tampil data peta : '.mysqli_error());
      $data  = mysqli_fetch_assoc($query);
	  if($data['id_peta'] == true){
?>
  <!-- Main content -->
<section class="content">
    <div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header">
				<div class="col-xs-12">
				<h2>
					<i class="fa fa-list icon-title"></i>  Lihat Data Penanggung Jawab
				</h2>
				</div>

				</div>
				
				<div class="form-group col-lg-12">
				<label class="col-sm-2 pull-left">Penanggung Jawab</label>
				<div class="col-sm-10">
				<?php print $data['nm_peta']; ?>
				</div>
				</div>
								
				<div class="form-group col-lg-12">
				<label class="col-sm-2 pull-left">NIP</label>
				<div class="col-sm-10">
				<?php print $data['nip']; ?>
				</div>
				</div>
								
				<div class="form-group col-lg-12">
				<label class="col-sm-2 pull-left">Jabatan</label>
				<div class="col-sm-10">
				<?php print $data['jabatan']; ?>
				</div>
				</div>

				<div class="form-group col-lg-12">
				<label class="col-sm-2 pull-left">Alamat</label>
				<div class="col-sm-10">
				<?php print $data['alamat']; ?>
				</div>
				</div>
				<div class="box-footer">
					<div class="col-xs-12">
						<a href="main.php?page=peta" class="btn btn-default btn-reset">Kembali</a>
					</div>
				</div>
			</div><!-- /.box -->
		</div><!--/.col -->
    </div>   <!-- /.row -->
</section><!-- /.content -->
<?php }else { echo "<meta http-equiv='refresh' content='0; url=main.php?page=kategori'>"; exit; } }else { echo "<meta http-equiv='refresh' content='0; url=main.php?page=kategori'>"; exit; }  ?>
<?php } ?>
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
				<li><a href="main.php?page=fasilitas"> Data Fasilitas</a></li>
				<li class="active"> Ubah Fasilitas</li>
			</ol>
		</div>
	</div>
</section>
<?php
$id = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_GET['id'])))));
if (isset($id)) {
      // fungsi query untuk menampilkan data dari tabel portfolio
      $query = mysqli_query($koneksi, "SELECT * FROM tbl_fasilitas WHERE id_fasilitas = '$id'") 
                                      or die('Ada kesalahan pada query tampil data berita : '.mysqli_error($koneksi));
      $data  = mysqli_fetch_assoc($query);
	  if($data['id_fasilitas'] == true){
?>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header">
			<div class="col-xs-12">
			<h2>
				<i class="fa fa-list icon-title"></i>  Ubah Data Fasilitas
			</h2>
			</div>

			</div>
			
			
				<form class="form-horizontal" action="data/fasilitas/proses.php?act=update" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="id_fasilitas" value="<?php echo $data['id_fasilitas']; ?>">
					<input type="hidden" name="gb_l" value="<?php echo $data['gb_fasilitas']; ?>">
					<div class="box-body">
						
						<div class="col-xs-12">

								<div class="form-group">
									<label class="col-md-2 pull-left">Kelurahan</label>
									<div class="col-md-10">
										<span class="help-block">
											<select class="form-control" name="id_kelurahan">
											<option>Pilih</option>
											<?php
											$query  = "SELECT * FROM tbl_kelurahan";
											$tampil = mysqli_query($koneksi, $query);
											while($r=mysqli_fetch_array($tampil)){
												if($data['id_kelurahan'] == $r['id_kelurahan']){
													echo "<option value=\"$r[id_kelurahan]\" selected>$r[nm_kelurahan]</option>";
												}else{
													echo "<option value=\"$r[id_kelurahan]\">$r[nm_kelurahan]</option>";
												}
											}
											?>					
										</select>
										</span>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-2 pull-left">Jenis Fasilitas</label>
									<div class="col-md-10">
										<span class="help-block">
											<select class="form-control" name="id_jnsfasilitas">
											<option>Pilih</option>
											<?php
											$query  = "SELECT * FROM tbl_jnsfasilitas where st_jnsfasilitas = 'Y'";
											$tampil = mysqli_query($koneksi, $query);
											while($r=mysqli_fetch_array($tampil)){
												if($data['id_jnsfasilitas'] == $r['id_jnsfasilitas']){
													echo "<option value=\"$r[id_jnsfasilitas]\" selected>$r[nm_jnsfasilitas]</option>";
												}else{
													echo "<option value=\"$r[id_jnsfasilitas]\">$r[nm_jnsfasilitas]</option>";
												}
											}
											?>					
										</select>
										</span>
									</div>
							</div>
							  
								<div class="form-group">
									<label class="col-sm-2 pull-left">Nama Fasilitas</label>
									<div class="col-sm-10">
									  <input type="text" class="form-control" name="nm_fasilitas" value="<?php print $data['nm_fasilitas']; ?>" required>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-sm-2 pull-left">Latitude Fasilitas</label>
									<div class="col-sm-10">
									  <input type="text" class="form-control" name="la_fasilitas" value="<?php print $data['la_fasilitas']; ?>" required>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-sm-2 pull-left">Longitude Fasilitas</label>
									<div class="col-sm-10">
									  <input type="text" class="form-control" name="lo_fasilitas" value="<?php print $data['lo_fasilitas']; ?>" required>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-sm-2 pull-left">Gambar Baru</label>
									<div class="col-sm-10">
										<input type="file" class="form-control col-md-12" name='file'>
									</div>
								</div>
							  
						</div>  
					
					</div>
					
					<div class="box-footer">
					  <div class="col-xs-12">
						  <div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
							  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Simpan">
							  <a href="main.php?page=fasilitas" class="btn btn-default btn-reset">Batal</a>
							</div>
						  </div>
					  </div>
					</div><!-- /.box footer -->
			  </form>
		
		</div>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php } else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=home'>"; exit; } } else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=home'>"; exit; } } ?>
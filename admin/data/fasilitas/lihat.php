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
				<li><a href="main.php?page=fasilitas"> Data Barang</a></li>
				<li class="active"> Lihat Data Barang</li>
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
				<i class="fa fa-list icon-title"></i>  Lihat Data Barang
			</h2>
			</div>

			</div>
			
					<div class="box-body">
						<div class="col-xs-12">
							<div class="form-group col-lg-12">
									<div class="col-md-10">
										<center><b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
											<?php
											$query  = "SELECT * FROM tbl_jnsfasilitas where id_jnsfasilitas = '$data[id_jnsfasilitas]'";
											$tampil = mysqli_query($koneksi, $query);
											while($r=mysqli_fetch_array($tampil)){
												echo "$r[nm_jnsfasilitas]";
											}
											?>
											</b>	
											</center>				
										</span>
									</div>
							</div>

							<div class="form-group col-lg-12">
									<label class="col-sm-2 pull-left">NOMOR&nbsp;&nbsp;&nbsp;:</label>
									<div class="col-sm-10">
									  <?php print $data['nm_fasilitas']; ?>
									</div>
								</div>

							<div class="form-group col-lg-12">
									<label class="col-sm-2 pull-left">Kegiatan&nbsp;:</label>
									<div class="col-sm-10">
									  <?php print $data['nm_kegiatan']; ?>
									</div>
								</div>

							<div class="form-group col-lg-12">
									<div class="col-sm-10">
									<?php print $data['isi_surat']; ?><br></br>
									</div>
								</div>		


								<div class="form-group col-lg-12">
									<label class="col-md-2 pull-left">Perusahaan :</label>
									<div class="col-md-10">
											<?php
											$query  = "SELECT * FROM tbl_kelurahan where id_kelurahan = '$data[id_kelurahan]'";
											$tampil = mysqli_query($koneksi, $query);
											while($r=mysqli_fetch_array($tampil)){
												echo "$r[nm_kelurahan]";
											}
											?>	
										</span>
									</div>
								</div>
							  								
								<div class="form-group col-lg-12">
									<label class="col-sm-2 pull-left">Alamat Perusahaan :</label>
									<div class="col-sm-10">
									  <?php print $data['la_fasilitas']; ?>
									</div>
								</div>
								
								<div class="form-group col-lg-12">
									<label class="col-sm-2 pull-left">No Telepon Perusahaan :</label>
									<div class="col-sm-10">
									  <?php print $data['lo_fasilitas']; ?>
									</div>
								</div>

								<div class="form-group col-lg-12">
									<label class="col-md-2 pull-left">Yang dalam hal ini diwakili oleh:</label>
									<div class="col-md-10">
											<?php
											$query  = "SELECT * FROM tbl_peta where id_peta = '$data[id_peta]'";
											$tampil = mysqli_query($koneksi, $query);
											while($r=mysqli_fetch_array($tampil)){
												echo "$r[nm_peta]";
											}
											?>					
								</div>
							</div>

					<div class="box-footer">
					  <div class="col-xs-12">
						  <div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
							  <a href="main.php?page=fasilitas" class="btn btn-default btn-reset">Kembali</a>
							</div>
						  </div>
					  </div>
					</div><!-- /.box footer -->
		
		</div>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php } else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=home'>"; exit; } } else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=home'>"; exit; } } ?>
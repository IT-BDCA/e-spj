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
				<li><a href="main.php?page=suratpesananbarang"> Data Surat Pesanan Barang</a></li>
				<li class="active"> Ubah Surat Pesanan Barang</li>
			</ol>
		</div>
	</div>
</section>
<?php
if (isset($_GET['id'])) {
      // fungsi query untuk menampilkan data dari tabel portfolio
      $query = mysqli_query($koneksi, "SELECT * FROM tbl_fasilitas WHERE id_fasilitas = '$_GET[id]'") 
                                      or die('Ada kesalahan pada query tampil data surat pesanan barang : '.mysqli_error());
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
				<i class="fa fa-list icon-title"></i>  Ubah Surat Pesanan Barang
			</h2>
			</div>

			</div>
			
			
			  <form class="form-horizontal" action="data/suratpesananbarang/proses.php?act=update" method="POST">
			  <input type="hidden" name="id_fasilitas" value="<?php echo $data['id_fasilitas']; ?>">
				<div class="box-body">
				<div class="col-xs-12">

					<div class="form-group">
						<label class="col-sm-3 pull-left">NOMOR</label>
						<div class="col-sm-9">
						  <input type="text" class="form-control" name="nm_fasilitas" value="<?php print $data['nm_fasilitas']; ?>" required>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 pull-left">Kegiatan</label>
						<div class="col-sm-9">
						  <input type="text" class="form-control" name="nm_kegiatan" value="<?php print $data['nm_kegiatan']; ?>" required>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 pull-left">Nama</label>
						<div class="col-sm-9">
						  <input type="text" class="form-control" name="nm_penyedia" value="<?php print $data['nm_penyedia']; ?>" required>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 pull-left">Alamat</label>
						<div class="col-sm-9">
						  <input type="text" class="form-control" name="la_fasilitas" value="<?php print $data['la_fasilitas']; ?>" required>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 pull-left">Telepon</label>
						<div class="col-sm-9">
						  <input type="text" class="form-control" name="lo_fasilitas" value="<?php print $data['lo_fasilitas']; ?>" required>
						</div>
					</div>
				  
				  <div class="form-group">
						<label class="col-sm-3 pull-left">Nama Barang</label>
						<div class="col-sm-9">
						  <textarea class="form-control" name="nm_barang" required><?php print $data['nm_barang']; ?></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 pull-left">Satuan</label>
						<div class="col-sm-9">
						   <textarea class="form-control" name="stn_barang" required><?php print $data['stn_barang']; ?></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 pull-left">Jumlah</label>
						<div class="col-sm-9">
						  <textarea class="form-control" name="jml_barang" required><?php print $data['jml_barang']; ?></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 pull-left">Harga Satuan</label>
						<div class="col-sm-9">
						  <textarea class="form-control" name="hrg_satuan" required><?php print $data['hrg_satuan']; ?></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 pull-left">Total Harga</label>
						<div class="col-sm-9">
						  <textarea class="form-control" name="total_harga" required><?php print $data['total_harga']; ?></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 pull-left">Ket</label>
						<div class="col-sm-9">
						  <textarea class="form-control" name="keterangan" required><?php print $data['keterangan']; ?></textarea>
						</div>
					</div>
				  
				</div>
				</div>
				<div class="box-footer">
				  <div class="col-xs-12">
				  <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Simpan">
					  <a href="main.php?page=suratpesananbarang" class="btn btn-default btn-reset">Batal</a>
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
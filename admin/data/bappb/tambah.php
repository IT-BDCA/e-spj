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
				<li><a href="main.php?page=bappb"> Data Berita Acara Pemeriksaan Dan Penerima Barang</a></li>
				<li class="active"> Tambah Berita Acara Pemeriksaan Dan Penerima Barang</li>
			</ol>
		</div>
	</div>
</section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
			<div class="box-header">
				<div class="col-xs-12">
					<h2>
						<i class="fa fa-list icon-title"></i>  Tambah Berita Acara Pemeriksaan Dan Penerima Barang
					</h2>
				</div>
			</div>
			<form class="form-horizontal" action="data/bappb/proses.php?act=insert" method="POST" enctype="multipart/form-data">
					<div class="box-body">
						
						<div class="col-xs-12">

							<div class="form-group">
									<label class="col-md-3 pull-left">Jenis Surat</label>
									<div class="col-md-9">
										<span class="help-block">
											<select class="form-control" name="id_jnsfasilitas">
											<option>Pilih</option>
											<?php
											$query  = "SELECT * FROM tbl_jnsfasilitas where st_jnsfasilitas = 'Y'";
											$tampil = mysqli_query($koneksi, $query);
											while($r=mysqli_fetch_array($tampil)){
											  echo "<option value=\"$r[id_jnsfasilitas]\">$r[nm_jnsfasilitas]</option>";
											}
											?>					
										</select>
										</span>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 pull-left">Nomor</label>
									<div class="col-md-9">
										<span class="help-block">
											<input class="form-control input-md" type="text" name="nm_fasilitas"/> 
										</span>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 pull-left">Hari/Tanggal Penerimaan Barang</label>
									<div class="col-md-9">
										<span class="help-block">
											<input class="form-control input-md" type="text" name="nm_kegiatan"/> 
										</span>
									</div>
								</div>

								<div class="form-group">
						<label class="col-sm-3 pull-left">Penanggung Jawab</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="nm_barang"><?php print $data['nm_barang']; ?></textarea>
						</div>
					</div>

								<div class="form-group">
									<label class="col-md-3 pull-left">Surat Pesanan No/Bulan</label>
									<div class="col-md-9">
										<span class="help-block">
											<input class="form-control input-md" type="text" name="nm_fasilitas"/> 
										</span>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 pull-left">Surat Pengantar Barang No/Tanggal</label>
									<div class="col-md-9">
										<span class="help-block">
											<input class="form-control input-md" type="text" name="nm_fasilitas"/> 
										</span>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 pull-left">Faktur No/Tanggal</label>
									<div class="col-md-9">
										<span class="help-block">
											<input class="form-control input-md" type="text" name="nm_fasilitas"/> 
										</span>
									</div>
								</div>

								<div class="form-group">
						<label class="col-sm-3 pull-left">Nama Barang</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="nm_barang"><?php print $data['nm_barang']; ?></textarea>
						</div>
					</div>

								<div class="form-group">
						<label class="col-sm-3 pull-left">Satuan Barang</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="stn_barang"><?php print $data['stn_barang']; ?></textarea>
						</div>
					</div>

								<div class="form-group">
						<label class="col-sm-3 pull-left">Jumlah Barang</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="jml_barang"><?php print $data['jml_barang']; ?></textarea>
						</div>
					</div>

								<div class="form-group">
						<label class="col-sm-3 pull-left">Harga Satuan</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="hrg_satuan"><?php print $data['hrg_satuan']; ?></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 pull-left">Hasil Pemeriksaan</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="hrg_satuan"><?php print $data['hrg_satuan']; ?></textarea>
						</div>
					</div>

								<div class="form-group">
						<label class="col-sm-3 pull-left">Data Barang</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="total_harga"><?php print $data['total_harga']; ?></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 pull-left">Jumlah Harga</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="total_harga"><?php print $data['total_harga']; ?></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 pull-left">Tanggal Penerimaan</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="total_harga"><?php print $data['total_harga']; ?></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 pull-left">Paraf Panitia Pemeriksa</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="total_harga"><?php print $data['total_harga']; ?></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 pull-left">Terbilang</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="total_harga"><?php print $data['total_harga']; ?></textarea>
						</div>
					</div>
					
					<div class="box-footer">
					  <div class="col-xs-12">
						  <div class="form-group">
							<div class="col-sm-offset-3 col-md-9">
							  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Simpan">
							  <a href="main.php?page=fasilitas" class="btn btn-default btn-reset">Batal</a>
							</div>
						  </div>
					  </div>
					</div><!-- /.box footer -->
			  </form>
			
		</div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php } ?>
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
				<li><a href="main.php?page=kelurahan"> Data Perusahaan</a></li>
				<li class="active"> Tambah Data Perusahaan</li>
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
				<i class="fa fa-list icon-title"></i>  Tambah Data Perusahaan
			</h2>
			</div>

			</div>
			<!-- form start -->
			  <form class="form-horizontal" action="data/kelurahan/proses.php?act=insert" method="post">
				<div class="box-body">
					<div class="col-xs-12">
				  
					  <div class="form-group">
						<label class="col-sm-2 pull-left">Perusahaan</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="nm_kelurahan" required>
						</div>
					  </div>

					  <div class="form-group">
						<label class="col-sm-2 pull-left">Alamat Perusahaan</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="alamat" required>
						</div>
					  </div>

					  <div class="form-group">
						<label class="col-sm-2 pull-left">Telepon Perusahaan</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="tlp_perusahaan" required>
						</div>
					  </div>
				  
					</div>
				</div><!-- /.box body -->

				<div class="box-footer">
				  <div class="col-xs-12">
				  <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Simpan">
					  <a href="main.php?page=kelurahan" class="btn btn-default btn-reset">Batal</a>
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
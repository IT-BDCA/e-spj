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
				<li class="active"> Tambah Data Penanggung Jawab</li>
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
				<i class="fa fa-list icon-title"></i>  Tambah Data Penanggung Jawab
			</h2>
			</div>

			</div>
			<!-- form start -->
			  <form class="form-horizontal" action="data/peta/proses.php?act=insert" method="POST" enctype="multipart/form-data">
				<div class="box-body">
					<div class="col-xs-12">
				  
					 <div class="form-group">
									<label class="col-md-2 pull-left">Nama</label>
									<div class="col-md-10">
										<span class="help-block">
											<input class="form-control input-md" type="text" name="nm_peta" required/> 
										</span>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-2 pull-left">NIP</label>
									<div class="col-md-10">
										<span class="help-block">
											<input class="form-control input-md" type="text" name="nip" required/> 
										</span>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-2 pull-left">Jabatan</label>
									<div class="col-md-10">
										<span class="help-block">
											<input class="form-control input-md" type="text" name="jabatan" required/> 
										</span>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-2 pull-left">Alamat</label>
									<div class="col-md-10">
										<span class="help-block">
											<input class="form-control input-md" type="text" name="alamat" required/> 
										</span>
									</div>
								</div>
					  
					</div>
				</div><!-- /.box body -->

				<div class="box-footer">
				  <div class="col-xs-12">
				  <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Simpan">
					  <a href="main.php?page=peta" class="btn btn-default btn-reset">Batal</a>
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
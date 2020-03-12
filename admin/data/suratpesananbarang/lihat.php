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
				<li><a href="main.php?page=jnsfasilitas"> Data Jenis Fasilitas</a></li>
				<li class="active"> Lihat Data Jenis Fasilitas</li>
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
				<i class="fa fa-list icon-title"></i>  Lihat Data Jenis Fasilitas
			</h2>
			</div>

			</div>
			
			
			<div class="box-body">
				<div class="col-xs-12">
					<div class="page-header">
						<?php print $data['nm_jnsfasilitas']; ?>
					</div>
				</div>
				<div class="col-xs-12">
					<?php print html_entity_decode($data['map_jnsfasilitas']); ?>
				</div>
			</div>
			
			<div class="box-footer">
				<div class="col-xs-12">
					<div class="pull-righr"><a href="main.php?page=jnsfasilitas" class="btn btn-default btn-reset">Kembali</a></div>
				</div>
			</div><!-- /.box footer -->
			  
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php }else { echo "<meta http-equiv='refresh' content='0; url=main.php?page=kategori'>"; exit; } }else { echo "<meta http-equiv='refresh' content='0; url=main.php?page=kategori'>"; exit; }  ?>
<?php } ?>
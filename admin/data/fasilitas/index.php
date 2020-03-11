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
				<li class="active"> Data Barang</li>
			</ol>
		</div>
	</div>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
		
    <div class="col-md-12">

    <?php  
    // fungsi untuk menampilkan pesan
    // jika alert = "" (kosong)
    // tampilkan pesan "" (kosong)
    if (empty($_GET['alert'])) {
      echo "";
    } 
    // jika alert = 1
    // tampilkan pesan Sukses "artikelbaru berhasil disimpan"
    elseif ($_GET['alert'] == 1) {
      echo "<a href='main.php?page=fasilitas'><div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Success!</h4>
              Data berhasil disimpan.
            </div></a>";
    }
    // jika alert = 2
    // tampilkan pesan Sukses "artikelberhasil diubah"
    elseif ($_GET['alert'] == 2) {
      echo "<a href='main.php?page=fasilitas'><div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Success!</h4>
              Data berhasil diubah.
            </div></a>";
    }
    // jika alert = 3
    // tampilkan pesan Sukses " berhasil dihapus"
    elseif ($_GET['alert'] == 3) {
      echo "<a href='main.php?page=fasilitas'><div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Success!</h4>
              Data berhasil di hapus.
            </div></a>";
    }
    // jika alert = 4
    // tampilkan pesan Upload Gagal "Pastikan file yang diupload sudah benar"
    elseif ($_GET['alert'] == 4) {
      echo "<a href='main.php?page=fasilitas'><div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-times-circle'></i> Failed!</h4>
              Data gagal di simpan.
            </div></a>";
    }
	// jika alert = 5
    // tampilkan pesan Upload Gagal "Pastikan file yang diupload sudah benar"
    elseif ($_GET['alert'] == 5) {
      echo "<a href='main.php?page=fasilitas'><div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-times-circle'></i> Failed!</h4>
              Data gagal di perbaharui.
            </div></a>";
    }
	elseif ($_GET['alert'] == 6) {
      echo "<a href='main.php?page=fasilitas'><div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-times-circle'></i> Failed!</h4>
              Data gagal di hapus.
            </div></a>";
    }
    ?>

      <div class="box box-primary">
	  <div class="box-header with-border">
	  	<div class="col-xs-12">
		<h2>
			<i class="fa fa-list icon-title"></i> Data Barang
			<a class="btn btn-primary btn-sm pull-right" href="main.php?page=fasilitas&act=tambah">
				<i class="fa fa-plus"></i> Tambah Data Barang
			</a>
		</h2>
		</div>

	  </div>
        <div class="box-body">
          <!-- tampilan tabel artikel-->
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
            <!-- tampilan tabel header -->
            <thead>
              <tr>
                <th width='5%' class="left">No.</th>
                <th class="left">Jenis Surat</th>
				<th class="left">NOMOR</th>
				<th class="left">Perusahaan</th>
                <th class="center">Aksi</th>
              </tr>
            </thead>
            <!-- tampilan tabel body -->
            <tbody>
            <?php  
            $no = 1;
            // fungsi query untuk menampilkan data dari tabel warta
			$query = mysqli_query($koneksi, "SELECT id_fasilitas, nm_jnsfasilitas, nm_kelurahan, nm_peta, nm_fasilitas FROM tbl_fasilitas,tbl_jnsfasilitas,tbl_kelurahan,tbl_peta where tbl_fasilitas.id_jnsfasilitas = tbl_jnsfasilitas.id_jnsfasilitas and tbl_fasilitas.id_kelurahan = tbl_kelurahan.id_kelurahan and tbl_fasilitas.id_peta = tbl_peta.id_peta ORDER BY id_fasilitas DESC")
                     or die('Ada kesalahan pada query tampil data fasilitas ');

            // tampilkan data
            while ($data = mysqli_fetch_assoc($query)) { 
              // menampilkan isi tabel dari database ke tabel di aplikasi
              echo "<tr>
                      <td class='left'>$no</td>
					  <td width='150'>$data[nm_jnsfasilitas]</td>
					  <td width='150'>$data[nm_fasilitas]</td>
					  <td width='150'>$data[nm_kelurahan]</td>
                      <td class='center' width='150'>
                        <div>
                          <a data-toggle='tooltip' data-placement='top' title='Lihat' style='margin-right:5px' class='btn btn-primary btn-sm' href='main.php?page=fasilitas&act=lihat&id=$data[id_fasilitas]'>
                              <i class='fa fa-eye'></i> Lihat
                          </a>
						  <a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px' class='btn btn-primary btn-sm' href='main.php?page=fasilitas&act=edit&id=$data[id_fasilitas]'>
                             <i class='fa fa-edit'></i> Ubah
                          </a>";
            ?>
                          <a data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger btn-sm" href="data/fasilitas/proses.php?act=delete&id=<?php echo $data['id_fasilitas'];?>" onclick="return confirm('Apakah anda akan mengahapus fasilitas <?php echo $data['nm_fasilitas']; ?> ?');">
			<i style="color:#fff" class="fa fa-trash"></i> Hapus
                          </a>
            <?php
              echo "    </div>
                      </td>
                    </tr>";
              $no++;
            }
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section><!-- /.content -->
<?php } ?>
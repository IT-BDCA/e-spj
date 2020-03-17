<!-- Native V.0.1 bjurnal
 ************************************************
 * Developer    : Lian A.k.a ********************
 * Company      : Bahtera Kreasi Mandiri ***************
 * Release Date : 14 Januari 2018 ***************
 ************************************************
 -->

<?php
session_start();
require_once "../../../lib/config/database.php";
require_once "../../../lib/config/thumbnail.php";
require_once "../../../lib/config/seo.php";
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=4'>";
}
// jika user sudah login, maka jalankan perintah untuk pemanggilan file propinsi konten
else {
    if ($_GET['act']=='insert') {
        if (isset($_POST['save'])) {
					
					$id_jnsfasilitas = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['id_jnsfasilitas'])))));
					$nomor = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['nomor'])))));
					$tgl_surat = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['tgl_surat'])))));
					$id_peta = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['id_peta'])))));
					$nip = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['nip'])))));
					$jabatan = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['jabatan'])))));
					$alamat = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['alamat'])))));
					$telepon = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['telepon'])))));
					$pihak = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['pihak'])))));
					$nmr_suratpesanan = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['nmr_suratpesanan'])))));
					$nm_barang = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['nm_barang'])))));
					$jumlah = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['jumlah'])))));
					$satuan = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['satuan'])))));
					$hrg_satuan = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['hrg_satuan'])))));
					$total_harga = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['total_harga'])))));
					$total_dibayar = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['total_dibayar'])))));
					$dibulatkan = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['dibulatkan'])))));
					$terbilang = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['terbilang'])))));
					if(empty($file_tmp)){
							
						$sim = mysqli_query($koneksi, "INSERT INTO tbl_bastpb (id_users,id_jnsfasilitas,id_peta,nomor,tgl_surat,nip,jabatan,alamat,telepon,pihak,nmr_suratpesanan,nm_barang,jumlah,satuan,hrg_satuan,total_harga,total_dibayar,dibulatkan,terbilang) value
								('$_SESSION[id_users]', '$id_jnsfasilitas', $id_peta', '$nomor', '$tgl_surat', '$nip', '$jabatan', '$alamat', '$telepon', '$pihak', '$nmr_suratpesanan', '$nm_barang', '$jumlah', '$satuan', '$hrg_satuan', '$total_harga', '$total_dibayar', '$dibulatkan', '$terbilang')");
						if($sim == true){
							echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=bastpb&alert=1'>";
							exit;
						}else{
							echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=bastpb&alert=4'>";
							exit;
						}
									
					}else{
									
						if ($file_ext =='php' || $file_ext =='*.php' || $file_ext =='*.php.jpg' || $file_ext =='*.php.jpeg' || $file_ext =='.php.png' || $file_ext =='.php.pjeg'){
							echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload tidak bertipe *.PHP');window.location=('../../main.php?page=bastpb&alert=5')</script>";
						}else{
							if(in_array($file_ext, $allowed_ext) == true){
								$nm_file = md5($nama_gambar);
								$fl = $nm_file.'.'.$file_ext;
								$folder = "../../../lib/img/fasilitas/";
								$ukuran = 200;
								$sim = mysqli_query($koneksi, "INSERT INTO tbl_bastpb (id_users,id_jnsfasilitas,id_peta,nomor,tgl_surat,nip,jabatan,alamat,telepon,pihak,nmr_suratpesanan,nm_barang,jumlah,satuan,hrg_satuan,total_harga,total_dibayar,dibulatkan,terbilang) value
								('$_SESSION[id_users]', '$id_jnsfasilitas', '$id_peta', '$nomor', '$tgl_surat', '$nip', '$jabatan', '$alamat', '$telepon', '$pihak', '$nmr_suratpesanan', '$nm_barang', '$jumlah', '$satuan', '$hrg_satuan', 'total_harga', '$total_dibayar', '$dibulatkan', '$terbilang', '$nm_file.$file_ext')");
								
								if($sim == true){
									UploadFotox($fl, $folder, $ukuran);
									
									echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=bastpb&alert=1'>";
									exit;
								}else{
									echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=bastpb&alert=4'>";
									exit;
								}
							}else{
								echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=bastpb&alert=4X'>";
								exit;
							}
						}
					}
                
        }else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=bastpb&alert=4'>"; exit; }
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['save'])) {
			$id_fasilitas = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['id_fasilitas'])))));
            if (isset($id_fasilitas)) {
					
					$allowed_ext	= array('pjpeg', 'jpg', 'jpeg', 'png');
					$file_name		= $_FILES['file']['name'];
					$file_ext		= strtolower(end(explode('.', $file_name)));
					$file_size		= $_FILES['file']['size'];
					$file_tmp		= $_FILES['file']['tmp_name'];
					$acak        	= rand(1,99);
					$nama_gambar 	= $acak.$file_name;
					
					$id_jnsfasilitas = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['id_jnsfasilitas'])))));
					$id_kelurahan = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['id_kelurahan'])))));
					$nm_fasilitas = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['nm_fasilitas'])))));
					$lo_fasilitas = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['lo_fasilitas'])))));
					$la_fasilitas = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['la_fasilitas'])))));
					$lk_fasilitas  = seo_title($nm_fasilitas);
					
					if(empty($file_tmp)){
							
						$updt = mysqli_query($koneksi, "UPDATE tbl_fasilitas SET 
								id_jnsfasilitas = '$id_jnsfasilitas',
								id_kelurahan = '$id_kelurahan',
								nm_fasilitas = '$nm_fasilitas', 
								lo_fasilitas = '$lo_fasilitas',
								la_fasilitas = '$la_fasilitas',
								lk_fasilitas = '$lk_fasilitas'
								where id_fasilitas = '$id_fasilitas'");
						if($updt == true){
							echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=fasilitas&alert=2'>";
							exit;
						}else{
							echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=fasilitas&act=edit&id=$id_fasilitas'>";
							exit;
						}
									
					}else{
									
						if ($file_ext =='php' || $file_ext =='*.php' || $file_ext =='*.php.jpg' || $file_ext =='*.php.jpeg' || $file_ext =='.php.png' || $file_ext =='.php.pjeg'){
							echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload tidak bertipe *.PHP');window.location=('../../main.php?page=fasilitas&alert=5')</script>";
						}else{
							if(in_array($file_ext, $allowed_ext) == true){
								$nm_file = md5($nama_gambar);
								$fl = $nm_file.'.'.$file_ext;
								$lokasi = '../../../lib/img/fasilitas/';
								$folder = "../../../lib/img/fasilitas/";
								$ukuran = 200;
								$updt = mysqli_query($koneksi, "UPDATE tbl_fasilitas SET 
									id_jnsfasilitas = '$id_jnsfasilitas',
									id_kelurahan = '$id_kelurahan',
									nm_fasilitas = '$nm_fasilitas', 
									lo_fasilitas = '$lo_fasilitas',
									la_fasilitas = '$la_fasilitas',
									lk_fasilitas = '$lk_fasilitas',
									gb_fasilitas = '$fl'
									where id_fasilitas = '$id_fasilitas'");
								if($updt == true){
									
									UploadFotox($fl, $folder, $ukuran);
									unlink($folder.$_POST['gb_l']);	
									unlink($folder.'small_'.$_POST['gb_l']);	
									echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=fasilitas&alert=2'>";
									exit;
								}else{
									echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=fasilitas&act=edit&id=$id_fasilitas'>";
									exit;
								}
							}else{
								echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=fasilitas&act=edit&id=$id_fasilitas'>";
								exit;
							}
						}
					}
						
			}else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=fasilitas&alert=5'>"; exit; }      
        }else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=fasilitas&alert=4'>"; exit; }
    }

    elseif ($_GET['act']=='delete') {
		$id = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_GET['id'])))));
        if (isset($id)) {
            
			$agb = mysqli_query($koneksi,"SELECT gb_fasilitas,id_fasilitas FROM tbl_fasilitas WHERE id_fasilitas = '$id'") 
            or die('Ada kesalahan pada query tampil data : '.mysqli_error());
			$datax = mysqli_fetch_assoc($agb);
            if($datax['id_fasilitas'] == true){
				if ($datax['gb_fasilitas'] != ''){
					$folder = "../../../lib/img/fasilitas";
					unlink($folder.$datax['gb_fasilitas']);	
					unlink($folder."small_".$datax['gb_fasilitas']);	
					
					$query = mysqli_query($koneksi,"DELETE FROM tbl_fasilitas WHERE id_fasilitas = '$id'")
                            or die('Ada kesalahan pada query delete : '.mysqli_error($koneksi));
					
				}else{
					$query = mysqli_query($koneksi,"DELETE FROM tbl_fasilitas WHERE id_fasilitas = '$id'")
                            or die('Ada kesalahan pada query delete : '.mysqli_error($koneksi));
				}
				
					if ($query == true) { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=fasilitas&alert=3'>"; exit; }
					else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=fasilitas&alert=6'>"; exit; }
					
			}else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=fasilitas&alert=6'>"; exit; }
            
        }else{ echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=fasilitas&alert=6'>"; exit; }
    }
	
	
}       
?>
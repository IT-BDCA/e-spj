<!-- Native V.0.1 bjurnal
 ************************************************
 * Developer    : Lian A.k.a ********************
 * Company      : Bahtera Kreasi Mandiri ***************
 * Release Date : 14 Januari 2018 ***************
 ************************************************
 -->

<?php
session_start();
error_reporting(0);
require_once "../../../lib/config/database.php";
require_once "../../../lib/config/seo.php";
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=4'>";
}
// jika user sudah login, maka jalankan perintah untuk pemanggilan file propinsi konten
else {
    if ($_GET['act']=='insert') {
        if (isset($_POST['save'])) {
        			$id_jnsfasilitas = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['id_jnsfasilitas'])))));
        			$nm_fasilitas = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['nm_fasilitas'])))));
        			$nm_kegiatan = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['nm_kegiatan'])))));
        			$nm_penyedia = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['nm_penyedia'])))));
					$id_peta = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['id_peta'])))));
					$isi_surat = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['isi_surat'])))));
					$lo_fasilitas = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['lo_fasilitas'])))));
					$la_fasilitas = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['la_fasilitas'])))));
					$nm_barang = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['nm_barang'])))));
					$stn_barang = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['stn_barang'])))));
					$jml_barang = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['jml_barang'])))));
					$hrg_satuan = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['hrg_satuan'])))));
					$total_harga = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['total_harga'])))));
					$keterangan = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['keterangan'])))));
					$lk_fasilitas  = seo_title($nm_fasilitas);
					if(empty($file_tmp)){
							
						$sim = mysqli_query($koneksi, "INSERT INTO tbl_fasilitas (id_users,id_jnsfasilitas,nm_fasilitas,nm_kegiatan,nm_penyedia,id_peta,isi_surat,lo_fasilitas,la_fasilitas,lk_fasilitas, nm_barang,stn_barang,jml_barang,hrg_satuan,total_harga,keterangan) value
								('$_SESSION[id_users]', '$id_jnsfasilitas', '$nm_fasilitas','$nm_kegiatan', '$nm_penyedia', '$id_peta', '$isi_surat', '$lo_fasilitas', '$la_fasilitas', '$lk_fasilitas', '$nm_barang','$stn_barang','$jml_barang','$hrg_satuan','$total_harga','$keterangan')");
						if($sim == true){
							echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=suratpesananbarang&alert=1'>";
							exit;
						}else{
							echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=suratpesananbarang&alert=4'>";
							exit;
						}
									
					}else{
									
						if ($file_ext =='php' || $file_ext =='*.php' || $file_ext =='*.php.jpg' || $file_ext =='*.php.jpeg' || $file_ext =='.php.png' || $file_ext =='.php.pjeg'){
							echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload tidak bertipe *.PHP');window.location=('../../main.php?page=fasilitas&alert=5')</script>";
						}else{
							if(in_array($file_ext, $allowed_ext) == true){
								$nm_file = md5($nama_gambar);
								$fl = $nm_file.'.'.$file_ext;
								$folder = "../../../lib/img/fasilitas/";
								$ukuran = 200;
								$sim = mysqli_query($koneksi, "INSERT INTO tbl_fasilitas (id_users,id_jnsfasilitas,nm_fasilitas,nm_kegiatan,nm_penyedia,id_peta,isi_surat,lo_fasilitas,la_fasilitas,lk_fasilitas,gb_fasilitas,nm_barang,stn_barang,jml_barang,hrg_satuan,total_harga,keterangan) value
								('$_SESSION[id_users]', '$id_jnsfasilitas', '$nm_fasilitas','$nm_kegiatan','$nm_penyedia', '$id_peta', '$isi_surat', '$lo_fasilitas', '$la_fasilitas', '$lk_fasilitas','$nm_barang','$stn_barang','$jml_barang','$hrg_satuan','$total_harga','$keterangan' '$nm_file.$file_ext')");
								
								if($sim == true){
									UploadFotox($fl, $folder, $ukuran);
									
									echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=suratpesananbarang&alert=1'>";
									exit;
								}else{
									echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=suratpesananbarang&alert=4'>";
									exit;
								}
							}else{
								echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=suratpesananbarang&alert=4X'>";
								exit;
							}
						}
					}
                
        }else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=suratpesananbarang&alert=4'>"; exit; }
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['save'])) {
			$id_fasilitas = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['id_fasilitas'])))));
            if (isset($id_fasilitas)) {
        			$nm_fasilitas = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['nm_fasilitas'])))));
        			$nm_kegiatan = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['nm_kegiatan'])))));
        			$nm_penyedia = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['nm_penyedia'])))));
					$id_peta = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['id_peta'])))));
					$isi_surat = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['isi_surat'])))));
					$lo_fasilitas = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['lo_fasilitas'])))));
					$la_fasilitas = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['la_fasilitas'])))));
					$nm_barang = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['nm_barang'])))));
					$stn_barang = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['stn_barang'])))));
					$jml_barang = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['jml_barang'])))));
					$hrg_satuan = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['hrg_satuan'])))));
					$total_harga = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['total_harga'])))));
					$keterangan = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['keterangan'])))));
					$lk_fasilitas  = seo_title($nm_fasilitas);
					if(empty($file_tmp)){
					$updt = mysqli_query($koneksi, "UPDATE tbl_fasilitas SET 
						nm_fasilitas = '$nm_fasilitas',
						nm_kegiatan = '$nm_kegiatan', 
						nm_penyedia = '$nm_penyedia',
						id_peta = '$id_peta', 
						isi_surat = '$isi_surat', 
						lo_fasilitas = '$lo_fasilitas', 
						la_fasilitas = '$la_fasilitas', 
						nm_barang = '$nm_barang', 
						stn_barang = '$stn_barang', 
						jml_barang = '$jml_barang', 
						hrg_satuan = '$hrg_satuan',
						total_harga = '$total_harga', 
						keterangan = '$keterangan' 
						WHERE id_fasilitas = '$id_fasilitas'");

						if($updt == true){
										
						echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=suratpesananbarang&alert=2'>";
						exit;
						}else{
							echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=suratpesananbarang&act=edit&id=$id_fasilitas'>";
						exit;
						}

						}else{
									
						$updt = mysqli_query($koneksi, "UPDATE tbl_fasilitas SET 
						nm_fasilitas = '$nm_fasilitas',
						nm_kegiatan = '$nm_kegiatan', 
						nm_penyedia = '$nm_penyedia',
						id_peta = '$id_peta', 
						isi_surat = '$isi_surat', 
						lo_fasilitas = '$lo_fasilitas', 
						la_fasilitas = '$la_fasilitas', 
						nm_barang = '$nm_barang', 
						stn_barang = '$stn_barang', 
						jml_barang = '$jml_barang', 
						hrg_satuan = '$hrg_satuan',
						total_harga = '$total_harga', 
						keterangan = '$keterangan' 
						WHERE id_fasilitas = '$id_fasilitas'");

								if($updt == true){

									echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=suratpesananbarang&alert=2'>";
									exit;
								}else{
									echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=suratpesananbarang&act=edit&id=$id_fasilitas'>";
									exit;
								}
							}else{
								echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=suratpesananbarang&act=edit&id=$id_fasilitas'>";
								exit;
							}
						}
					}
						
			}else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=suratpesananbarang&alert=5'>"; exit; }      
        }else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=suratpesananbarang&alert=4'>"; exit; }
    }

	 elseif ($_GET['act']=='delete') {
		$id = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_GET['id'])))));
        if (isset($id)) {
            
			$agb = mysqli_query($koneksi,"SELECT id_fasilitas FROM tbl_fasilitas WHERE id_fasilitas = '$id'") 
            or die('Ada kesalahan pada query tampil data : '.mysqli_error());
			$datax = mysqli_fetch_assoc($agb);
            if($datax['id_fasilitas'] == true){
					
					$query = mysqli_query($koneksi,"DELETE FROM tbl_fasilitas WHERE id_fasilitas = '$id'")
                            or die('Ada kesalahan pada query delete : '.mysqli_error($koneksi));
					
				}else{
					$query = mysqli_query($koneksi,"DELETE FROM tbl_fasilitas WHERE id_fasilitas = '$id'")
                            or die('Ada kesalahan pada query delete : '.mysqli_error($koneksi));
				}
				
					if ($query == true) { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=suratpesananbarang&alert=3'>"; exit; }
					else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=suratpesananbarang&alert=6'>"; exit; }
					
			}else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=suratpesananbarang&alert=6'>"; exit; }
            
        }else{ echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=suratpesananbarang&alert=6'>"; exit; }
    }
}       
?>
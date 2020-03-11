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
			$nm_peta = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['nm_peta'])))));
			$nip = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['nip'])))));
			$jabatan = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['jabatan'])))));
			$alamat = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['alamat'])))));
			$query = mysqli_query($koneksi, "INSERT INTO tbl_peta(nm_peta,nip,jabatan,alamat) 
				VALUES('$nm_peta', '$nip', '$jabatan', '$alamat')")
				or die('Ada kesalahan pada query insert penanggung jawab : '.mysqli_error($koneksi));
			// cek query
            if ($query == true) { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=peta&alert=1'>"; exit; }
			else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=peta&alert=4'>"; exit; }
                
        }else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=peta&alert=4'>"; exit; }
    }

elseif ($_GET['act']=='update') {
        if (isset($_POST['save'])) {
			$id_peta = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['id_peta'])))));
            if (isset($id_peta)) {
					$nm_peta = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['nm_peta'])))));
					$isi_peta = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['isi_peta'])))));
					$query = mysqli_query($koneksi, "UPDATE tbl_peta SET nm_peta = '$nm_peta',isi_peta = '$isi_peta' WHERE id_peta = '$_POST[id_peta]'")
								or die('Ada kesalahan pada query update : '.mysqli_error($koneksi));
					if ($query == true) { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=peta&alert=2'>"; exit; }   
					else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=peta&alert=5'>"; exit; }
			}else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=peta&alert=5'>"; exit; }      
        }else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=peta&alert=4'>"; exit; }
    
	}

	elseif ($_GET['act']=='delete') {
		$id_peta = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_GET['id'])))));
        if (isset($id_peta)) {
				
					$query = mysqli_query($koneksi,"DELETE FROM tbl_peta WHERE id_peta = '$id_peta'")
                            or die('Ada kesalahan pada query delete : '.mysqli_error($koneksi));
					
				}else{
					$query = mysqli_query($koneksi,"DELETE FROM tbl_peta WHERE id_peta = '$id_peta'")
                            or die('Ada kesalahan pada query delete : '.mysqli_error($koneksi));
				}
				
					if ($query == true) { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=peta&alert=3'>"; exit; }
					else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=peta&alert=6'>"; exit; }
					
			}else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=peta&alert=6'>"; exit; }
	
}       
?>
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
			$nm_jnsfasilitas = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['nm_jnsfasilitas'])))));
			$map_jnsfasilitas = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['map_jnsfasilitas'])))));
			$lk_jnsfasilitas  = seo_title($_POST['nm_jnsfasilitas']);
			$query = mysqli_query($koneksi, "INSERT INTO tbl_jnsfasilitas(nm_jnsfasilitas,map_jnsfasilitas,lk_jnsfasilitas) 
				VALUES('$nm_jnsfasilitas','$map_jnsfasilitas','$lk_jnsfasilitas')")
				or die('Ada kesalahan pada query insert jenis fasilitas : '.mysqli_error($koneksi));
			// cek query
            if ($query == true) { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=jnsfasilitas&alert=1'>"; exit; }
			else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=jnsfasilitas&alert=4'>"; exit; }
                
        }else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=jnsfasilitas&alert=4'>"; exit; }
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['save'])) {
			$id_jnsfasilitas = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['id_jnsfasilitas'])))));
            if (isset($id_jnsfasilitas)) {
					$nm_jnsfasilitas = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['nm_jnsfasilitas'])))));
					$map_jnsfasilitas = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['map_jnsfasilitas'])))));
					$lk_jnsfasilitas  = seo_title($_POST['nm_jnsfasilitas']);
					$query = mysqli_query($koneksi, "UPDATE tbl_jnsfasilitas SET nm_jnsfasilitas = '$nm_jnsfasilitas',map_jnsfasilitas = '$map_jnsfasilitas', lk_jnsfasilitas = '$lk_jnsfasilitas' WHERE id_jnsfasilitas = '$_POST[id_jnsfasilitas]'")
								or die('Ada kesalahan pada query update : '.mysqli_error($koneksi));
					if ($query == true) { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=jnsfasilitas&alert=2'>"; exit; }   
					else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=jnsfasilitas&alert=5'>"; exit; }
			}else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=jnsfasilitas&alert=5'>"; exit; }      
        }else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=jnsfasilitas&alert=4'>"; exit; }
    
	}

    elseif ($_GET['act']=='nonaktif') {
		$id_jnsfasilitas = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_GET['id'])))));
		if (isset($id_jnsfasilitas)) {
			$query = mysqli_query($koneksi, "UPDATE tbl_jnsfasilitas SET st_jnsfasilitas = 'N' WHERE id_jnsfasilitas = '$id_jnsfasilitas'")
			or die('Ada kesalahan pada query update : '.mysqli_error($koneksi));
				if ($query == true) { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=jnsfasilitas&alert=2'>"; exit; }   
				else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=jnsfasilitas&alert=5'>"; exit; }
		}else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=jnsfasilitas&alert=5'>"; exit; }      
    
	}
	
	elseif ($_GET['act']=='aktif') {
		$id_jnsfasilitas = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_GET['id'])))));
		if (isset($id_jnsfasilitas)) {
			$query = mysqli_query($koneksi, "UPDATE tbl_jnsfasilitas SET st_jnsfasilitas = 'Y' WHERE id_jnsfasilitas = '$id_jnsfasilitas'")
			or die('Ada kesalahan pada query update : '.mysqli_error($koneksi));
				if ($query == true) { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=jnsfasilitas&alert=2'>"; exit; }   
				else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=jnsfasilitas&alert=5'>"; exit; }
		}else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=jnsfasilitas&alert=5'>"; exit; }      
    
	}
	
	
}       
?>
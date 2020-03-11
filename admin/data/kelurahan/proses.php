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
			$nm_kelurahan = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['nm_kelurahan'])))));
			$alamat = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['alamat'])))));
			$tlp_perusahaan = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['tlp_perusahaan'])))));
			$lk_kelurahan  = seo_title($_POST['nm_kelurahan']);
			$query = mysqli_query($koneksi, "INSERT INTO tbl_kelurahan(nm_kelurahan, alamat, tlp_perusahaan, lk_kelurahan) 
				VALUES('$nm_kelurahan', '$alamat', '$tlp_perusahaan', '$lk_kelurahan')")
				or die('Ada kesalahan pada query insert jenis kriminal : '.mysqli_error($koneksi));
			// cek query
            if ($query == true) { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=kelurahan&alert=1'>"; exit; }
			else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=kelurahan&alert=4'>"; exit; }
                
        }else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=kelurahan&alert=4'>"; exit; }
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['save'])) {
			$id_kelurahan = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['id_kelurahan'])))));
            if (isset($id_kelurahan)) {
					$nm_kelurahan = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['nm_kelurahan'])))));
					$alamat = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['alamat'])))));
					$tlp_perusahaan = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['tlp_perusahaan'])))));
					$lk_kelurahan  = seo_title($_POST['nm_kelurahan']);
					$query = mysqli_query($koneksi, "UPDATE tbl_kelurahan SET nm_kelurahan = '$nm_kelurahan', alamat = '$alamat', tlp_perusahaan = '$tlp_perusahaan', lk_kelurahan = '$lk_kelurahan' WHERE id_kelurahan = '$_POST[id_kelurahan]'")
								or die('Ada kesalahan pada query update : '.mysqli_error($koneksi));
					if ($query == true) { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=kelurahan&alert=2'>"; exit; }   
					else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=kelurahan&alert=5'>"; exit; }
			}else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=kelurahan&alert=5'>"; exit; }      
        }else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=kelurahan&alert=4'>"; exit; }
    
	}

    elseif ($_GET['act']=='nonaktif') {
		$id_kelurahan = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_GET['id'])))));
		if (isset($id_kelurahan)) {
			$query = mysqli_query($koneksi, "UPDATE tbl_kelurahan SET st_kelurahan = 'N' WHERE id_kelurahan = '$id_kelurahan'")
			or die('Ada kesalahan pada query update : '.mysqli_error($koneksi));
				if ($query == true) { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=kelurahan&alert=2'>"; exit; }   
				else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=kelurahan&alert=5'>"; exit; }
		}else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=kelurahan&alert=5'>"; exit; }      
    
	}
	
	elseif ($_GET['act']=='aktif') {
		$id_kelurahan = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_GET['id'])))));
		if (isset($id_kelurahan)) {
			$query = mysqli_query($koneksi, "UPDATE tbl_kelurahan SET st_kelurahan = 'Y' WHERE id_kelurahan = '$id_kelurahan'")
			or die('Ada kesalahan pada query update : '.mysqli_error($koneksi));
				if ($query == true) { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=kelurahan&alert=2'>"; exit; }   
				else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=kelurahan&alert=5'>"; exit; }
		}else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=kelurahan&alert=5'>"; exit; }      
    
	}

	 elseif ($_GET['act']=='delete') {
		$id_kelurahan = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_GET['id'])))));
        if (isset($id_kelurahan)) {
				
					$query = mysqli_query($koneksi,"DELETE FROM tbl_kelurahan WHERE id_kelurahan = '$id_kelurahan'")
                            or die('Ada kesalahan pada query delete : '.mysqli_error($koneksi));
					
				}else{
					$query = mysqli_query($koneksi,"DELETE FROM tbl_kelurahan WHERE id_kelurahan = '$id_kelurahan'")
                            or die('Ada kesalahan pada query delete : '.mysqli_error($koneksi));
				}
				
					if ($query == true) { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=kelurahan&alert=3'>"; exit; }
					else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=kelurahan&alert=6'>"; exit; }
					
			}else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=kelurahan&alert=6'>"; exit; }
    }    
?>
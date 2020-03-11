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
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=4'>";
}
// jika user sudah login, maka jalankan perintah untuk pemanggilan file propinsi konten
else {
    if ($_GET['act']=='insert') {
        if (isset($_POST['save'])) {
			$nm_user = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['nm_user'])))));
			$query = mysqli_query($koneksi, "INSERT INTO tbl_user(nm_user) 
				VALUES('$nm_user')")
				or die('Ada kesalahan pada query insert perusahaan : '.mysqli_error($koneksi));
			// cek query
            if ($query == true) { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=users&alert=1'>"; exit; }
			else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=users&alert=4'>"; exit; }
                
        }else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=users&alert=4'>"; exit; }
    }

elseif($_GET['act']=='update') {
        if (isset($_POST['save'])) {
			$id_user = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['id_user'])))));
            if (isset($id_user)) {
					$nm_user = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['nm_user'])))));
					$ps_user = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_POST['ps_user'])))));
					if(!empty($ps_user)){
						$query = mysqli_query($koneksi, "UPDATE tbl_user SET nm_user = '$nm_user', ps_user = '$ps_user' WHERE id_user = '$id_user'")
								or die('Ada kesalahan pada query update : '.mysqli_error($koneksi));
							
							if ($query == true) { 
								echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=users&alert=2'>";
								exit;
							}else { 
								echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=users&alert=5'>";
								exit;
							}
					}else{
						$query = mysqli_query($koneksi, "UPDATE tbl_user SET nm_user = '$nm_user' WHERE id_user = '$id_user'")
								or die('Ada kesalahan pada query update : '.mysqli_error($koneksi));
							
							if ($query == true) { 
								echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=users&alert=2'>";
								exit;
							}else { 
								echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=users&alert=5'>";
								exit;
							}
						
					}
					
					
			}else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=users&alert=5'>"; exit; }      
        }else { echo "<meta http-equiv='refresh' content='0; url=../../main.php?page=users&alert=4'>"; exit; }
    }
	
	
}       
?>
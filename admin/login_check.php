<!-- Native VP.0.1 BMandiri
 ************************************************
 * Developer    : Lian A.k.a ********************
 * Company      : Bahtera Mandiri ***************
 * Release Date : 9 Februari 2016 ***************
 ************************************************
 -->
<?php
// panggil file untuk koneksi ke database
require_once "../lib/config/database.php";

// ambil data hasil submit dari form
$user = $_POST['username'];
$pass = $_POST['password'];
$id_level = '1';
// ambil data hasil submit dari form
$username = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($user)))));
$password = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($pass)))));

// pastikan username dan password adalah berupa huruf atau angka.
if (!ctype_alnum($username) || !ctype_alnum($password)) {
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=3'>";
}
else {
	// ambil data dari tabel user untuk pengecekan berdasarkan inputan username dan passrword
	
	$query = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE nm_user = '$username' AND ps_user ='$password'") 
	or die('Ada kesalahan pada query user: '.mysqli_error($koneksi));
	$rows  = mysqli_num_rows($query);
	// jika data ada, jalankan perintah untuk membuat session
	if ($rows > 0) {
		$data  = mysqli_fetch_assoc($query);
		
		session_start();
		$_SESSION['KCFINDER']=array();
	    $_SESSION['KCFINDER']['disabled'] = false;
	    $_SESSION['KCFINDER']['uploadURL'] = "../../../../lib/posting";
	    $_SESSION['KCFINDER']['uploadDir'] = "";
		
		$_SESSION['id_users']  = $data['id_user'];
		$_SESSION['username'] = $data['nm_user'];
		$_SESSION['password'] = $data['ps_user'];
		// lalu alihkan ke halaman user
		$sid_lama = session_id();
		session_regenerate_id();
		$sid_baru = session_id();
		mysqli_query($koneksi, "UPDATE tbl_user SET id_sesi = '$sid_baru' WHERE id_user = '$data[id_user]'");
		echo "<meta http-equiv='refresh' content='0; url=main.php?page=home'>";
		exit;
	}

	// jika data tidak ada, alihkan ke halaman login dan tampilkan pesan = 1
	else {
		echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
		exit;
	}
}
?>
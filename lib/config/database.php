<!-- Native VP.0.1 BMandiri
 ************************************************
 * Developer    : Lian A.k.a ********************
 * Company      : Bahtera Mandiri ***************
 * Release Date : 9 Februari 2016 ***************
 ************************************************
 -->
<?php
// deklarasi parameter koneksi database
$db_server   = "localhost";
$db_username = "rsud";
$db_password = "RSUDSekayu18@";
$db_database = "db_sifasum";

// koneksi database
$koneksi = mysqli_connect($db_server, $db_username, $db_password, $db_database);

// cek koneksi
if ($koneksi->connect_error) {
    die('Koneksi Database Gagal : '.$koneksi->connect_error);
}

?>

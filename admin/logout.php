<!-- Native V.0.1 BMandiri
 ************************************************
 * Developer    : Lian A.k.a ********************
 * Company      : Bahtera Mandiri ***************
 * Release Date : 9 Februari 2016 ***************
 ************************************************
 -->

<?php
session_start();
// hapus session
session_destroy();

// alihkan ke halaman login (index.php) dan berikan alert = 2
echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
?>
<?php
    /*** BEGIN .Halaman Utama (Beranda atau Home) ***/
    $pg = isset($_GET['page']) ? $_GET['page'] : '';
	$page = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($pg)))));
	switch ($page)
	{
	//page awal atau halaman awal
	case 'home' :
		require (__DIR__ . '/lib/page/home.php');
		break;
	//page profil	
	case 'profil' :
		require (__DIR__ . '/lib/page/profil.php');
		break;
	//page peta	
	case 'peta' :
		require (__DIR__ . '/lib/page/peta.php');
		break;
	//page fasilitas	
	case 'fasilitas' :
		require (__DIR__ . '/lib/page/fasilitas.php');
		break;
	//page kelurahan	
	case 'kelurahan' :
		require (__DIR__ . '/lib/page/kelurahan.php');
		break;
	//page awal atau halaman awal	
	default : 
		require (__DIR__ . '/lib/page/home.php');	
	
	}
?>
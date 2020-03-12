<?php 
// fungsi untuk pengecekan status login user 
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=4'>";
}
// jika user sudah login, maka jalankan perintah untuk pemanggilan file propinsi konten
else { 

  require_once "../lib/config/database.php";
  require_once "../lib/config/library.php";
  $act = isset($_GET['act']) ? $_GET['act'] : '';
	// Home (Beranda)
	if ($_GET['page']=='home'){               
		include "data/home/index.php";
	} 
	// Manajemen kategori
	elseif ($_GET['page']=='jnsfasilitas'){
    switch($act){
		default:
			include_once 'data/jnsfasilitas/index.php';
		break;
		case "tambah":
			include_once 'data/jnsfasilitas/tambah.php';
		break;
		case "edit":
			include_once 'data/jnsfasilitas/edit.php';
		break;
		case "lihat":
			include_once 'data/jnsfasilitas/lihat.php';
		break;
		}
	}
	
	// Manajemen fasilitas
	elseif ($_GET['page']=='fasilitas'){
    switch($act){
		default:
			include_once 'data/fasilitas/index.php';
		break;
		case "tambah":
			include_once 'data/fasilitas/tambah.php';
		break;
		case "edit":
			include_once 'data/fasilitas/edit.php';
		break;
		case "lihat":
			include_once 'data/fasilitas/lihat.php';
		break;
		}
	}
	
	// Manajemen fasilitas
	elseif ($_GET['page']=='kelurahan'){
    switch($act){
		default:
			include_once 'data/kelurahan/index.php';
		break;
		case "tambah":
			include_once 'data/kelurahan/tambah.php';
		break;
		case "edit":
			include_once 'data/kelurahan/edit.php';
		break;		
		}
	}
	
	// Manajemen user
	elseif ($_GET['page']=='users'){
    switch($act){
		default:
			include_once 'data/users/index.php';
		break;
		case "edit":
			include_once 'data/users/edit.php';
		break;
		case "tambah":
			include_once 'data/users/tambah.php';
		break;
		}
	}
	
	// Manajemen peta
	elseif ($_GET['page']=='peta'){
    switch($act){
		default:
			include_once 'data/peta/index.php';
		break;
		case "edit":
			include_once 'data/peta/edit.php';
		break;
		case "lihat":
			include_once 'data/peta/lihat.php';
		break;
		case "tambah":
			include_once 'data/peta/tambah.php';
		break;
		}
	}

	// Manajemen kategori
	elseif ($_GET['page']=='suratpesananbarang'){
    switch($act){
		default:
			include_once 'data/suratpesananbarang/index.php';
		break;
		case "tambah":
			include_once 'data/suratpesananbarang/tambah.php';
		break;
		case "edit":
			include_once 'data/suratpesananbarang/edit.php';
		break;
		case "lihat":
			include_once 'data/suratpesananbarang/lihat.php';
		break;
		}
	}

	// Manajemen kategori
	elseif ($_GET['page']=='bastpb'){
    switch($act){
		default:
			include_once 'data/bastpb/index.php';
		break;
		case "tambah":
			include_once 'data/bastpb/tambah.php';
		break;
		case "edit":
			include_once 'data/bastpb/edit.php';
		break;
		case "lihat":
			include_once 'data/bastpb/lihat.php';
		break;
		}
	}

	// Manajemen kategori
	elseif ($_GET['page']=='bappb'){
    switch($act){
		default:
			include_once 'data/bappb/index.php';
		break;
		case "tambah":
			include_once 'data/bappb/tambah.php';
		break;
		case "edit":
			include_once 'data/bappb/edit.php';
		break;
		case "lihat":
			include_once 'data/bappb/lihat.php';
		break;
		}
	}
  
  // Apabila modul tidak ditemukan
  else{
    echo "<p>Modul tidak ada.</p>";
  }
}
?>

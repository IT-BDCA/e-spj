<?php
// ADMINISTARTIOR /////////////////////////////////////////////////////////////////////////////////
class Paging{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
	$halaman = stripslashes(strip_tags(htmlspecialchars(@$_GET['halaman'],ENT_QUOTES)));
	
		if(empty($_GET['halaman'])){
			$posisi=0;
			$halaman= 1;
		}
		else{
			$posisi = ($_GET['halaman']-1) * $batas;
			if (!ctype_alnum($halaman)){
				echo "<meta http-equiv='refresh' content='0; url=index.php'>";
			exit;
			}
		}
		return $posisi;
		
	}

	// Fungsi untuk menghitung total halaman
	function jumlahHalaman($jmldata, $batas){
	$jmlhalaman = ceil($jmldata/$batas);
	return $jmlhalaman;
	}

	// Fungsi untuk link halaman 1,2,3 (untuk admin)
	function navHalaman($halaman_aktif, $jmlhalaman){
	$link_halaman = "";

	// Link ke halaman pertama (first) dan sebelumnya (prev)
	if($halaman_aktif > 1){
		$prev = $halaman_aktif-1;
		$link_halaman .= "<li><a href=$_SERVER[PHP_SELF]?p=mobil&halaman=1 class='nextprev'>Awal</a></li>
							<li><a href=$_SERVER[PHP_SELF]?p=mobil&halaman=$prev class='nextprev'>Kembali</a></li>";
	}elseif($halaman_aktif == 0){
		$link_halaman .= "<li><span class='nextprev'>Awal</span><span class='nextprev'>Kembali</span></li>";
	}
	else{ 
		$link_halaman .=  "<li><span class='nextprev'>Awal</span><span class='nextprev'>Kembali</span></li>";
	}

	// Link halaman 1,2,3, ...
	$angka = ($halaman_aktif >  3 ? "<li><span class='nextprev'>...</span></li>" : " "); 
	for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
	  if ($i < 1)
		continue;
		  $angka .= "<li><a href=$_SERVER[PHP_SELF]?p=mobil&halaman=$i>$i</a></li>";
	  }
		  if($halaman_aktif == 0){
				
			}
		  else{
				$angka .= "<li class='active'><a href ='$_SERVER[PHP_SELF]?p=mobil&halaman=$halaman_aktif'>$halaman_aktif</a></li>";
		  }
		for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
		if($i > $jmlhalaman)
		  break;
		  $angka .= "<li><a href=$_SERVER[PHP_SELF]?p=mobil&halaman=$i>$i</a></li>";
		}
		  $angka .= ($halaman_aktif+2<$jmlhalaman ? "<li><span class='nextprev'>...</span></li><li><a href=$_SERVER[PHP_SELF]?p=mobil&halaman=$jmlhalaman>$jmlhalaman</a></li>" : " ");

	$link_halaman .= "$angka";

	// Link ke halaman berikutnya (Lanjut) dan terakhir (Akhir) 
	if($halaman_aktif < $jmlhalaman){
		$next = $halaman_aktif+1;
		$link_halaman .= "<li><a href=$_SERVER[PHP_SELF]?p=mobil&halaman=$next class='nextprev'>Lanjut</a></li>
						 <li><a href=$_SERVER[PHP_SELF]?p=mobil&halaman=$jmlhalaman class='nextprev'>Akhir</a></li>";
	}
	else{
		$link_halaman .= "<li><span class='nextprev'>Lanjut</span><span class='nextprev'>Akhir</span></li>";
	}
	return $link_halaman;
	}
	}

?>

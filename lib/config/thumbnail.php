<?php
// Upload gambar untuk berita, album, galeri foto, banner
function UploadFoto($fupload_name, $folder, $ukuran){
  // File gambar yang di upload
  $file_upload = $folder . $fupload_name;

  // Simpan gambar dalam ukuran aslinya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $file_upload);

  // Identitas file asli
  $gbr_asli = imagecreatefromjpeg($file_upload);
  $lebar    = imageSX($gbr_asli);
  $tinggi 	= imageSY($gbr_asli);

  // Simpan dalam versi thumbnail
  $thumb_lebar  = $ukuran;
  $thumb_tinggi = $ukuran;

  // Proses perubahan dimensi ukuran
  $gbr_thumb = imagecreatetruecolor($thumb_lebar,$thumb_tinggi);
  imagecopyresampled($gbr_thumb, $gbr_asli, 0, 0, 0, 0, $thumb_lebar, $thumb_tinggi, $lebar, $tinggi);

  // Simpan gambar thumbnail
  imagejpeg($gbr_thumb,$folder . "small_" . $fupload_name);
  
  // Hapus gambar di memori komputer
  imagedestroy($gbr_asli);
  imagedestroy($gbr_thumb);
}
function UploadLogo($fupload_name, $folder, $ukuran, $tinggix){
  // File gambar yang di upload
  $file_upload = $folder . $fupload_name;

  // Simpan gambar dalam ukuran aslinya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $file_upload);

  // Identitas file asli
  $gbr_asli = imagecreatefromjpeg($file_upload);
  $lebar    = imageSX($gbr_asli);
  $tinggi 	= imageSY($gbr_asli);

  // Simpan dalam versi thumbnail
  $thumb_lebar  = $ukuran;
  $thumb_tinggi = $tinggix;

  // Proses perubahan dimensi ukuran
  $gbr_thumb = imagecreatetruecolor($thumb_lebar,$thumb_tinggi);
  imagecopyresampled($gbr_thumb, $gbr_asli, 0, 0, 0, 0, $thumb_lebar, $thumb_tinggi, $lebar, $tinggi);

  // Simpan gambar thumbnail
  imagejpeg($gbr_thumb,$folder . "small_" . $fupload_name);
  
  // Hapus gambar di memori komputer
  imagedestroy($gbr_asli);
  imagedestroy($gbr_thumb);
}
function UploadSlideshow($nama_file_unik, $folder){
  //Simpan gambar dalam ukuran sebenarnya
  $file_upload = $folder . $nama_file_unik;

  // Simpan gambar dalam ukuran aslinya
  move_uploaded_file($_FILES["gb_slideshow"]["tmp_name"], $file_upload);
  
  // Identitas file asli
  $gbr_asli = imagecreatefromjpeg($file_upload);
  $lebar    = imageSX($gbr_asli);
  $tinggi 	= imageSY($gbr_asli);

  // Simpan dalam versi thumbnail
  $thumb_lebar  = 180;
  $thumb_tinggi = 180;

  // Proses perubahan dimensi ukuran
  $gbr_thumb = imagecreatetruecolor($thumb_lebar,$thumb_tinggi);
  imagecopyresampled($gbr_thumb, $gbr_asli, 0, 0, 0, 0, $thumb_lebar, $thumb_tinggi, $lebar, $tinggi);

  // Simpan gambar thumbnail
  imagejpeg($gbr_thumb,$folder . "small_" . $nama_file_unik);
  
  // Hapus gambar di memori komputer
  imagedestroy($gbr_asli);
  imagedestroy($gbr_thumb);
}
function UploadAlbum($nama_file_unik, $folder){
  //Simpan gambar dalam ukuran sebenarnya
  $file_upload = $folder . $nama_file_unik;

  // Simpan gambar dalam ukuran aslinya
  move_uploaded_file($_FILES["gb_album"]["tmp_name"], $file_upload);
  
  // Identitas file asli
  $gbr_asli = imagecreatefromjpeg($file_upload);
  $lebar    = imageSX($gbr_asli);
  $tinggi 	= imageSY($gbr_asli);

  // Simpan dalam versi thumbnail
  $thumb_lebar  = 180;
  $thumb_tinggi = 180;

  // Proses perubahan dimensi ukuran
  $gbr_thumb = imagecreatetruecolor($thumb_lebar,$thumb_tinggi);
  imagecopyresampled($gbr_thumb, $gbr_asli, 0, 0, 0, 0, $thumb_lebar, $thumb_tinggi, $lebar, $tinggi);

  // Simpan gambar thumbnail
  imagejpeg($gbr_thumb,$folder . "small_" . $nama_file_unik);
  
  // Hapus gambar di memori komputer
  imagedestroy($gbr_asli);
  imagedestroy($gbr_thumb);
}
function UploadGallery($nama_file_unik, $folder){
  //Simpan gambar dalam ukuran sebenarnya
  $file_upload = $folder . $nama_file_unik;

  // Simpan gambar dalam ukuran aslinya
  move_uploaded_file($_FILES["gb_gallery"]["tmp_name"], $file_upload);
  
  // Identitas file asli
  $gbr_asli = imagecreatefromjpeg($file_upload);
  $lebar    = imageSX($gbr_asli);
  $tinggi 	= imageSY($gbr_asli);

  // Simpan dalam versi thumbnail
  $thumb_lebar  = 180;
  $thumb_tinggi = 180;

  // Proses perubahan dimensi ukuran
  $gbr_thumb = imagecreatetruecolor($thumb_lebar,$thumb_tinggi);
  imagecopyresampled($gbr_thumb, $gbr_asli, 0, 0, 0, 0, $thumb_lebar, $thumb_tinggi, $lebar, $tinggi);

  // Simpan gambar thumbnail
  imagejpeg($gbr_thumb,$folder . "small_" . $nama_file_unik);
  
  // Hapus gambar di memori komputer
  imagedestroy($gbr_asli);
  imagedestroy($gbr_thumb);
}
function UploadFotox($fl, $folder, $ukuran){
  // File gambar yang di upload
  $file_upload = $folder . $fl;

  // Simpan gambar dalam ukuran aslinya
  move_uploaded_file($_FILES["file"]["tmp_name"], $file_upload);

  // Identitas file asli
  $gbr_asli = imagecreatefromjpeg($file_upload);
  $lebar    = imageSX($gbr_asli);
  $tinggi 	= imageSY($gbr_asli);

  // Simpan dalam versi thumbnail
  $thumb_lebar  = $ukuran;
  $thumb_tinggi = 180;

  // Proses perubahan dimensi ukuran
  $gbr_thumb = imagecreatetruecolor($thumb_lebar,$thumb_tinggi);
  imagecopyresampled($gbr_thumb, $gbr_asli, 0, 0, 0, 0, $thumb_lebar, $thumb_tinggi, $lebar, $tinggi);

  // Simpan gambar thumbnail
  imagejpeg($gbr_thumb,$folder . "small_" . $fl);
  
  // Hapus gambar di memori komputer
  imagedestroy($gbr_asli);
  imagedestroy($gbr_thumb);
}
?>

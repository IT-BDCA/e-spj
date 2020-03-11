<?php 
	$lkf = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars(trim($_GET[judul])))));
	$qfas = mysqli_query($koneksi, "select * from tbl_kelurahan where lk_kelurahan = '$lkf'");
	$cfas = mysqli_num_rows($qfas);
	if($cfas > 0){
		$fas = mysqli_fetch_assoc($qfas);
?>
<div class="container home-intro-content">
    <div class="row">
		<div class="col-md-12">
			
			<h3 class="page-header">Kelurahan - <?php echo $fas['nm_kelurahan']; ?></h3>
			
		</div>
		<div class="col-md-12">
		<br />
			<table id="dataTables2" class="table table-bordered table-striped table-hover">
				<thead>
				<tr>
					<td width="5%">No</td>
					<td>Foto Fasilitas</td>
					<td>Jenis Fasilitas</td>
					<td>Nama Fasilitas</td>
					<td>Latitude</td>
					<td>Longitude</td>
				</tr>
				</thead>
				<tbody>
				<?php
					$no = 1;
					$qfal = mysqli_query($koneksi, "select nm_jnsfasilitas, gb_fasilitas, nm_fasilitas, lo_fasilitas, la_fasilitas, lk_fasilitas from tbl_fasilitas, tbl_jnsfasilitas where tbl_fasilitas.id_jnsfasilitas = tbl_jnsfasilitas.id_jnsfasilitas and tbl_fasilitas.id_kelurahan = '$fas[id_kelurahan]'");
					$cfal = mysqli_num_rows($qfal);
					if($cfal > 0){
						while($vfal = mysqli_fetch_assoc($qfal)){
				?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><img src="lib/img/fasilitas/<?php echo $vfal['gb_fasilitas']; ?>" width="120"></td>
					<td><?php echo $vfal['nm_jnsfasilitas']; ?></td>
					<td><?php echo $vfal['nm_fasilitas']; ?></td>
					<td><?php echo $vfal['la_fasilitas']; ?></td>
					<td><?php echo $vfal['lo_fasilitas']; ?></td>
				</tr>
						<?php $no++; } ?>
				<?php }else{ ?>
				<tr>
					<td colspan="5"><center>Data Fasilitas Tidak Tersedia</center></td>
				</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
  </div>
</div>

<?php }else{ ?>
<div class="container home-intro-content">
    <div class="row">
		<div class="col-md-12">
			<p style="text-align: justify; margin-top: 35px; margin-bottom: 20px; color: #000;">
				<center> Fasilitas tidak ada</center>
			</p>
			
		</div>
  </div>
</div>
<?php } ?>
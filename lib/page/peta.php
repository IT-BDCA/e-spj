<?php 
	$qpeta = mysqli_query($koneksi, "select * from tbl_peta order by id_peta desc limit 1");
	$cpeta = mysqli_num_rows($qpeta);
	if($cpeta > 0){
		$dpt = mysqli_fetch_assoc($qpeta);
?>
<div class="container home-intro-content">
    <div class="row">
		<div class="col-md-12">
			
			<h3 class="page-header"><?php echo $dpt['nm_peta']; ?></h3>
			
		</div>
		<div class="col-md-12">
			<?php echo html_entity_decode($dpt['isi_peta']); ?>
		</div>
     
  </div>
</div>
<?php }else{ ?>
<div class="container home-intro-content">
    <div class="row">
		<div class="col-md-12">
			<p style="text-align: justify; margin-top: 35px; margin-bottom: 20px; color: #000;">
				<center> Peta tidak ada</center>
			</p>
			
		</div>
  </div>
</div>
<?php } ?>
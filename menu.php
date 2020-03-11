	<div class="responsive_menu">
        <ul class="main_menu">
            <li><a href="index.php?page=home">Beranda</a></li>
            <li><a href="index.php?page=profil">Profil</a></li>
            <li><a href="index.php?page=peta">Peta Musi Banyuasin</a></li>
			<li><a href="#">Fasilitas Umum Dan Sosial</a>
				<ul>
					<?php 
						$mnfas = mysqli_query($koneksi, "select nm_jnsfasilitas, lk_jnsfasilitas from tbl_jnsfasilitas");
						$cfas = mysqli_num_rows($mnfas);
						if($cfas > 0){
							while($fas = mysqli_fetch_assoc($mnfas)){
					?>
						<li><a href="index.php?page=fasilitas&judul=<?php echo $fas['lk_jnsfasilitas']; ?>"><?php echo $fas['nm_jnsfasilitas']; ?></a></li>
						<?php } ?>
					<?php }else{ ?>
						<li><a href="#">Fasilitas belum tersedia</a></li>
					<?php }?>
				</ul>
            </li>
            <li><a href="#">Kelurahan/Desa</a>
				<ul>
					<?php 
						$mnfas = mysqli_query($koneksi, "select nm_kelurahan, lk_kelurahan from tbl_kelurahan");
						$cfas = mysqli_num_rows($mnfas);
						if($cfas > 0){
							while($fas = mysqli_fetch_assoc($mnfas)){
					?>
						<li><a href="index.php?page=kelurahan&judul=<?php echo $fas['lk_kelurahan']; ?>"><?php echo $fas['nm_kelurahan']; ?></a></li>
							<?php } ?>
					<?php }else{ ?>
						<li><a href="#">Kelurahan belum tersedia</a></li>
						<?php }?>
				</ul>
            </li>
            <li><a href="admin/">Login</a></li>
        </ul> <!-- /.main_menu -->
	</div> <!-- /.responsive_menu -->
	
	<header class="site-header clearfix">
		<div class="container">


			<div class="row">
				<div class="col-md-12">
					<div class="pull-left logo">
							<img src="images/muba.png" width="50px" alt="Medigo by templatemo"> 

					</div>	<!-- /.logo -->

					<div class="main-navigation pull-right">

						<nav class="main-nav visible-md visible-lg">
							<ul class="sf-menu">
								<li><a href="index.php?page=home">Beranda</a></li>
								<li><a href="index.php?page=profil">Profil</a></li>
								<li><a href="index.php?page=peta">Peta Musi Banyuasin</a></li>
								<li><a href="#">Fasilitas Umum Dan Sosial</a>
									<ul>
										<?php 
											$mnfas = mysqli_query($koneksi, "select nm_jnsfasilitas, lk_jnsfasilitas from tbl_jnsfasilitas");
											$cfas = mysqli_num_rows($mnfas);
											if($cfas > 0){
												while($fas = mysqli_fetch_assoc($mnfas)){
										?>
											<li><a href="index.php?page=fasilitas&judul=<?php echo $fas['lk_jnsfasilitas']; ?>"><?php echo $fas['nm_jnsfasilitas']; ?></a></li>
											<?php } ?>
										<?php }else{ ?>
											<li><a href="#">Fasilitas belum tersedia</a></li>
										<?php }?>
									</ul>
								</li>
					            <li><a href="#">Kelurahan/Desa</a>
									<ul>
										<?php 
											$mnfas = mysqli_query($koneksi, "select nm_kelurahan, lk_kelurahan from tbl_kelurahan");
											$cfas = mysqli_num_rows($mnfas);
											if($cfas > 0){
												while($fas = mysqli_fetch_assoc($mnfas)){
										?>
											<li><a href="index.php?page=kelurahan&judul=<?php echo $fas['lk_kelurahan']; ?>"><?php echo $fas['nm_kelurahan']; ?></a></li>
											<?php } ?>
										<?php }else{ ?>
											<li><a href="#">Kelurahan belum tersedia</a></li>
										<?php }?>
									</ul>
								</li>
            <li><a href="admin/">Login</a></li>
							</ul> <!-- /.sf-menu -->
						</nav> <!-- /.main-nav -->

						<!-- This one in here is responsive menu for tablet and mobiles -->
					    <div class="responsive-navigation visible-sm visible-xs">
					        <a href="#nogo" class="menu-toggle-btn">
					            <i class="fa fa-bars"></i>
					        </a>
					    </div> <!-- /responsive_navigation -->
					</div> <!-- /.main-navigation -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</header> <!-- /.site-header -->


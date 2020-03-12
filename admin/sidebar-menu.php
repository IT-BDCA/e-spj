<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>	<!-- sidebar menu start -->

				<!-- menu sistem -->
				<li><a href="main.php?page=home"><i class="fa fa-home"></i> Home </a></li>
				<li class="active">
					<a href="#">
						<i class="fa fa-circle-o text-red"></i> Manajemen Sistem
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
					<?php
						// fungsi untuk pengecekan menu aktif
						// jika menu kategori dipilih, menu kategori aktif
						if ($_GET["page"]=="jnsfasilitas") {
					?>
							<li class="active">
								<a href="main.php?page=jnsfasilitas"><i class="fa fa-list"></i> Jenis Surat </a>
							</li>
					<?php
						}
						// jika tidak, menu kategori tidak aktif
						else { ?>
							<li>
								<a href="main.php?page=jnsfasilitas"><i class="fa fa-list"></i> Jenis Surat</a>
							</li>
					<?php } ?>
					<?php
						// fungsi untuk pengecekan menu aktif
						// jika menu Kriminal dipilih, menu Kriminal aktif
						if ($_GET["page"]=="fasilitas") {
					?>
							<li class="active">
								<a href="main.php?page=fasilitas"><i class="fa fa-list"></i> Data Barang </a>
							</li>
					<?php
						}
						// jika tidak, menu Kriminal tidak aktif
						else { ?>
							<li>
								<a href="main.php?page=fasilitas"><i class="fa fa-list"></i> Data Barang </a>
							</li>
					<?php } ?>
					<?php
						// fungsi untuk pengecekan menu aktif
						// jika menu agenda dipilih, menu agenda aktif
						if ($_GET["page"]=="kelurahan") {
					?>
							<li class="active">
								<a href="main.php?page=kelurahan"><i class="fa fa-list"></i> Perusahaan </a>
							</li>
					<?php
						}
						// jika tidak, menu agenda tidak aktif
						else { ?>
							<li>
								<a href="main.php?page=kelurahan"><i class="fa fa-list"></i> Perusahaan </a>
							</li>
					<?php } ?>

					<?php
						// fungsi untuk pengecekan menu aktif
						// jika menu agenda dipilih, menu agenda aktif
						if ($_GET["page"]=="peta") {
					?>
							<li class="active">
								<a href="main.php?page=peta"><i class="fa fa-list"></i> Penanggung Jawab </a>
							</li>
					<?php
						}
						// jika tidak, menu agenda tidak aktif
						else { ?>
							<li>
								<a href="main.php?page=peta"><i class="fa fa-list"></i> Penanggung Jawab </a>
							</li>
					<?php } ?>

					</ul>
				</li>

				<li class="active">
					<a href="#">
						<i class="fa fa-circle-o text-red"></i> Manajemen Surat
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
							<li class="active">
								<a href="main.php?page=suratpesananbarang"><i class="fa fa-list"></i> Surat Pesanan Barang </a>
							</li>
							<li>
								<a href="main.php?page=bastpb"><i class="fa fa-list"></i>Berita Acara Serah Terima Dan Penerimaan Barang  </a>
							</li>
							<li>
								<a href="main.php?page=bappb"><i class="fa fa-list"></i> Berita Acara Pemeriksaan Dan Penerima Barang </a>
							</li>
							<li>
								<a href="main.php?page=peta"><i class="fa fa-list"></i> Berita Acara Pembayaran </a>
							</li>
              <li>
                <a href="main.php?page=kwitansi"> <i class="fa fa-list"></i> kwitansi </a>
              </li>
					</ul>
				</li>

				<li class="active">
					<a href="#">
						<i class="fa fa-circle-o text-red"></i> Manajemen Pengguna
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">

					<?php
						// fungsi untuk pengecekan menu aktif
						// jika menu user dipilih, menu user aktif
						if ($_GET["page"]=="users") {
					?>
							<li class="active">
								<a href="main.php?page=users"><i class="fa fa-list"></i> Users </a>
							</li>
					<?php
						}
						// jika tidak, menu user tidak aktif
						else { ?>
							<li>
								<a href="main.php?page=users"><i class="fa fa-list"></i> Users </a>
							</li>
					<?php } ?>

					</ul>
				</li>




	 </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

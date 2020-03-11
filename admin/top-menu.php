<!-- Native V.0.1 BMandiri
 ************************************************
 * Developer    : Lian A.k.a ********************
 * Company      : Bahtera Mandiri ***************
 * Release Date : 9 Februari 2016 ***************
 ************************************************
 -->
<li class="dropdown user user-menu">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
  <!-- User image -->

    <i class="fa fa-user-circle fa-fw"></i>

    <span class="hidden-xs"><?php print $_SESSION['username']; ?> <i style="margin-left:5px" class="fa fa-angle-down"></i></span>
  </a>
  <ul class="dropdown-menu">
    <!-- User image -->
    <li class="user-header">

      <p>Untuk kembali kehalaman utama silakan pilih "website", untuk keluar dari sistem silakan logout.</p>
    </li>
    
    <!-- Menu Footer-->
    <li class="user-footer">
      <div class="pull-left">
        <a href="../index.php" class="btn btn-default btn-flat">Website</a>
      </div>

      <div class="pull-right">
		<button type="button" class="btn btn-default btn-flat" data-target="#logout" data-toggle="modal">
			Logout
		</button>
      </div>
    </li>
  </ul>
</li>
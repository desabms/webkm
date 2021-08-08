
    <nav class="navbar-1-3 navbar navbar-expand-lg navbar-dark p-4 px-md-4 mb-3 bg-purple">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="<?php echo base_url();?>assets/images/Asset-13.svg" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <!-- <li class="nav-item">
                  <a class="nav-link px-md-4 " aria-current="page" href="<?php echo base_url('content/LaporanController');?>">Laporan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link px-md-4" href="<?php echo base_url('content/UmkmController')?>">UMKM</a>
                </li> -->
								<li class="dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										UMKM
									</a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
										<a class="dropdown-item" href="<?php echo base_url('content/PelakuController')?>">Data Pemilik</a>
										<a class="dropdown-item" href="<?php echo base_url('content/UmkmController');?>">Data UMKM</a>
									</div>
								</li>
								<li class="dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Laporan
									</a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
										<a class="dropdown-item" href="<?php echo base_url('content/LaporanController');?>">Lapor</a>
										<a class="dropdown-item" href="<?php echo base_url('content/HistoriController')?>">Histori</a>
									</div>
								</li>
								<li class="dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Pengajuan Bantuan
									</a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
										<a class="dropdown-item" href="<?php echo base_url('content/pengajuanController');?>">Pengajuan</a>
										<a class="dropdown-item" href="<?php echo base_url('content/HistoriController/pengajuan')?>">Histori</a>
									</div>
								</li>
                <li class="nav-item">
                  <a class="nav-link px-md-4" href="#">Tentang Kami</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link px-md-4" href="<?php echo base_url('Contact')?>">Kontak</a>
                </li>
          </ul>
          <div class="d-flex">
            <!-- <a class="btn btn-get-started btn-get-started-yellow" href="#">Get Started</a> -->
						<ul>
                <li class=" dropdown">
                  <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="<?= base_url() ?>/assets/images/avatar-1.png" class="rounded-circle mr-1" style="width: 60px; height: 60px">
                    	<div class="d-sm-none d-lg-inline-block"><?= $this->fungsi->user_login()->username;?></div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">Profile</a>
                    <a href="#" class="dropdown-item">Settings</a>
                  <div class="dropdown-divider"></div>
                    <a href="<?php echo base_url('auth/Login/logout'); ?>"class="dropdown-item">Logout</a>
                  </div>
                </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </section> 

<section class="h-70 w-70" style="box-sizing: border-box; background-color: #391484">
<div class="container-xxl mx-auto p-0  position-relative header-2-3" style="font-family: 'Poppins', sans-serif;">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a href="#">
          <img src="<?php echo base_url();?>assets/images/logoss.png" alt="Dapodes">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
          aria-labelledby="targetModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content border-0" style="background-color: #141432;">
              <div class="modal-header border-0" style="padding:	2rem; padding-bottom: 0;">
                <a class="modal-title" id="targetModalLabel">
                   <img src="<?php echo base_url();?>assets/images/logoss.png" alt="Dapodes">
                </a>
                <button type="button" class="close btn-close text-white" data-bs-dismiss="modal" aria-label="Close">
                </button>
              </div>
              <div class="modal-body" style="padding:	2rem; padding-top: 0; padding-bottom: 0;">
                <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                    <a class="nav-link" href="#" style="color: #E7E7E8;">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Tentang Kami</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
                  </li>
                </ul>
              </div>
              <div class="modal-footer border-0 gap-3" style="padding:	2rem; padding-top: 0.75rem">
                <a href="https://www.google.com"class="btn btn-default btn-no-fill daf">Daftar</a>
                <a href=""class="btn btn-fill border-0 text-white">Masuk</a>
              </div>
            </div>
          </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url();?>">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>kontak">Kontak</a>
            </li>
          </ul>
          <div class="gap-3">
            <a class="btn btn-default btn-no-fill daf" href="auth/Registrasi">Daftar</a>
            <a class="btn btn-fill text-white border-0" href="<?php echo base_url('auth/Login');?>">Masuk</a>
          </div>
        </div>
      </nav>

     
    </div>
      </section>
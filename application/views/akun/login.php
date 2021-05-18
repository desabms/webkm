<!-- Navbar-->
<div class="container">
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container">
            <!-- Navbar Brand -->
            <a href="#" class="navbar-brand">
                <img src="<?php echo base_url();?>assets/images/title.png" alt="logo" width="150">
            </a>
        </div>
    </nav>
</header>


<div class="container">
    <div class="row py-5 mt-4 align-items-center">
        <!-- For Demo Purpose -->
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0 text-center">
            <img src="https://res.cloudinary.com/mhmd/image/upload/v1569543678/form_d9sh6m.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
            <h1>Login</h1>
            <p class="font-italic text-muted mb-0">Ayo Login Sekarang!.</p>
            <!-- <p class="font-italic text-muted">Snippet By <a href="https://bootstrapious.com" class="text-muted">
                <u>Bootstrapious</u></a>
            </p> -->
        </div>

        <!-- Registeration Form -->
        <div class="col-md-7 col-lg-5 ml-5">
            <form action="#">
                <div class="row">

                    <!-- Email Address -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Password -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <a href="#" class="btn btn-primary btn-block py-2">
                            <span class="font-weight-bold">Login</span>
                        </a>
                    </div>
   
                    <!-- Already Registered -->
                    <div class="text-center w-100">
                        <p class="text-muted font-weight-bold">I Don't Have Account? <a href="#" class="text-primary ml-2">Register</a></p>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
</div>

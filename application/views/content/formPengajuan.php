<div class="container py-5 bg-light">
    <div class="row">
        <div class="mx-auto col-md-8">
            <!-- form user info -->
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <?php echo validation_errors(); ?>
                <div class="card-header bg-primary text-white">
                    <?= $this->session->flashdata('errors') ?>
                    <h4 class="mb-0 text-center">Pengajuan Bantuan</h4>
                </div>
                <div class="card-body">

                    <form class="form needs-validation" action="<?php base_url(); ?>PengajuanController/add_pengajuan" method="POST">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label rounded form-control-label font-monospace">NIK</label>
                            <div class="col-lg-9">
                               <input class="form-control rounded" type="number" name="nik" placeholder="16 Digit NIK Anda" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nama Pemilik</label>
                            <div class="col-lg-9">
                                <input class="form-control rounded" type="text" name="nama" placeholder="Nama Lengkap" required="">
                            </div>
                        </div>
						<div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">No.Telepon</label>
                            <div class="col-lg-9">
                                <input type="text" name="tlpn" class="form-control rounded" placeholder="0821xxxxxxxx" required="">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Jenis Bantuan</label>
                            <div class="col-lg-9">
                                <select class="custom-select" name="jns" id="inputGroupSelect01" required="">
                                    <option value="">--Pilih Salah Satu--</option>
                                    <option value="Modal">Modal</option>
                                    <option value="Barang">Barang</option>
                                    <option value="Pelatihan">Pelatihan</option>
                                </select>
                            </div>
                        </div>
						<div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Keterangan</label>
                            <div class="col-lg-9">
                                <textarea required="" class="form-control rounded" name="keterangan" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        
                        <!-- <div class="form-group row"> -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <!-- <button class="btn btn-primary me-md-2" type="button">Button</button> -->
                            <button class="btn btn-primary" type="submit" value="Daftar">Kirim</button>
                        </div>
                        
                    </form>
                </div>
            </div>
            <!-- /form user info -->
        </div>
    </div>
</div>

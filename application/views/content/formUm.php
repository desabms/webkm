            <?php
                $errors = $this->session->flashdata('errors');
                if(!empty($errors)){
                ?>
                <div class="row">
                    <div class="col-md-12">
                    <div class="alert alert-danger text-center">
                        <?php foreach($errors as $key=>$error){ ?>
                        <?php echo "$error<br>"; ?>
                        <?php } ?>
                    </div>
                    </div>
                </div>
            <?php } ?>


<div class="container py-5 bg-light">
    <div class="row">
        <div class="mx-auto col-md-8">
            <!-- form user info -->
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <?php echo validation_errors(); ?>
                <div class="card-header bg-primary text-white">
                    <?= $this->session->flashdata('item') ?>
                    <h4 class="mb-0 text-center">Tambah Data UMKM</h4>
                </div>
                <div class="card-body">
                    <form class="form needs-validation" action="<?php base_url(); ?>proses_addUMKM" method="POST">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label rounded form-control-label font-monospace">NIK</label>
                            <div class="col-lg-9">
                               <input class="form-control rounded" type="number" name="nik" placeholder="16 Digit NIK Anda" required="">
                                <?php echo $this->session->flashdata('nik'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nama Usaha</label>
                            <div class="col-lg-9">
                                <input class="form-control rounded" type="text" name="nama" placeholder="Nama Usaha" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Bidang Usaha</label>
                            <div class="col-lg-9">
                                <select class="custom-select" name="bu" id="inputGroupSelect01" required="">
                                    <option value="">--Pilih Salah Satu--</option>
                                    <?php foreach ($bu as $row) : ?>
                                        <option value="<?php echo $row->kd_bidangusaha; ?>"><?php echo $row->nama_bidangusaha; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Tipe Usaha</label>
                            <div class="col-lg-9">
                                <select class="custom-select" name="tu" id="inputGroupSelect01" required="">
                                    <option value="">--Pilih Salah Satu--</option>
                                    <?php foreach ($tu as $row) : ?>
                                        <option value="<?php echo $row->kd_tipeusaha; ?>"><?php echo $row->nama_tipeusaha; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Modal Awal</label>
                            <div class="col-lg-9">
                                <input type="number" class="form-control rounded" name="modal" placeholder="Modal awal" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Alamat</label>
                            <div class="col-lg-9">
                                <textarea required="" class="form-control rounded" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">No.Telepon</label>
                            <div class="col-lg-9">
                                <input type="text" name="tlpn" class="form-control rounded" placeholder="0821xxxxxxxx" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Jumlah Karyawan</label>
                            <div class="col-lg-9">
                                <input type="number" name="jmlh" class="form-control rounded" placeholder="Jumlah Karyawan" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Tanggal Lapor</label>
                            <div class="col-lg-9">
                                <input class="form-control rounded" type="date" name="tgllapor" placeholder="hh/bb/tt" required="">
                            </div>
                        </div>

                        <!-- <div class="form-group row"> -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <!-- <button class="btn btn-primary me-md-2" type="button">Button</button> -->
                            <button class="btn btn-primary" type="submit" value="Daftar">Tambah Data</button>
                        </div> 
                    </form>
                </div>
            </div>
            <!-- /form user info -->
        </div>
    </div>
</div>



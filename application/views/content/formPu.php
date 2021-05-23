<div class="container py-5 bg-light">
    <div class="row">
        <div class="mx-auto col-md-8">
            <!-- form user info -->
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <?php echo validation_errors(); ?>
                <div class="card-header bg-primary text-white">
                    <?= $this->session->flashdata('item') ?>
                    <h4 class="mb-0 text-center">Tambah Data Pemilik</h4>
                </div>
                <div class="card-body">

                    <form class="form needs-validation" action="<?php base_url(); ?>Pendaftaran/Proses_daftar" method="POST">
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
                            <label class="col-lg-3 col-form-label form-control-label">Jenis Kelamin</label>
                            <div class="col-lg-9">
                                <select class="custom-select" name="jk" id="inputGroupSelect01" required="">
                                    <option value"">--Pilih Salah Satu--</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Agama</label>
                            <div class="col-lg-9">
                                <select class="custom-select" name="agama" id="inputGroupSelect01" required="">
                                    <option value="">--Pilih Salah Satu--</option>
                                    <?php foreach ($dagama as $row) : ?>
                                        <option value="<?php echo $row->kdAgama; ?>"><?php echo $row->nAgama; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Tempat Lahir</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control rounded" name="tlahir" placeholder="Tempat Lahir" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Tanggal Lahir</label>
                            <div class="col-lg-9">
                                <input class="form-control rounded" type="date" name="tgllahir" placeholder="hh/bb/tt" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Alamat</label>
                            <div class="col-lg-9">
                                <textarea required="" class="form-control rounded" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Status</label>
                            <div class="col-lg-9">
                                <select class="custom-select" name="stts" id="inputGroupSelect01" required="">
                                    <option value="">--Pilih Salah Satu--</option>
                                    <option value="m">Menikah</option>
                                    <option value="c">Cerai</option>
                                    <option value="l">Lajang</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Pendidikan Terakhir</label>
                            <div class="col-lg-9">
                                <select class="custom-select" name="pdkn" id="inputGroupSelect01" required="">
                                    <option value="">--Pilih Salah Satu--</option>
                                    <option value="sd">SD</option>
                                    <option value="smp">SMP</option>
                                    <option value="sma">SMA</option>
                                    <option value="d">D3/D4</option>
                                    <option value="s1">S1</option>
                                    <option value="s2">S2</option>
                                    <option value="s3">S3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">No.Telepon</label>
                            <div class="col-lg-9">
                                <input type="text" name="tlpn" class="form-control rounded" placeholder="0821xxxxxxxx" required="">
                            </div>
                        </div>
                        <!-- <div class="form-group row"> -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <!-- <button class="btn btn-primary me-md-2" type="button">Button</button> -->
                            <button class="btn btn-primary" type="submit" value="Daftar">Daftar</button>
                        </div>
                        
                    </form>
                </div>
            </div>
            <!-- /form user info -->
        </div>
    </div>
</div>
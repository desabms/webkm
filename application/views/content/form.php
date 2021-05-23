<div class="container py-5 bg-light">
    <div class="row">
        <div class="mx-auto col-md-8">
            <!-- form user info -->
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <?php echo validation_errors(); ?>
                <div class="card-header bg-primary text-white">
                    <?= $this->session->flashdata('item') ?>
                    <h4 class="mb-0 text-center">DATA LAPORAN</h4>
                </div>
                <div class="card-body">

                    <form class="form needs-validation" action="<?php base_url(); ?>Pendaftaran/Proses_daftar" method="POST">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label rounded form-control-label font-monospace">Daftar TK/SD</label>
                            <div class="col-lg-9">
                                <input type="number" class="form-control rounded" name="nik" placeholder="16 Digit NIK Anda" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nama Usaha</label>
                            <div class="col-lg-9">
                                <input class="form-control rounded" type="text" name="nama" placeholder="Nama Usaha Anda" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Bidang Usaha</label>
                            <div class="col-lg-9">
                                <select class="custom-select" name="Bu" id="inputGroupSelect01" required="">
                                    <option value"">--Pilih Salah Satu--</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Tipe Usaha</label>
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
                            <label class="col-lg-3 col-form-label form-control-label">Tanggal Lapor</label>
                            <div class="col-lg-9">
                                <input class="form-control rounded" type="date" name="tgllahir" placeholder="hh/bb/tt" required="">
                            </div>
                        </div>
                        
                        
                        <!-- </div> -->
                    </form>
                </div>
            </div>
            <!-- /form user info -->
        </div>
    </div>
</div>
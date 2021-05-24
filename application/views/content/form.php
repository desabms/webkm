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
                    <h4 class="mb-0 text-center">DATA LAPORAN</h4>
                </div>
                <div class="card-body">

                    <form class="form needs-validation" action="<?php base_url(); ?>LaporanController/proses_laporan" method="POST">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label rounded form-control-label font-monospace">NIK</label>
                            <div class="col-lg-9">
                                <input id="nik" type="number" class="form-control rounded" name="nik" placeholder="16 Digit NIK Anda" required="">
                                <?php echo $this->session->flashdata('nik'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nama Usaha</label>
                            <div class="col-lg-9">
                                <!-- <input class="form-control rounded" type="text" name="nama" placeholder="Nama Usaha Anda" required=""> -->
                                <select class="custom-select" name="nama" id="inputGroupSelect01" required="">
                                    <option value"">--Pilih Salah Satu--</option>
                                    <?php foreach ($um as $row) : ?>
                                        <option value="<?php echo $row->id; ?>"><?php echo $row->nama_usaha; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php echo $this->session->flashdata('nama'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Bidang Usaha</label>
                            <div class="col-lg-9">
                                <select class="custom-select" name="bu" id="inputGroupSelect01" required="">
                                    <option value"">--Pilih Salah Satu--</option>
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
                            <label class="col-lg-3 col-form-label form-control-label">Tanggal Lapor</label>
                            <div class="col-lg-9">
                                <input class="form-control rounded" type="date" name="tgllapor" placeholder="hh/bb/tt" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label rounded form-control-label font-monospace">Pendapatan</label>
                            <div class="col-lg-9">
                                <input id="nik" type="number" class="form-control rounded" name="pendapatan" placeholder="Pendapatan" required="">
                                <!-- <?php echo $this->session->flashdata('nik'); ?> -->
                            </div>
                        </div>
                        <div class="form-group col-lg-5 mx-auto mb-0">
                            <Button type="submit" class="btn btn-primary btn-block py-2">
                                <span class="font-weight-bold">lapor</span>
                            </Button>
                    </div>
                        
                        <!-- </div> -->
                    </form>
                </div>
            </div>
            <!-- /form user info -->
        </div>
    </div>
</div>
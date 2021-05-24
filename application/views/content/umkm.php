<div class="container py-5 bg-light">
    <a href="<?php echo base_url(); ?>content/UmkmController/get_form" class="btn btn-primary"><i class="fa fa-plus"></i> Add Data</a>
    <div class="row">
        <?php foreach ($umkm as $row):?>
        <div class="col-sm-6 mt-4">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row->nama_usaha ?></h5>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                            <th style="width:158px;">Nama Pemilik</th>
                            <td ><?php echo $row->nama ?></span></td>
                            </tr>
                            <tr>
                            <th style="width:58px;">nik</th>
                            <td ><?php echo $row->nik ?></span></td>
                            </tr>
                            <tr>
                            <th style="width:58px;">Bidang Usaha</th>
                            <td ><?php echo $row->bidangusaha ?></span></td>
                            </tr>
                            
                            <th style="width:58px;">Tanggal Lapor</th>
                            <td ><?php echo date('d-m-Y', strtotime($row->tgl_lapor))?></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a href="#" class="btn btn-primary">Detail</a>
            </div>
            </div>
        </div>
        <?php endforeach; ?>
        <!-- <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div> -->
    </div>
</div>

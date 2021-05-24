<div class="container py-5 bg-light">
    <div class="row">
        <?php foreach ($laporan as $row):?>
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
                            <th style="width:58px;">Bidang usaha</th>
                            <td ><?php echo $row->bidang_usaha ?></span></td>
                            </tr>
                            <tr>
                            <th style="width:58px;">Pendapatan</th>
                            <td ><?php echo  number_format($row->pendapatan, 2, ",",".")?></span></td>
                            </tr>
                            <tr>
                            <th style="width:58px;">Tanggal Lapor</th>
                            <td ><?php echo date('d-m-Y', strtotime($row->terlapor))?></span></td>
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

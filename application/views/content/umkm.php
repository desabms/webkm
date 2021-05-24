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
                            <td ><?php echo $row->nama_bidangusaha ?></span></td>
                            </tr>
                            
                            <th style="width:58px;">Tanggal Lapor</th>
                            <td ><?php echo date('d-m-Y', strtotime($row->tgl_lapor))?></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal-detail<?php echo $row->id ?>">Detail</a>
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


<!-- Modal UMKM -->

<!-- Modal UMKM -->


<?php foreach ($umkm as $key => $v) : ?>
<div class="modal fade" id="modal-detail<?php echo $v->id ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Data UMKM</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body table-responsive">
        <table class="table table-bordered margin">
          <tbody>
            <tr>
              <th>Nama</th>
              <td><span id="nama"><?php echo $v->nama ?></span></td>
            </tr>
            <tr>
              <th>NIK</th>
              <td><span id="nama"><?php echo $v->nik ?></span></td>
            </tr>
            <tr>
              <th>Jenis Usaha</th>
              <td><span id="nama"><?php echo $v->nama_bidangusaha ?></span></td>
            </tr>
            <tr>
              <th>Tipe Usaha</th>
              <td><span id="nama"><?php echo $v->nama_tipeusaha ?></span></td>
            </tr>
            <tr>
              <th>Modal Awal</th>
              <td><span id="nama"><?php echo $v->modal_awal ?></span></td>
            </tr>
            <tr>
              <th>Alamat Usaha</th>
              <td><span id="nama"><?php echo $v->alamat_usaha ?></span></td>
            </tr>
            <tr>
              <th>No Usaha</th>
              <td><span id="nama"><?php echo $v->handphone ?></span></td>
            </tr>
            <tr>
              <th>email</th>
              <td><span id="nama"><?php echo $v->email ?></span></td>
            </tr>
            <tr>
              <th>No NPWP</th>
              <td><span id="nama"><?php echo $v->no_npwp ?></span></td>
            </tr>
            <tr>
              <th>Tanggal Lapor</th>
              <td><span id="nama"><?php echo $v->tgl_lapor ?></span></td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>
</div>
<?php endforeach; ?>
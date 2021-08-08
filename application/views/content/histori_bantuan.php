<div class="container py-5 bg-light">
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Pengajuan Bantuan</h1>
           
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            
                            <div class="card-header-form">
                              <!-- <a href="" class="btn btn-primary" data-toggle="modal" data-target="#addUMKM" ><i class="fas fa-plus"></i> Add Data</a> -->
                            </div>
                        </div>
                        <div class="card-body">


                              <div class="table-responsive mt-3">
                                <table class="table table-striped" id="table-1">
                                  <thead>
                                    <tr>
                                      <th class="text-center">No</th>
                                      <th class="text-center">NIK</th>
                                      <th class="text-center">Nama</th>
                                      <th class="text-center">Nomor telephone</th>
                                      <!-- <th class="text-center">email</th> -->
                                      <!-- <th class="text-center">Jenis Bantuan</th> -->
                                      <!-- <th class="text-center">Keterangan</th> -->
                                      <th class="text-center">Tanggal pengajuan</th>
                                      <th class="text-center">Status</th>
                                      <!-- <th class="text-center">action</th> -->
                                      <!-- <th>Action</th> -->
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($bantu as $data):?>
                                    <tr>
										<td><?php echo $no++?></td>
                                      <td><?php echo $data->nik?></td>
                                      <td><?php echo $data->nama?></td>
                                      <td><?php echo $data->no_handphone?></td>
                                      <!-- <td><?php echo $data->email?></td> -->
                                      <!-- <td><?php echo $data->type_pengajuan?></td> -->
                                      <!-- <td><?php echo $data->deskripsi?></td> -->
                                      <td><?php echo date('d-m-Y', strtotime($data->create_at)) ?></td>
                                      <td>
											<?php ?>
    											<?php if ($data->validasi == 'proses') { ?>
    												<span class="badge badge-warning">Proses</span>
    											<?php	} elseif ($data->validasi == 'ditolak') { ?>
    												<span class="badge badge-danger">Di Tolak</span>
    											<?php } elseif ($data->validasi == 'diterima') { ?>
    												<span class="badge badge-success">Di Terima</span>
    											<?php } ?>
										</td>
										<!-- <td>
											<a href="<?php echo base_url('admin/PengajuanController/diTerima/'); ?><?= $data->idpeng?>"class="btn btn-primary btn-sm" ><span class='fa fa-check-circle'></span> Terima</a>
    										<a href="<?php echo base_url('admin/PengajuanController/diTolak/'); ?><?= $data->idpeng?>" class="btn btn-danger btn-sm" ><span class='fa fa-times-circle'></span> Tolak</a>
										</td> -->
                                    </tr>
                                  <?php endforeach ?>
                                </tbody>
                                <tfooter>
                                 
                                </tfooter>
                              </table>
							  <p><i>** Semua pengajuan yang diterima akan ditindak lanjuti dan akan dihubungi via telephone</i></p>
                          </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- </section> -->
</div>

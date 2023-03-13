            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <a class="btn btn-primary text-white" href="<?= base_url('Admin/addBakalCalonPanlih')?>">Tambah Data</a>
                </div>
                <?php echo $this->session->flashdata('pesan'); ?>
	 	              <?php if(validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                      <?php echo validation_errors(); ?>
                    </div>
                  <?php endif?>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Diskripsi</th>
                        <th>Alamat</th>
                        <th>Visi</th>
                        <th>Misi</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <?php $no=1; foreach ($calonPanlih as $key => $value) { ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td>
                          <img src="<?= base_url('asset/data/foto/calonPanlih/'. $value->fotoCalon) ?>" width="100px">
                        </td>
                        <td><?= $value->namaCalon;?></td>
                        <td><?= $value->diskripsiCalon;?></td>
                        <td><?= $value->alamatCalon;?></td>
                        <td><?= $value->visiCalon;?></td>
                        <td><?= $value->misiCalon;?></td>
                        <td>
                          <a href="<?= base_url('Admin/editBakalCalon/'.$value->id)?>" class="btn btn-secondary" title="Edit"><i class="fas fa-edit"></i></a>
                          <a href="<?= base_url('Admin/viewBakalCalon/'.$value->id)?>" class="btn btn-primary" title="Lihat" ><i class="fas fa-eye"></i></a>
                          <a href="#" data-toggle="modal" data-target="#delete<?= $value->id ?>" class="btn btn-danger"title="Hapus" ><i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                      <?php }?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

        <!-- Barang Hapus Modal-->
        <?php $i=0; foreach($calonPanlih as $value) :  $i++;?>
        <div class="modal fade" id="delete<?php echo $value->id;?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h6 class="modal-title">Hapus data : "<?php echo $value->namaCalon;?>" </h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Pilih "Hapus" dibawah untuk menghapus data :
                            <b><?php echo $value->namaCalon;?></b>.
                        </p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i
                                class="fas fa-times"></i>&ensp;Close</button>
                        <a class="btn btn-danger btn-sm"
                            href="<?= base_url('Admin/deleteBakalCalon/' .$value->id) ?>"><i
                                class="fas fa-trash"></i>&ensp;Hapus</a>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <?php endforeach; ?>
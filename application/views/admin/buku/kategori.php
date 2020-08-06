        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Category</h1>
          <?php echo $this->session->flashdata('pesan'); ?>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Kategori</h6>
            </div>
            <div class="card-body">
              <a href="<?= base_url("kategori/add") ?>" class="btn btn-success mb-3"><i class="fa fa-plus"></i> New Category</a>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="5%">#</th>
                      <th>Nama Kategori</th>
                      <?php if ($this->session->userdata('level') == 1) { ?>
                      <th width="15%">Action</th>
                      <?php }?>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      foreach($row->result() as $data) { ?>
                    <tr>
                 
                      <td><?= $no++; ?>.</td>
                      <td><?= $data->nama_kategori; ?></td>
                      <?php if ($this->session->userdata('level') == 1) { ?>
                      <td class="text-center">
                        <a href="<?= site_url('kategori/edit/'.$data->kd_kategori)?>"><button class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-pen"></i></button></a>
                        <a href="#modalDelete" onclick="$('#modalDelete #formDelete').attr('action', '<?=site_url('kategori/del/'.$data->kd_kategori)?>')" data-toggle="modal"><button class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></button></a>
                      </td>
                    </tr>
                    <?php } ?>
                    <?php } ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


      <!-- Modal -->
      <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Yakin untuk menghapus data ini?
            </div>
            <div class="modal-footer">
            <form id="formDelete" method="post" action="">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
            </div>
          </div>
        </div>
      </div>
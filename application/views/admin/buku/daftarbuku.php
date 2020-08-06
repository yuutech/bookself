        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">List Book</h1>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Buku</h6>
            </div>
            <div class="card-body">
              <a href="<?= base_url("listbook/add") ?>" class="btn btn-success mb-3"><i class="fa fa-plus"></i> New Book</a>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th width="50%">Judul Buku</th>
                      <th width="20%">Kategori</th>
                      <th>Halaman</th>
                      <th>Jumlah</th>
                      <?php if ($this->session->userdata('level') == 1) { ?>
                      <th width="20%">Action</th>
                      <?php }?>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php $no=1;?>
                    <?php foreach ($buku as $bk) : ?>
                      <td><?= $no++?></td>
                      <td><?= $bk->judul?></td>
                      <td><?= $bk->nama_kategori?></td>
                      <td><?= $bk->halaman?></td>
                      <td><?= $bk->jumlah?></td>
                      <?php if ($this->session->userdata('level') == 1) { ?>
                      <td class="text-center">
                        <button class="btn btn-info btn-sm" title="Detail"><i class="fa fa-list"></i></button>
                        <button class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-pen"></i></button>
                        <button class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></button>
                      </td>
                      <?php }?>
                      </tr>
                    <?php endforeach; ?>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


  


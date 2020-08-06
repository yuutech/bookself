        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">List Book Out</h1>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Peminjaman</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Pemesan</th>
                      <th>Tanggal Pinjam</th>
                      <th>Tanggal Kembali</th>
                      <th>Lama Pinjam</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php $no=1;?>
                    <?php foreach ($invoice as $inv) : ?>
                      <td width="5%"><?=$no++?></td>
                      <td><?=$inv->name?></td>
                      <td><?=$inv->tgl_pinjam?></td>
                      <td><?=$inv->tgl_kembali?></td>
                      <td><?=$inv->lama_pinjam?></td>
                      <td width="5%">
                        <?= anchor('invoice/detail/'.$inv->kd_pinjam, '<button class="btn btn-success btn-sm"><i class="fa fa-list"></i></button>')?>                      
                      </td>
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
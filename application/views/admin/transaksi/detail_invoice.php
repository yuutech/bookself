        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="row">
            <div class="col-md-8">
                <h1 class="h3 mb-4 text-gray-800">Detail Invoice</h1>
            </div>
            <div class="col-md-4">
                <a href="<?= base_url("transaksi/dipinjam")?>" type="submit" class="btn btn-danger float-right btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
          </div>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Membeer : <?= $invoice->name ?></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Buku</th>
                      <th>Jumlah Dipinjam</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php $no=1;?>
                    <?php foreach ($pesanan as $pinjam) : ?>
                      <td width="5%"><?=$no++?></td>
                      <td><?=$pinjam->judul?></td>
                      <td width="25%"><?=$pinjam->qty?></td>
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
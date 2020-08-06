        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">List Admin</h1>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Admin</h6>
            </div>
            <div class="card-body">
              <a href="<?= base_url("listbook/add") ?>" class="btn btn-success mb-3"><i class="fa fa-plus"></i> New Admin</a>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Username</th>
                      <th width="50%">Nama</th>
                      <th width="50%">Alamat</th>
                      <th >Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php $no=1;?>
                    <?php foreach ($user as $usr) : ?>
                      <td><?= $no++?></td>
                      <td><?= $usr->username?></td>
                      <td><?= $usr->name?></td>
                      <td><?= $usr->address?></td>
                      <td class="text-center">
                        <button class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-pen"></i></button>
                        <button class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></button>
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


  


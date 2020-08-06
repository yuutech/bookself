        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="row">
            <div class="col-md-8">
                <h1 class="h3 mb-4 text-gray-800">Add New Category</h1>
            </div>
            <div class="col-md-4">
                <a href="<?= base_url("kategori/")?>" type="submit" class="btn btn-danger float-right btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
          </div>

          <div class="card shadow mb-4 col-md-12">
            <div class="card-body">
              
              <form action="<?= base_url("kategori/process")?>" method="POST">
              
                        
                        <div class="form-group">
                            <label for="kategori">Nama Kategori</label>
                            <input type="hidden" name="id" value="<?= $row->kd_kategori ?>">
                            <input type="text" class="form-control" value="<?= $row->nama_kategori ?>" name="name" id="kategori">
                        </div>
                        
                        <button type="submit" name="<?=$page?>" class="btn btn-success btn-lg float-right"><i class="fa fa-paper-plane"></i> Save</button>
        
                
              </form>

            </div>
          </div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


  


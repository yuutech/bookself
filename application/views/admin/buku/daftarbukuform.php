        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="row">
            <div class="col-md-8">
                <h1 class="h3 mb-4 text-gray-800">Add New Book</h1>
            </div>
            <div class="col-md-4">
                <a href="<?= base_url("listbook/")?>" type="submit" class="btn btn-danger float-right btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
          </div>

          <div class="card shadow mb-4 col-md-12">
            <div class="card-body">
              
              <form action="<?= base_url("listbook/addproses")?>" method="POST">
              
                <div class="row">
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" name="judul" id="judul">
                            <?php echo form_error('judul','<div class="text-danger small ">','</div>')  ?>
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select name="kategori" id="kategori" class="form-control" >
                                <option value="">---Select---</option>
                                <?php foreach ($kategori as $ktg) :
                                    # code...

                                 ?>
                                <option value="<?= $ktg->nama_kategori?>"><?= $ktg->nama_kategori ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php echo form_error('kategori','<div class="text-danger small ">','</div>')  ?>
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Penerbit</label>
                            <select name="penerbit" id="penerbit" class="form-control">
                                <?php foreach ($penerbit as $pnb): 
                                ?>
                                <option value="<?= $pnb->nama_penerbit?>"><?= $pnb->nama_penerbit?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php echo form_error('penerbit','<div class="text-danger small ">','</div>')  ?>
                        </div>
                        <div class="form-group">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" class="form-control" id="pengarang">
                            <?php echo form_error('pengarang','<div class="text-danger small ">','</div>')  ?>
                        </div>

                    </div>

                    <div class="col-md-6">
                    
                        <div class="form-group">
                            <label for="halaman">Halaman</label>
                            <input type="number" min="0" class="form-control" value="0" id="halaman">
                            <?php echo form_error('halaman','<div class="text-danger small ">','</div>')  ?>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="number" min="0" class="form-control" value="0" id="jumlah">
                            <?php echo form_error('judul','<div class="text-danger small ">','</div>')  ?>
                        </div>
                        <div class="form-group">
                            <label for="sinopsis">Sinopsis</label>
                            <textarea class="form-control" id="sinopsis"></textarea>
                            <?php echo form_error('sinopsis','<div class="text-danger small ">','</div>')  ?>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label><br>
                            <input type="file" id="gambar">
                        </div>

                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success btn-lg float-right"><i class="fa fa-paper-plane"></i> Save</button>
                    </div>


                </div>
                
              </form>

            </div>
          </div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


  


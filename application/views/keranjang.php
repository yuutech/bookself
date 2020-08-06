<nav class="navbar navbar-expand-lg navbar-light bg-light py-2">
      <a class="navbar-brand text-success font-weight-bold" href="#">BookSelf</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul  class="navbar-nav ml-auto mr-2">
          
        <?php if($this->session->userdata('userid')!= null){ ?>
          
         <li class="nav-item">
          <a class="nav-link" href="<?= site_url('dashboard'); ?>">Dashboard</span></a>
        </li>
        <li class="nav-item">
            <strong class="nav-link">Hi, <?= $this->fungsi->user_login()->name ?></span></strong>
        </li>

        </ul>
          <a href="<?= site_url('auth/logout');?>" class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</a>
      </div>
       <?php }else {
          ?></ul>
          <a href="<?= site_url('auth/login');?>" class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</a>
      </div>
        <?php } ?>
        
    </nav>
<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h4 class="text-center mb-3">Daftar Pinjam Buku</h4>
            <table class="table table-border table-stripped table-hover">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Halaman</th>
                    <th>Jumlah</th>
                    <th>Action</th>
                </tr>
                <?php 
                    $no=1;
                    foreach ($this->cart->contents() as $items) :
                ?>
                <tr>
                    <td><?= $no++?></td>
                    <td><?= $items['name']?></td>
                    <td><?= $items['price']?></td>
                    <td><?= $items['qty']?></td>
                    <td>
                        <form action="<?= site_url('home/delete_buku_cart/') ?>" method="post">
                            <input type="hidden" name="id" value="<?= $items['id']?>">
                            <input type="hidden" name="rowid" value="<?= $items['rowid']?>">                    
                            <input type="hidden" name="qty" value="<?= $items['qty']?>">
                            <button class="btn btn-sm  btn-outline-danger"><i class="fa fa-trash"></i></button>
                        </form>
                        
                    </td>
                </tr> 
                <?php endforeach; ?>
            </table>
           
        </div>
        <div class="col-6">
            <h4 class="text-center mb-3">Daftar Pinjam Buku</h4>
            <hr>
            <form action="<?= site_url('home/proses_pesanan') ?>" method="post">
                <div class="form-group">
                    <label for="">Tanggal Pinjam</label>
                    <input  name="tgl_pinjam" class="form-control" type="text" value="<?php echo   date('Y-m-d')?>" readonly>
                </div>
                <div class="form-group">
                    <label for="">Tanggal Kembali</label>
                    <input name="tgl_kembali" class="form-control" type="date">
                </div>
                <div class="float-right">
                    <a href="<?= base_url('home/hapus_keranjang')?>">
                    <a href="<?= base_url('home')?>"><div class="btn btn-xl btn-outline-info">Lanjutkan Memilih Buku</div></a>
                    <button type="submit" class="btn btn-xl btn-outline-success" onclick="" >Proses Transaksi</button>
                </div>
            </form>
        </div>
    </div>
</div>
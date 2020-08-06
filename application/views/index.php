   
    <nav class="navbar navbar-expand-lg sticky-top navbar-light shadow bg-light py-2">
      <a class="navbar-brand text-success font-weight-bold" href="#">BookSelf</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-2">
          
        <?php if($this->session->userdata('userid')!= null){ ?>
          
         <li class="nav-item">
          <a class="nav-link" href="<?= site_url('dashboard'); ?>">Dashboard</span></a>
        </li>
        <li class="nav-item">
            <strong class="nav-link">Hi, <?= $this->fungsi->user_login()->name ?></span></strong>
        </li>
        <?php
              $keranjang = $this->cart->total_items();
          ?>
        <li>
        <div id="ex4">
          
                  <span class="mt-1 p1 fa-stack has-badge" data-count="<?= $keranjang ?>">
                  <!--<i class="p2 fa fa-circle fa-stack-2x"></i>-->
                  <?php echo anchor('home/detail_keranjang','<i class="fa fa-shopping-cart fa-stack-1x xfa-inverse" data-count="4d"></i>');
                  ?>
                  </span>
              </div>
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

    <div class="container mt-3">
      <section>

        <?php echo $this->session->flashdata('pesan'); ?>

        <?php if ($this->session->userdata('userid') == null) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Selamat Datang di <strong>BookSelf</strong> Aplikasi Peminjaman Buku. Login Terlebih dahulu untuk dapat melakukan peminjaman buku.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?php } ?>

        <div class="row">
          <div class="col-6">
            <h4>Daftar Buku</h4>
          </div>
          
          <div class="col">
            <form class="form-inline float-right">            
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div>

        <hr>

          <div class="row">
            <div class="col-12">
              <div class="row">
              <?php foreach ($buku as $bk) :?>
                <div class="col-xl-3 col-6 mb-4">
                  <div class="card shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col-md-12">
                          <figure class="figure">
                            <img src="<?=base_url().'assets/img/buku/'.$bk->gambar?>" class="figure-img img-fluid rounded">
                          </figure>
                        </div>
                        <div class="col-12">
                          <div class="row">
                            <div class="col-12 text-center">
                              <div class="font-weight-bold judul text-success text-uppercase"><?= $bk->judul ?></div>
                              <div class="text-xs font-weight-light text-gray-600 mb-2"><?= $bk->nama_kategori?></div>
                              <span class="badge badge-info mb-3">Jumlah Buku : <?= $bk->jumlah?></span>
                            </div>   
                            <div class="col-12  text-center">
                              <button href="" class="btn btn-sm btn-outline-info">Detail</button>
                              <?php if ($this->session->userdata('userid')!= null) {
                                echo anchor('/home/tambah_ke_keranjang/'.$bk->kd_buku,
                                '<div class="btn btn-sm btn-outline-success">Pinjam </div>');
                              } ?>
                              
                            </div>                    
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <?php endforeach; ?>
                </div>

                <div class="row mb-3">
                  <div class="col-auto  ml-auto">
                    <nav>
                      <ul class="pagination">
                        <li class="page-item disabled">
                          <span class="page-link"><</span>
                        </li>
                        <li class="page-item active">
                          <span style="background: #20c997; border: 0;" class="page-link">1</span>
                        </li>
                        <li class="page-item"><a class="page-link  text-success" href="#">2</a></li>
                        <li class="page-item"><a class="page-link  text-success" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link text-success" href="#">></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
            </div>
      </section>
    </div>

    <footer>
      <hr>
      <p class="text-xs font-weight-light text-gray-400 text-center py-3">Copyright 2020 By Yuutech • All right reserved • BookSelf</p>
    </footer>

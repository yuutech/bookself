<body>
    <div class="container-fluid mt-3">
      <section>

        <div class="row" style="margin-top: 70px;">
          
          <div class="col-2"></div>
          <div class="col-4">
            <div style="width: 678px; height: 452px;">
              <img class="img-fluid position-absolute" src="<?=base_url()?>assets/img/frame.png" style=" margin: -20px 0 0 -20px; zIndex: 1; ">
              <img class="img-fluid position-absolute" src="<?=base_url()?>assets/img/bg-login.png" style="margin: 0px -15px -15px 0">
            </div>
          </div>

          <div class="col-4">

            <h3 class="font-weight-light mb-5">
              pinjam buku jadi lebih asik di <strong>BookSelf</strong>
            </h3> 
          
              <?php echo $this->session->flashdata('pesan'); ?>
            <form action="<?= site_url("auth/process") ?>" method="POST">
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
                <?php echo form_error('username','<div class="text-danger small ">','</div>')  ?>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
                <?php echo form_error('password','<div class="text-danger small">','</div>')  ?>
              </div>

              <button name="login" type="submit" class="btn btn-success mb-2" style="width: 100%;">Sign In</button>
              <div class="form-group">
                <div class="row no-gutters">
                  <div class="col-2 text-center">
                    <a class="btn btn-light" style="width:100%" href="<?=site_url('home')?>">
                      <i class="fa fa-home"></i>
                    </a>
                  </div>
                  <div class="col-10">
                    <a class="btn btn-light" style="width:100%" href="<?=site_url('register')?>">Sign Up</a>
                  </div>
                </div>
              </div>
            </form>

          </div>
          
          <div class="col-2"></div>

        </div>

        

      </section>
    </div>

    <footer>
      <hr>
      <p class="text-xs font-weight-light text-gray-400 text-center py-3">Copyright 2020 By Yuutech • All right reserved • BookSelf</p>
    </footer>


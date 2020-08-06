
  <body>
    <div class="container-fluid mt-3">
      <section>

        <div class="row" style="margin-top: 50px;">
          
        
          <div class="col-6 offset-3">

            <h4 class="font-weight-light mb-5 text-center">
              kalo mau pinjem di <strong>BookSelf</strong> jadi member dulu ya
            </h4> 
          
            <form action="<?= site_url('register/proses_reg') ?>" method="POST">
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Enter Username" name="username">
                <?php echo form_error('username','<div class="text-danger small ">','</div>')  ?>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password">
                <?php echo form_error('password','<div class="text-danger small ">','</div>')  ?>
              </div>
              <div class="form-group">
                <label>Full Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="fullname">
                <?php echo form_error('fullname','<div class="text-danger small">','</div>')  ?>
              </div>
              <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Enter your address" name="alamat">
                <?php echo form_error('alamat','<div class="text-danger small ">','</div>')  ?>
              </div>

              <button type="submit" class="btn btn-success mb-2" style="width: 100%;">Sign Up</button>
              <a class="btn btn-light" style="width: 100%;" href="<?=site_url('auth/login')?>">Back to Sign In</a>
            </form>

          </>
          
        </div>

        

      </section>
    </div>

    <footer>
      <hr>
      <p class="text-xs font-weight-light text-gray-400 text-center py-3">Copyright 2020 By Yuutech • All right reserved • BookSelf</p>
    </footer>




    
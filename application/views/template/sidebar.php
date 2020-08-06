<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url() ?>">
        <div class="sidebar-brand-icon">
          <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">BookSelf <sup>++</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('dashboard') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <li class="nav-item">
      
        <?php if ($this->session->userdata('level') == 1) { ?>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#inven">
          <i class="fas fa-fw fa-clipboard-list"></i>
          <span>Inventory</span>
        </a>
        <div id="inven" class="collapse" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Detail:</h6>
            <a class="collapse-item" href="<?= site_url('listbook') ?>">Buku</a>
            <a class="collapse-item" href="<?= site_url('kategori') ?>">Kategori</a>
          </div>
        </div>
          <a class="nav-link" href="<?php echo site_url('user')?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Daftar Anggota</span></a>
       
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-shopping-cart"></i>
          <span>Transaksi</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Detail:</h6>
            <a class="collapse-item" href="<?php echo site_url('transaksi/dipinjam')?>">Buku Dipinjam</a>
            <a class="collapse-item" href="<?php echo site_url('user')?>">Buku Kembali</a>
          </div>
        </div>
        
        <?php }?>
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-chart-pie"></i>
          <span>Histori Pinjam</span>
        </a>
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-chart-pie"></i>
          <span>Laporan</span>
        </a>
      </li>

      <?php if($this->session->userdata('level') == 1){ ?>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
        <div class="sidebar-heading">
          Settings
        </div>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('admin') ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Admin</span></a>
        </li>
      <?php } ?>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hi, <strong><?= $this->fungsi->user_login()->name ?></strong></span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Yakin ingin Keluar?</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?=site_url('auth/logout')?>">Logout</a>
              </div>
            </div>
          </div>
        </div>
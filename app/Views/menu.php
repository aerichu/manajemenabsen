<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">UNYAKKKKK</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              <img src="<?php echo base_url('img/'. $user->foto)?>" alt="Profile" class="rounded-circle">

              <span class="d-none d-md-block dropdown-toggle ps-2"><?= session()->get('username')?></span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                <h6><?= $user->nama_kry?></h6>
                <span><?= $user->tgl_lahir?></span>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="<?= base_url('home/pp/'.session()->get('id'))?>">
                  <i class="bi bi-person"></i>
                  <span>My Profile</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="<?= base_url('home/setting')?>">
                  <i class="bi bi-gear"></i>
                  <span>Account Settings</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                  <i class="bi bi-question-circle"></i>
                  <span>Need Help?</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="<?= base_url('home/logout')?>">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                </a>
              </li>

            </ul><!-- End Profile Dropdown Items -->
          </li><!-- End Profile Nav -->

        </ul>
      </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
          <a class="nav-link " href="<?= base_url ('home/dashboard')?>">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li><!-- End Dashboard Nav -->

        <?php
        if(session()->get('level')==1 || session()->get('level')==2 || session()->get('level')==3){
          ?>

          <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url ('home/index')?>">
              <i class="bi bi-caret-right"></i><span>Barang</span>
            </a>
          </li><!-- End Components Nav -->

          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" href="<?= base_url ('home/bm')?>">
              <i class="bi bi-caret-right"></i><span>Barang masuk</span>
            </a>
          </li><!-- End Forms Nav -->

          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" href="<?= base_url ('home/bk')?>">
              <i class="bi bi-caret-right"></i><span>  Barang keluar</span>
            </a>
          </li><!-- End Tables Nav -->

        <?php } ?>

        <?php
        if(session()->get('level')==1 || session()->get('level')==2 || session()->get('level')==4){
          ?>

        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-caret-right"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="<?= base_url ('home/laporanm')?>">
                <i class="bi bi-circle"></i><span>Barang masuk</span>
              </a>
            </li>
            <li>
              <a href="<?= base_url ('home/laporank')?>">
                <i class="bi bi-circle"></i><span>Barang keluar</span>
              </a>
            </li>
          </ul>
        </li><!-- End babi Nav -->

      <?php } ?>

      <?php
        if(session()->get('level')==2 || session()->get('level')==1){
          ?>

        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#x-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-bar-chart"></i><span>User</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="x-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="<?= base_url ('home/karyawan')?>">
                <i class="bi bi-circle"></i><span>Karyawan</span>
              </a>
            </li>

            <li>
              <a href="<?= base_url ('home/user')?>">
                <i class="bi bi-circle"></i><span>Data</span>
              </a>
            </li>
            <li>
              <a href="<?= base_url ('home/reset')?>">
                <i class="bi bi-circle"></i><span>Reset pw</span>
              </a>
            </li>
          </ul>
        </li><!-- End Charts Nav -->
        <?php } ?>

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= base_url('home/pp2/')?>">
            <i class="bi bi-person"></i>
            <span>Profile</span>
          </a>
        </li><!-- End Profile Page Nav -->

        <?php
        if(session()->get('level')==2 || session()->get('level')==1){
          ?>

        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= base_url ('home/setting')?>">
            <i class="ri-settings-3-line"></i>
            <span>Setting</span>
          </a>
        </li><!-- End setting Page Nav -->
        <?php } ?>
      </ul>

    </aside><!-- End Sidebar-->

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



        <?php foreach ($mn as $menu) { ?>
          <?php if ($menu->parent_id == 0) { ?>
            <?php if ($menu->is_have_child > 0) { ?>
              <!-- Menu dengan is_have_child > 0 -->
              <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#x-nav" data-bs-toggle="collapse" href="<?= $menu->link?>">
                  <i class="<?= $menu->icon?>"></i><span><?= $menu->title?></span><i class="<?= $menu->icon?>"></i>
                </a>
                <ul id="x-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <!-- Print submenu -->
                  <?php foreach ($mn as $submenu) { ?>
                    <?php if ($submenu->parent_id == $menu->id) { ?>
                      <li>
                        <a href="<?= $submenu->link?>">
                          <i class="<?= $submenu->icon?>"></i><span><?= $submenu->title?></span>
                        </a>
                      </li>
                    <?php } ?>
                  <?php } ?>
                </ul>
              </li>
            <?php } else { ?>
              <!-- Menu dengan is_have_child = 0 -->
              <li class="nav-item">
                <a class="nav-link " href="<?= $menu->link?>">
                  <i class="<?= $menu->icon?> ?>"></i>
                  <span><?= $menu->title?></span>
                </a>
              </li><!-- End Dashboard Nav -->
            <?php } ?>
          <?php } ?>
        <?php } ?>



      </aside><!-- End Sidebar-->

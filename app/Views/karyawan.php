<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Karyawan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('home/dashboard')?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?= base_url('home/user')?>">User</a></li>
        <li class="breadcrumb-item active"><a href="<?= base_url('home/pp/'.session()->get('id'))?>">profile</a></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Karyawan</h5>
            
            <a href="<?= base_url('home/tambahkry') ?>">
              <button class="ri-keyboard-line"></button>
            </a>
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">no</th>
                  <th scope="col">Nama karyawan</th>
                  <th scope="col">Nmr hp karyawan</th>
                  <th scope="col">Level</th>
                  <th scope="col">Foto</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php

                $no=1;
                foreach($manda as $erwin){
                  ?>  
                  <tr>
                    <tr valign="middle">
                      <td><?= $no++ ?></td>
                      <td><?=$erwin->nama_kry?></td>
                      <td><?= $erwin ->no_hp?></td>
                      <td><?php
                if( $erwin->level==1){
                  echo "Super Admin";
                }else if( $erwin->level==2){
                  echo " Admin";
                }else if( $erwin->level==3){
                  echo "manager";
                }else{
                  echo "petugas";
                }
              ?></td>
                      <td>
                        <img src="<?php echo base_url('img/'.$erwin ->foto)?>" width="50px">

                      </td>
                      <td>
                        <a href="<?= base_url('home/edit_kry/' . $erwin ->id_user) ?>">
                          <button class="bi bi-pencil-square">edit</button>
                        </a>
                        <a href="<?= base_url('home/pp/' . $erwin ->id_user) ?>">
                          <button class="bi bi-pencil-square">detail</button>
                        </a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->


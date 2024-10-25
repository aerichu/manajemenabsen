<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Barang Masuk</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('home/dashboard')?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?= base_url('home/bk')?>">Barang keluar</a></li>
        <li class="breadcrumb-item active"><a href="<?= base_url('home/karyawan')?>">Karyawan</a></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Barang masuk</h5>
            
            <a href="<?= base_url('home/tambah_barangm') ?>">
             <button class="ri-keyboard-line"></button>
           </a>
           
           <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">nama barang</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Tgl masuk</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php

              $no=1;
              foreach($manda as $erwin){
               ?>	

               <tr>
                <td><?= $no++ ?></td>
                <td><?=$erwin->nama_brg?></td>
                <td><?=$erwin->jumlah?></td>
                <td><?= $erwin ->tgl_m?></td>
                <td>
                 <a href="<?= base_url('home/edit_barangm/' . $erwin ->id_brgm) ?>">
                   <button class="bi bi-pencil-square"></button>
                 </a>
                 <a href="<?= base_url('home/hapus_barangm/' . $erwin ->id_brgm) ?>">
                   <button class="ri-delete-bin-6-line"></button>
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




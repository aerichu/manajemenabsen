<main id="main" class="main">

  <div class="pagetitle">
    <h1>Reset Password</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Reset</h5>
            
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">no</th>
                  <th scope="col">Username</th>
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
                  <td><?=$erwin->username?></td>
                  <td>


                   
                   <a href="<?= base_url('home/aksi_reset/' . $erwin ->id_user) ?>">
                     <button class="bi bi-pencil-square">Reset Password</button>
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
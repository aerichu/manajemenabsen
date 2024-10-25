<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data User</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('home/dashboard')?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?= base_url('home/pp/'.session()->get('id'))?>">pp</a></li>
        <li class="breadcrumb-item active"><a href="<?= base_url('home/karyawan')?>">karyawan</a></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Datatables</h5>
            
            <a href="<?= base_url('home/tambah_user') ?>">
             <button class="ri-keyboard-line"></button>
           </a>
           <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">no</th>
                <th scope="col">Nama </th>
                <th scope="col">Password</th>
                <th scope="col">Level</th>
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
                <td><?= $erwin ->pw?></td>
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
              <a href="<?= base_url('home/edit_user/' . $erwin ->id_user) ?>">
                <button class="bi bi-pencil-square"></button>
              </a>

              <a href="<?= base_url('home/hapus_user/' . $erwin ->id_user) ?>">
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


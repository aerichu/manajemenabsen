<main id="main" class="main">

  <div class="pagetitle">
    <h1>Profile</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('home/dashboard')?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?= base_url('home/karyawan')?>">Karyawan</a></li>
        <li class="breadcrumb-item active"><a href="<?= base_url('home/user')?>">Users</a></li>
      </ol> 
    </nav>
  </div><!-- End Page Title -->

  <section class="section profile">
    <div class="row">
      <div class="col-xl-4">

        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="<?= base_url('img/default.jpg')?>" alt="Profile" class="rounded-circle">
            <h2></h2>
            <h3></h3>
            <div class="social-links mt-2">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
          </div>
        </div>

      </div>

      <div class="col-xl-8">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">

                <!-- Profile Edit Form -->
                <form action="<?= base_url('home/aksi_t_kry') ?>" method="POST" enctype="multipart/form-data">
                  <div class="row mb-3">
                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                    <div class="col-md-8 col-lg-9">
                      <img src="<?= base_url('img/default.jpg')?>" alt="Profile">
                      <div class="pt-2">
                        <input name="foto" type="file" class="form-control" id="foto">
                        <!--
                          aku bosan jadi aku tambahin sesuatu :v gk tau bpk perbolehin ini gk :P
                          kalau mau tambah foto pilih aja dari folder yang ada disini
                        <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i>Upload</a>
                      -->
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">username</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="username" type="text" class="form-control" id="username">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">password</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="pw" type="password" class="form-control" id="pw">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputEmail" class="col-md-4 col-lg-3 col-form-label">level</label>
                  <div class="col-md-8 col-lg-9">
                    <select  type="select" class="form-control" name="level" id="level" placeholder="Enter level Barang" name="level">
                     <option value="volvo">Pilih Level</option>
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                   </select>
                 </div>
               </div>



               <div class="row mb-3">
                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama</label>
                <div class="col-md-8 col-lg-9">
                  <input name="nama" type="text" class="form-control" id="nama">
                </div>
              </div>

              <div class="row mb-3">
                <label for="company" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                <div class="col-md-8 col-lg-9">
                  <input name="alamat" type="text" class="form-control" id="alamat">
                </div>
              </div>

              <div class="row mb-3">
                <label for="Job" class="col-md-4 col-lg-3 col-form-label">Jenis Kelamin</label>
                <div class="col-md-8 col-lg-9">
                  <select name="jk" type="text" class="form-control" id="jk" >
                    <option>
                      <?php
                      if($user->jk_kry){
                        echo "Laki laki";
                      }else if($user->jk_kry){
                        echo " Perempuan";
                      }else{
                        echo "Lainnya";
                      }
                      ?>

                    </option>
                    <option >laki laki</option>
                    <option >perempuan</option>
                    <option >lainnya</option>
                  </select>
                </div>
              </div>

              <div class="row mb-3">
                <label for="Country" class="col-md-4 col-lg-3 col-form-label">No Hp</label>
                <div class="col-md-8 col-lg-9">
                  <input name="hp" type="text" class="form-control" id="hp" >
                </div>
              </div>

              <div class="row mb-3">
                <label for="Address" class="col-md-4 col-lg-3 col-form-label">Agama</label>
                <div class="col-md-8 col-lg-9">
                  <select name="agama" type="text" class="form-control" id="agama" >
                    <?php
                    if (isset($satu->id_agama) && $satu->id_agama > 0) {
                      ?>
                      <option value="<?=$satu->id_agama ?>"><?=$satu->nama_agama?></option>
                      <?php
                    }else{
                      ?>
                      echo "<option>Pilih</option>";
                      <?php

                    }
                    ?>
                    <?php
                    foreach($t as $erwin){
                      ?>
                      <option value="<?=$erwin->id_agama ?>"><?=$erwin->
                      nama_agama?></option>
                    <?php }?>
                  </select>
                </div>
              </div>

              <div class="row mb-3">
                <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Tgl lahir</label>
                <div class="col-md-8 col-lg-9">
                  <input name="tgl" type="date" class="form-control" id="tgl" >
                </div>
              </div>

              <div class="row mb-3">
                <label for="Email" class="col-md-4 col-lg-3 col-form-label">Tempat Lahir</label>
                <div class="col-md-8 col-lg-9">
                  <input name="lhr" type="text" class="form-control" id="lhr" >
                </div>
              </div>
            </div>


            <div class="text-center">
              <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
          </form><!-- End Profile Edit Form -->

        </div>









        <div class="tab-pane fade pt-3" id="profile-change-password">
          <!-- Change Password Form -->
          <form>

            <div class="row mb-3">
              <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
              <div class="col-md-8 col-lg-9">
                <input name="password" type="password" class="form-control" id="currentPassword">
              </div>
            </div>

            <div class="row mb-3">
              <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
              <div class="col-md-8 col-lg-9">
                <input name="newpassword" type="password" class="form-control" id="newPassword">
              </div>
            </div>

            <div class="row mb-3">
              <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
              <div class="col-md-8 col-lg-9">
                <input name="renewpassword" type="password" class="form-control" id="renewPassword">
              </div>
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary">Change Password</button>
            </div>
          </form><!-- End Change Password Form -->

        </div>

      </div><!-- End Bordered Tabs -->

    </div>
  </div>

</div>
</div>
</section>

  </main><!-- End #main -->
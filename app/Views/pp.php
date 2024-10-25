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

            <img src="<?= base_url('img/'. $satu->foto)?>" alt="Profile" class="rounded-circle">
            <h2><?= $satu->nama_kry?></h2>
            <h3><?= $satu->tgl_lahir?></h3>
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
                <form action="<?= base_url('home/aksi_pp') ?>" method="POST">
                  <div class="row mb-3">
                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                    <div class="col-md-8 col-lg-9">
                      <img src="<?= base_url('img/'. $satu->foto)?>" alt="Profile">
                      <div class="pt-2">
                        <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                        <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="nama" type="text" class="form-control" id="nama" value="<?= $satu->nama_kry ?>">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="alamat" type="text" class="form-control" id="alamat" value="<?= $satu->alamat_kry ?>">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Job" class="col-md-4 col-lg-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-md-8 col-lg-9">
                      <select name="jk" type="text" class="form-control" id="jk" >
                        <option value="<?= $satu->jk_kry ?>">
                          <?php
                          if( $satu->jk_kry=="L"){
                            echo "Laki laki";
                          }else if( $satu->jk_kry=="P"){
                            echo " Perempuan";
                          }else{
                            echo "Lainnya";
                          }
                          ?>

                        </option>
                        <option value="L">laki laki</option>
                        <option value="P">perempuan</option>
                        <option value="Lainnya">lainnya</option>
                      </select>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Country" class="col-md-4 col-lg-3 col-form-label">No Hp</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="hp" type="text" class="form-control" id="hp" value="<?= $satu->no_hp ?>">
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
                      <input name="tgl" type="date" class="form-control" id="tgl" value="<?= $satu->tgl_lahir ?>">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Tempat Lahir</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="lhr" type="text" class="form-control" id="lhr" value="<?= $satu->tpt_lahir ?>">
                    </div>
                  </div>
                </div>

                <input type="hidden" name="id" value="<?= $satu->id_user ?>">



                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                  <?php
                  if(session()->get('level')==2 || session()->get('level')==1){
          ?>
                  <a href="<?= base_url('home/hapuskry/'.$satu->id_user)?>"><i  class="btn btn-danger">Delete</i>
                  </a>
                  <?php } ?>
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
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">

<div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form edit user</h5>

              <!-- General Form Elements -->
              <form action="<?= base_url('home/aksi_edit_user') ?>" method="POST"> 
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">nama karyawan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" value="<?= $satu->nama_kry ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">no hp</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="hp" value="<?= $satu->no_hp ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">level</label>
                  <div class="col-sm-10">
                    <select  type="select" class="form-control" id="level" placeholder="Enter level Barang" name="level" value="<? $satu->level ?>">
                     <option value="<?= $satu->level ?>">
                        <?php
                            if( $satu->level==1){
                                echo "Super Admin";
                            }else if( $satu->level==2){
                                echo " Admin";
                            }else if( $satu->level==3){
                                echo "karyawan";
                            }else{
                                echo "petugas";
                        }
                        ?>
                    
                    </option>
                     <option value="1">Super Admin</option>
                     <option value="2">Admin</option>
                     <option value="3">Karyawan</option>
                      <option value="4">Petugas</option>
                      <option value="<?= $satu->level ?>">

                </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>

               <input type="hidden" name="id" value="<?= $satu->id_user ?>">
              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>




	
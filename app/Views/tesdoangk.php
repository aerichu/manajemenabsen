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
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form tambah bk</h5>

              <!-- General Form Elements -->
              <form action="<?= base_url('home/aksi_t_barangk') ?>" method="POST"> 
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">nama barang</label>
                  <div class="col-sm-10">
                    <select name="nama" type="text" class="form-control" id="id_brg" >
                        <?php
                        if (isset($satu->id_brg) && $satu-> nama_brg > 0) {
                          ?>
                          <option value="<?=$satu->id_brg ?>"><?=$satu->nama_brg?></option>
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
                          <option value="<?=$erwin->id_brg ?>"><?=$erwin->
                          nama_brg?></option>
                        <?php }?>
                      </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">jumlah</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlah">
                  </div>
                  </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
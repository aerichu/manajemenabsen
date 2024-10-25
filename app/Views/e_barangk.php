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
              <h5 class="card-title">Form edit</h5>

              <!-- General Form Elements -->
              <form action="<?= base_url('home/aksi_edit_barangk') ?>" method="POST"> 
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Id barang</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" value="<?= $satu->id_brg ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Jumlah</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlah" value="<?= $satu->jumlah ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">tgl k</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgl_k" value="<?= $satu->tgl_k ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>

               <input type="hidden" name="id" value="<?= $satu->id_bk ?>">
              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

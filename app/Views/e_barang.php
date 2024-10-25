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
              <form action="<?= base_url('home/aksi_edit_barang') ?>" method="POST"> 
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nama barang</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" value="<?= $satu->nama_brg ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Kode barang</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kode" value="<?= $satu->kode_brg ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>

               <input type="hidden" name="id" value="<?= $satu->id_brg ?>">
              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>




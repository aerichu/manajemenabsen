<main id="main" class="main">

  <div class="pagetitle">
    <h1>Form print</h1>
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
      <div class="col-lg-4">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Form print</h5>

            <!-- General Form Elements -->
            <form action="<?= base_url('home/aksi_edit_barang') ?>" method="POST"> 
              <div class="row mb-3">
                <label for="kode" class="form-label">Tgl awal</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="kode" name="awal">
                </div>
              </div>

              <div class="row mb-3">
                <label for="kode" class="form-label">Tgl akhir</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="kode" name="akhir">
                </div>
              </div>
              <div class="col-sm-8">
                <button type="submit" class="btn btn-primary">Print</button>
              </div>
            </div>

          </form><!-- End General Form Elements -->

        </div>
      </div>

    </div>

    <div class="col-lg-4">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Form print</h5>

            <!-- General Form Elements -->
            <form action="<?= base_url('home/aksi_edit_barang') ?>" method="POST"> 
              <div class="row mb-3">
                <label for="kode" class="form-label">Tgl awal</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="kode" name="awal">
                </div>
              </div>

              <div class="row mb-3">
                <label for="kode" class="form-label">Tgl akhir</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="kode" name="akhir">
                </div>
              </div>
              <div class="col-sm-8">
                <button type="submit" class="btn btn-primary">PDF</button>
              </div>
            </div>

          </form><!-- End General Form Elements -->

        </div>
      </div>

    </div>

    <div class="col-lg-4">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Form print</h5>

            <!-- General Form Elements -->
            <form action="<?= base_url('home/aksi_edit_barang') ?>" method="POST"> 
              <div class="row mb-3">
                <label for="kode" class="form-label">Tgl awal</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="kode" name="awal">
                </div>
              </div>

              <div class="row mb-3">
                <label for="kode" class="form-label">Tgl akhir</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="kode" name="akhir">
                </div>
              </div>
              <div class="col-sm-8">
                <button type="submit" class="btn btn-primary">Excel</button>
              </div>
            </div>

          </form><!-- End General Form Elements -->

        </div>
      </div>

    </div>






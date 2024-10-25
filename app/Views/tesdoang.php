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
            <h5 class="card-title">Form tambah</h5>

            <!-- General Form Elements -->
            <form action="<?= base_url('home/aksi_t_barang') ?>" method="POST" enctype="multipart/form-data"> 
              <div class="row mb-3">
                <label for="profileImage" class="col-md-2 col-lg-2 col-form-label">Profile Image</label>
                <div class="col-md-5 col-lg-6" >
                  <img src="<?= base_url('img/default.jpg')?>" width="80px" alt="Profile">
                  <div class="pt-2">
                    <input name="foto" type="file" class="form-control" id="foto">

                    <label for="inputText" class="col-sm-2 col-form-label">Nama barang</label>
                    <div class="col-sm-10">
                      <input type="text" required class="form-control" name="nama">
                    </div>
                  </div>
                    <label for="inputEmail" class="col-sm-2 col-form-label">Kode barang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kode">
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

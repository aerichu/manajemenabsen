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
              <h5 class="card-title">Form tambah user</h5>

              <!-- General Form Elements -->
              <form action="<?= base_url('home/aksi_t_user') ?>" method="POST"> 
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">username</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="username">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">pw</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pw">
                  </div>
                  </div>
                  <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">level</label>
                  <div class="col-sm-10">
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
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
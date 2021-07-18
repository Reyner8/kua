<?php
$this->load->view('header');
?>

<h1 class="mt-4 mb-4">Survey</h1>
<h5>Tingkat kepuasan pelayanan kami</h5>
<div class="row">
  <div class="col-md-12">
    <div class="card mb-4">
      <div class="card-body">
        <form action="<?= base_url('insert/insert_survey') ?>" method="post">
          <div class="row">
            <div class="col-md-4">
              <div class="form-floating mb-3">
                <input class="form-control" id="nama" type="text" placeholder="Nama anda" name="nama">
                <label for="no_daftar">Nama anda</label>
              </div>
              <div class="form-floating mb-3">
                <input class="form-control" id="email" type="email" placeholder="Email anda" name="email">
                <label for="email">Email anda</label>
              </div>
              <div class="form-floating mb-3">
                <textarea class="form-control" name="deskripsi" id="deskripsi" cols="100" rows="100"></textarea>
                <label for="deskripsi">Deskripsi</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-md-8">
              <div class="row">
                <div id="scroll">

                  <?php foreach ($data as $d) : ?>
                    <div class="col-md-12">
                      <div class="card no-border">
                        <div class="card-body">
                          <h4><?= $d->nama ?></h4>
                          <h6><?= $d->email ?></h6>
                          <p><?= $d->deskripsi ?></p>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
$this->load->view('footer')
?>
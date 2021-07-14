<?php
$this->load->view('header');
?>

<h1 class="mt-4 mb-4">Informasi KUA</h1>

<h3 class="mb-4">Berita Terkini</h3>
<div class="row">
    <?php foreach ($data as $d) : ?>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h3><?= $d->judul ?></h3>
                    <p class="small"><?= $d->tanggal ?></p>
                    <p>
                        <?= substr($d->deskripsi, 0, 60) ?>
                    </p>

                </div>
                <div class="card-footer d-flex align-items-center justify-content-center">
                    <a class="small btn btn-secondary btn-sm stretched-link" href="<?= base_url('page/detail_berita/' . $d->id) ?>">Details</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php
$this->load->view('footer')
?>
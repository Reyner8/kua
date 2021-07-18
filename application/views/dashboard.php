<?php
$this->load->view('header');
?>


<div class="row d-flex justify-content-center">
    <div class="col-md-6 mt-5">
        <h1 class="mb-4 text-center">Berita Terkini</h1>
    </div>
</div>
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
                    <a class="small btn btn-secondary btn-sm stretched-link" href="<?= base_url('page/detail_news/' . $d->id) ?>">Details</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php
$this->load->view('footer')
?>
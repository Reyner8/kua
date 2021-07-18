<?php
$this->load->view('header');
?>

<div class="row d-flex justify-content-center">
    <div class="col-md-6 mt-5">
        <h1 class="mb-4 text-center">Detail Berita</h1>
    </div>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-md-10">
        <div class="card mb-4">
            <div class="card-body">
                <h4 class="text-center"><?= $data->judul ?></h4>
                <p class="text-center"><?= $data->tanggal ?></p>
                <p class="mt-4">
                    <?= $data->deskripsi ?>
                </p>
            </div>

        </div>
    </div>
</div>
<?php
$this->load->view('footer')
?>
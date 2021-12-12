<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/header.php');
?>

<h1 class="mt-4">Berita</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Admin/Data Berita</li>
</ol>
<div class="row">
    <div class="col-md-5">
        <div class="card mb-4">
            <?= $this->session->flashdata('err'); ?>
            <div class="card-header">
                <i class="fas fa-columns me-1"></i>
                Form Berita
            </div>
            <div class="card-body">
                <?php if ($editPage == false) { ?>
                    <form method="POST" action=" <?= base_url('admin/insert/insert_news') ?>" enctype="multipart/form-data">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="judul" type="text" placeholder="judul" name="judul" />
                            <label for="judul">Judul Berita</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="Deskripsi" placeholder="Deskripsi Berita" name="deskripsi"></textarea>
                            <label for="Deskripsi">Deskripsi Berita</label>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Foto</label>
                            <input class="form-control" id="file" type="file" placeholder="file" name="fotopost" />
                        </div>
                        <button class="btn btn-primary">Tambah</button>
                    </form>
                <?php } else { ?>
                    <form method="POST" action=" <?= base_url('admin/edit/update_news/' . $edit->id) ?>" enctype="multipart/form-data">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="judul" type="text" placeholder="judul" name="judul" value="<?= $edit->judul ?>" />
                            <label for="judul">Judul Berita</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="Deskripsi" placeholder="Deskripsi Berita" name="deskripsi"><?= $edit->deskripsi ?></textarea>
                            <label for="Deskripsi">Deskripsi Berita</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="file" type="file" placeholder="file" name="fotopost" />
                        </div>
                        <button class="btn btn-primary">Ubah</button>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Berita yang sudah terisi
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Foto</th>
                            <th>Tanggal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $d) : ?>
                            <tr>
                                <td><?= $d->judul ?></td>
                                <td><?= $d->deskripsi ?></td>
                                <td><img src="<?= base_url('assets/berita/' . $d->foto) ?>" width="100px" alt="Foto"></td>
                                <td><?= $d->tanggal ?></td>
                                <td>
                                    <a href="<?= base_url('admin/page/edit_news/' . $d->id) ?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a>
                                    <a href="<?= base_url('admin/delete/delete_news/' . $d->id) ?>" class="btn btn-warning btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
require_once(__ROOT__ . '/footer.php');
?>
<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/header.php');
?>

<h1 class="mt-4">Kantor KUA</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Admin/Data Kantor KUA</li>
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
                    <form method="POST" action=" <?= base_url('admin/insert/insert_kua') ?>">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="kua" type="text" placeholder="Kode KUA" name="kode" />
                            <label for="kua">Kode KUA</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="kota" type="text" placeholder="Kota" name="kota" />
                            <label for="kota">Kota</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="kecamatan" type="text" placeholder="Kecamatan" name="kecamatan" />
                            <label for="kecamatan">Kecamatan</label>
                        </div>

                        <button class="btn btn-primary">Tambah</button>
                    </form>
                <?php } else { ?>
                    <form method="POST" action=" <?= base_url('admin/edit/update_kua/' . $edit->id) ?>">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="kua" type="text" placeholder="Kode KUA" name="kode" value="<?= $edit->kode_kua ?>" />
                            <label for="kua">Kode KUA</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="kota" type="text" placeholder="Kota" name="kota" value="<?= $edit->kota ?>" />
                            <label for="kota">Kota</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="kecamatan" type="text" placeholder="Kecamatan" name="kecamatan" value="<?= $edit->kecamatan ?>" />
                            <label for="kecamatan">Kecamatan</label>
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
                            <th>Kode</th>
                            <th>Kota</th>
                            <th>Kecamatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $d) : ?>
                            <tr>
                                <td><?= $d->kode_kua ?></td>
                                <td><?= $d->kota ?></td>
                                <td><?= $d->kecamatan ?></td>
                                <td>
                                    <a href="<?= base_url('admin/page/edit_kua/' . $d->id) ?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a>
                                    <a href="<?= base_url('admin/delete/delete_kua/' . $d->id) ?>" class="btn btn-warning btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
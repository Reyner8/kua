<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/header.php');
?>

<h1 class="mt-4">Pendaftaran</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Admin/Data Pendaftar</li>
</ol>
<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data calon pasangan yang mndaftar ke KUA
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No. Daftar</th>
                            <th>Nama Suami</th>
                            <th>Nama Istri</th>
                            <th>Tempat Nikah</th>
                            <th>Tanggal Nikah</th>
                            <th>Alamat</th>
                            <th>Kode KUA</th>
                            <th>Kota / Kecamatan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pria as $d) : ?>
                            <tr>
                                <td><?= $d->no_daftar ?></td>
                                <td><?= $d->nama ?></td>
                                <?php foreach ($wanita as $w) : ?>
                                    <?php if ($d->id_pasangan == $w->id) : ?>
                                        <td><?= $w->nama ?></td>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <td><?= $d->tempat_nikah ?></td>
                                <td><?= $d->tanggal_nikah ?></td>
                                <td><?= $d->alamat ?></td>
                                <td><?= $d->kode_kua ?></td>
                                <td><?= $d->kota . ' / ' . $d->kecamatan ?></td>
                                <td><?= $d->approve ?></td>
                                <td>
                                    <?php if ($d->approve == 'pending') { ?>
                                        <a href="<?= base_url('admin/edit/update_registration/approved/' . $d->id) ?>"><i class="fa fa-check" aria-hidden="true"></i></a>
                                        <a href="<?= base_url('admin/edit/update_registration/rejected/' . $d->id) ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
                                    <?php } elseif ($d->approve == 'approved') { ?>
                                        <a href="<?= base_url('admin/edit/update_registration/rejected/' . $d->id) ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
                                    <?php } elseif ($d->approve == 'rejected') { ?>
                                        <a href="<?= base_url('admin/edit/update_registration/approved/' . $d->id) ?>"><i class="fa fa-check" aria-hidden="true"></i></a>
                                    <?php } ?>
                                    <a href="<?= base_url('admin/page/detail_registration/' . $d->id) ?>"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
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
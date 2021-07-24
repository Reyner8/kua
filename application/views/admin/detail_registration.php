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
                <div class="row">
                    <div class="col-md-6">
                        <div class="sub-title">
                            <h3>Suami</h3>
                        </div>
                        <hr>
                        <div class="grid-item">
                            <table style="width: 100%;">
                                <tr>
                                    <th>NIK</th>
                                    <td>: <?= $pria->nik ?></td>
                                </tr>
                                <tr>
                                    <th>Kewarganegaraan</th>
                                    <td>: <?= $pria->kewarganegaraan ?></td>
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <td>: <?= $pria->nama ?></td>
                                </tr>
                                <tr>
                                    <th>Tempat Lahir</th>
                                    <td>: <?= $pria->tempat_lahir ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td>: <?= $pria->tanggal_lahir ?></td>
                                </tr>
                                <tr>
                                    <th>Umur</th>
                                    <td>: <?= $pria->umur ?></td>
                                </tr>
                                <tr>
                                    <th>JK</th>
                                    <td>: <?= $pria->jk ?></td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>: <?= $pria->status ?></td>
                                </tr>
                                <tr>
                                    <th>Agama</th>
                                    <td>: <?= $pria->agama ?></td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>: <?= $pria->alamat ?></td>
                                </tr>
                                <tr>
                                    <th>Pekerjaan</th>
                                    <td>: <?= $pria->pekerjaan ?></td>
                                </tr>
                                <tr>
                                    <th>Telepon</th>
                                    <td>: <?= $pria->no_tlp ?></td>
                                </tr>

                                <tr>
                                    <th>
                                    </th>
                                </tr>
                            </table>
                        </div>
                        <img src="<?= base_url('assets/pendaftaran/' . $pria->foto) ?>" style="width: 150px;">
                    </div>
                    <div class="col-md-6">
                        <div class="sub-title">
                            <h3>istri</h3>
                        </div>
                        <hr>

                        <div class="grid-item">
                            <table style="width: 100%;">
                                <tr>
                                    <th>NIK</th>
                                    <td>: <?= $wanita->nik ?></td>
                                </tr>
                                <tr>
                                    <th>Kewarganegaraan</th>
                                    <td>: <?= $wanita->kewarganegaraan ?></td>
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <td>: <?= $wanita->nama ?></td>
                                </tr>
                                <tr>
                                    <th>Tempat Lahir</th>
                                    <td>: <?= $wanita->tempat_lahir ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td>: <?= $wanita->tanggal_lahir ?></td>
                                </tr>
                                <tr>
                                    <th>Umur</th>
                                    <td>: <?= $wanita->umur ?></td>
                                </tr>
                                <tr>
                                    <th>JK</th>
                                    <td>: <?= $wanita->jk ?></td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>: <?= $wanita->status ?></td>
                                </tr>
                                <tr>
                                    <th>Agama</th>
                                    <td>: <?= $wanita->agama ?></td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>: <?= $wanita->alamat ?></td>
                                </tr>
                                <tr>
                                    <th>Pekerjaan</th>
                                    <td>: <?= $wanita->pekerjaan ?></td>
                                </tr>
                                <tr>
                                    <th>Telepon</th>
                                    <td>: <?= $wanita->no_tlp ?></td>
                                </tr>

                                <tr>
                                    <th>
                                    </th>
                                </tr>
                            </table>
                        </div>
                        <img src="<?= base_url('assets/pendaftaran/' . $wanita->foto) ?>" style="width: 150px;">
                    </div>
                    <div class="col-md-12">
                        <div>
                            <h3>Berkas</h3>
                        </div>
                        <div class="row">
                            <?php foreach ($berkas as $b) : ?>
                                <div class="col-md-3 border">
                                    <a href="<?= base_url('assets/pendaftaran/' . $b->nama)  ?>" download="download"><?= $b->nama ?></a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
</div>
<?php
require_once(__ROOT__ . '/footer.php');
?>
<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/header.php');
?>

<h1 class="mt-4">Survey</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Admin/Data Survey</li>
</ol>
<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data survey yang di isi oleh penduduk
            </div>
            <div class="card-body">
                 <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $d) :?>
                            <tr>
                                <td><?= $d->nama ?></td>
                                <td><?= $d->deskripsi ?></td>
                                <td>
                                    <a href="<?= base_url('admin/delete/delete_survey/'. $d->id) ?>" class="btn btn-danger btn-small"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
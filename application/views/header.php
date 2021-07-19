<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

    <link href="<?= base_url('assets/css/styles.css'); ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/custom.css'); ?>" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-light bg-light">
        <!-- Navbar Brand-->
        <img src="<?= base_url('assets/logo.png') ?>" alt="Logo" class="navbar-brand ps-3">
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar-->
        <div class="navbar-title mt-2 mb-2">
            <h4>Kantor Urusan Agama (KUA) Kota Kupang</h4>
            <p>"Terbentuknya Masyarakat Yang Islami, Berakhlakul Karimah dan Tercapainya Layanan Prima"<br>
                Jl. Kakatua No. 11 Bonipoi, Kupang Nusa Tenggara Timur. Telepon : 0852-3944-0094</p>
        </div>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <?php if ($this->session->userdata('role')) { ?>
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link" href="<?= base_url('admin/page/dashboard') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="<?= base_url('admin/page/registration') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                                Data Pendaftaran
                            </a>
                            <a class="nav-link" href="<?= base_url('admin/page/news') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Data Berita
                            </a>
                            <a class="nav-link" href="<?= base_url('admin/page/survey') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Data Survey
                            </a>
                            <a class="nav-link" href="<?= base_url('auth/logout') ?>">
                                <div class="sb-nav-link-icon"><i class="fa fa-sign-out-alt" aria-hidden="true"></i></div>
                                Logout
                            </a>
                        </div>
                    <?php } else { ?>
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link" href="<?= base_url('page') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="<?= base_url('page/information_kua') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-info-circle"></i></div>
                                Informasi KUA
                            </a>
                            <a class="nav-link" href="<?= base_url('page/information_registration') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Informasi Pendaftaran Pernikahan
                            </a>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Pendaftaran <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?= base_url('page/registration') ?>">Form Daftar Nikah</a>
                                    <a class="nav-link" href="<?= base_url('page/check_registration') ?>">Cek Pendaftaran Nikah</a>
                                </nav>
                            </div>
                            <a class="nav-link" href="<?= base_url('page/survey') ?>">
                                <div class="sb-nav-link-icon"><i class="fa fa-question" aria-hidden="true"></i></div>
                                Survey
                            </a>
                            <a class="nav-link" href="<?= base_url('page/contact_person') ?>">
                                <div class="sb-nav-link-icon"><i class="fa fa-address-book" aria-hidden="true"></i></div>
                                Contact Person
                            </a>
                            <hr>
                            <a class="nav-link" href="<?= base_url('page/contact_person') ?>">
                                <div class="sb-nav-link-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                                Admin Login
                            </a>
                        </div>
                    <?php } ?>
                </div>

            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
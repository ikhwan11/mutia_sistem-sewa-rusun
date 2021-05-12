<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/backend'); ?>/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= base_url('assets/backend'); ?>/img/favicon.png">
    <title>
        <?= $title; ?>
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="<?= base_url('assets/backend'); ?>/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="<?= base_url('assets/backend'); ?>/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?= base_url('assets/backend'); ?>/demo/demo.css" rel="stylesheet" />

    <!-- mod -->
    <link href="<?= base_url('assets/'); ?>mod/style.css" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper">
        <div class="sidebar">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="
                    <?php if ($this->uri->segment(1) == "back") {
                        echo "active";
                    } ?>
                    ">
                        <a href="<?= base_url('back/'); ?>">
                            <i class="tim-icons icon-chart-pie-36"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li class="
                    <?php if ($this->uri->segment(1) == "unit") {
                        echo "active";
                    } ?>
                    ">
                        <a href="<?= base_url('unit/'); ?>">
                            <i class="far fa-building"></i>
                            <p>Kelola unit</p>
                        </a>
                    </li>

                    <li class="
                    <?php if ($this->uri->segment(1) == "pelanggan") {
                        echo "active";
                    } ?>
                    ">
                        <a href="<?= base_url('pelanggan/'); ?>">
                            <i class="tim-icons icon-badge"></i>
                            <p>Kelola pelanggan</p>
                        </a>
                    </li>

                    <li class="
                    <?php if ($this->uri->segment(1) == "") {
                        echo "active";
                    } ?>
                    ">
                        <a href="<?= base_url(''); ?>">
                            <i class="tim-icons icon-money-coins"></i>
                            <p>Transaksi</p>
                        </a>
                    </li>

                    <li class="
                    <?php if ($this->uri->segment(1) == "") {
                        echo "active";
                    } ?>
                    ">
                        <a href="<?= base_url(''); ?>">
                            <i class="tim-icons icon-email-85"></i>
                            <p>Kotak masuk</p>
                        </a>
                    </li>

                    <li class="
                    <?php if ($this->uri->segment(1) == "") {
                        echo "active";
                    } ?>
                    ">
                        <a href="<?= base_url(''); ?>">
                            <i class="tim-icons icon-tv-2"></i>
                            <p>Berita</p>
                        </a>
                    </li>

                    <li class="
                    <?php if ($this->uri->segment(1) == "user") {
                        echo "active";
                    } ?>
                    ">
                        <a href="<?= base_url('user/'); ?>">
                            <i class="tim-icons icon-single-02"></i>
                            <p>Kelola User</p>
                        </a>
                    </li>

                    <li class="
                    <?php if ($this->uri->segment(1) == "") {
                        echo "active";
                    } ?>
                    ">
                        <a href="<?= base_url(''); ?>">
                            <i class="tim-icons icon-single-copy-04"></i>
                            <p>Laporan</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
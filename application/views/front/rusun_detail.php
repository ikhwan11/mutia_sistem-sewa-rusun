<section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('<?= base_url('assets/frontend/'); ?>images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url('front/'); ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Rusun <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Detail Rusun</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-property-details">
    <div class="container">
        <?php foreach ($unit as $u) : ?>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="property-details">
                        <div class="img" style="background-image: url(<?= base_url('assets/frontend/'); ?>images/work-1.jpg);"></div>
                        <div class="text text-center">
                            <span class="subheading">Lantai <?= $u['lantai']; ?></span>
                            <?php if ($u['id_rusun'] == '1') { ?>
                                <h2>Rusun Sekupang</h2>
                            <?php } else if ($u['id_rusun'] == '2') { ?>
                                <h2>Rusun Tanjung Ucang</h2>
                            <?php } else if ($u['id_rusun'] == '3') { ?>
                                <h2>Rusun Muka Kuning</h2>
                            <?php } else if ($u['id_rusun'] == '4') { ?>
                                <h2>Rusun Kabil</h2>
                            <?php } else { ?>
                                <h2>Rusun Batu Ampar</h2>
                            <?php } ?>
                        </div>
                        <div class="text text-center">
                            <h3>Rp. <?= number_format($u['harga'], 0, ',', '.'); ?><small>/Bln</small></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 pills">
                    <div class="bd-example bd-example-tabs">
                        <div class="d-flex justify-content-center">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                                <div class="row">
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <ul class="features">
                                            <li class="check"><span class="ion-ios-checkmark"></span>Kamar : <?= $u['kamar']; ?> Kamar</li>
                                            <li class="check"><span class="ion-ios-checkmark"></span>Ac : <?= $u['ac']; ?></li>
                                            <li class="check"><span class="ion-ios-checkmark"></span>Kamar mandi : <?= $u['kamar_mandi']; ?></li>
                                            <li class="check"><span class="ion-ios-checkmark"></span>Dapur : <?= $u['dapur']; ?></li>
                                            <li class="check"><span class="ion-ios-checkmark"></span>Bed : <?= $u['bed']; ?> Kasur Tingkat</li>
                                        </ul>
                                        </ul>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <a href="" class="btn btn-primary btn-lg">Ajukan penyewaan</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
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
                                    <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Fasilitas tersedia</a>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Syarat dan ketentuan</a>
                                </li>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                                <div class="row">
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="features">
                                            <li class="check"><span class="ion-ios-checkmark"></span>Kamar : <?= $u['kamar']; ?> Kamar</li>
                                            <li class="check"><span class="ion-ios-checkmark"></span>Ac : <?= $u['ac']; ?></li>
                                            <li class="check"><span class="ion-ios-checkmark"></span>Kamar mandi : <?= $u['kamar_mandi']; ?></li>
                                            <li class="check"><span class="ion-ios-checkmark"></span>Dapur : <?= $u['dapur']; ?></li>
                                            <li class="check"><span class="ion-ios-checkmark"></span>Bed : <?= $u['bed']; ?> Kasur Tingkat</li>
                                        </ul>
                                        <p><span><small class="text-warning"> *untuk melanjutkan penyewaan terdapat di syarat dan ketentuan</small></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Persyaratan menyewa rusun</h3>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title">Mohon perhatikan lengkapi syarat sebagai berikut untuk menyewa</h6>
                                        <p class="card-text">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">KTP asli</li>
                                            <li class="list-group-item">surat keterangan kerja</li>
                                        </ul>
                                        </p>
                                        <a href="<?= base_url('rusun/sewa/') . $u['id_unit']; ?>" class="btn btn-primary btn-lg">Lanjutkan</a>
                                        <span><small class="text-warning"> * tekan tombol lanjutkan untuk melakukan penyewaan rusun</small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
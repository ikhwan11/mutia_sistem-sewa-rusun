<section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('<?= base_url('assets/frontend/'); ?>images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url('front/'); ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Rusun <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Choose <br>Dream House</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <?php echo $this->session->flashdata('pesan') ?>
        <p>Pilih wilayah :</p>
        <div class="row">
            <div class="col-md-4">
                <form action="" method="POST">
                    <div class="input-group mb-3">
                        <select type="number" class="form-control" name="keyword">
                            <option value="">--Tentukan wilayah--</option>
                            <option value="1" class="text-dark">Rusun Sekupang</option>
                            <option value="2" class="text-dark">Rusun Tanjung Ucang</option>
                            <option value="3" class="text-dark">Rusun Muka Kuning</option>
                            <option value="4" class="text-dark">Rusun Kabil</option>
                            <option value="5" class="text-dark">Rusun Batu Ampar</option>
                        </select>
                        <div class="input-group-append">
                            <input class="btn btn-primary btn-sm" type="submit" name="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <span class="text-danger">Result : <?= $total_rows; ?></span>
        <div class="row">
            <?php foreach ($unit as $u) : ?>
                <div class="col-md-4">
                    <div class="property-wrap ftco-animate">
                        <a href="<?= base_url('rusun/rusun_detail/') . $u['id_unit']; ?>" class="img" style="background-image: url(<?= base_url('assets/frontend/'); ?>images/work-1.jpg);"></a>
                        <div class="text">
                            <p class="price"><span class="orig-price"> Rp. <?= number_format($u['harga'], 0, ',', '.'); ?><small>/Bln</small></span></p>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Kamar</td>
                                        <td>:</td>
                                        <td><?= $u['kamar']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>AC</td>
                                        <td>:</td>
                                        <td><?= $u['ac']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kamar Mandi</td>
                                        <td>:</td>
                                        <td><?= $u['kamar_mandi']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Dapur</td>
                                        <td>:</td>
                                        <td><?= $u['dapur']; ?></td>
                                    </tr>
                                    <tr>
                                        <?php if ($u['status'] == 'Kosong') { ?>
                                            <td>Status</td>
                                            <td>:</td>
                                            <td style="color: crimson;"><?= $u['status']; ?></td>
                                        <?php } else { ?>
                                            <td>Status</td>
                                            <td>:</td>
                                            <td style="color: chartreuse;"><?= $u['status']; ?></td>
                                        <?php } ?>

                                    </tr>
                                </tbody>
                            </table><br>
                            <div>
                                <?php if ($u['id_rusun'] == '1') { ?>
                                    <h3><a href="<?= base_url('rusun/rusun_detail/') . $u['id_unit']; ?>">Rusun Sekupang</a></h3>
                                <?php } else if ($u['id_rusun'] == '2') { ?>
                                    <h3><a href="<?= base_url('rusun/rusun_detail/') . $u['id_unit']; ?>">Rusun Tanjung Ucang</a></h3>
                                <?php } else if ($u['id_rusun'] == '3') { ?>
                                    <h3><a href="<?= base_url('rusun/rusun_detail/') . $u['id_unit']; ?>">Rusun Muka Kuning</a></h3>
                                <?php } else if ($u['id_rusun'] == '4') { ?>
                                    <h3><a href="<?= base_url('rusun/rusun_detail/') . $u['id_unit']; ?>">Rusun Kabil</a></h3>
                                <?php } else { ?>
                                    <h3><a href="<?= base_url('rusun/rusun_detail/') . $u['id_unit']; ?>">Rusun Batu Ampar</a></h3>
                                <?php } ?>
                            </div>



                            <span class="location">Lantai <?= $u['lantai']; ?></span>
                            <a href="<?= base_url('rusun/rusun_detail/') . $u['id_unit']; ?>" class="d-flex align-items-center justify-content-center btn-custom">
                                <span class="ion-ios-link"></span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div> -->
        <div class="col">
            <?= $this->pagination->create_links();; ?>
        </div>
    </div>
</section>
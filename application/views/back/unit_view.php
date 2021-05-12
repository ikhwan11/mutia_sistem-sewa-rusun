<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card  card-plain">
                <div class="card-header">
                    <h2 class="card-title"><i class="far fa-building "></i> <b>Data unit</b></h2>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <hr>
                </div>
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
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter " id="">
                            <span class="text-warning">Result : <?= $total_rows; ?></span>
                            <thead class=" text-primary">
                                <tr>
                                    <th>No</th>
                                    <th>Wilayah</th>
                                    <th>Tipe</th>
                                    <th>Lantai</th>
                                    <th>No unit</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($unit)) : ?>
                                    <tr>
                                        <td colspan="6">
                                            <div class="alert alert-danger" role="alert">
                                                data not found!
                                            </div>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                                <?php foreach ($unit as $u) : ?>
                                    <tr>
                                        <td><?= ++$start; ?></td>

                                        <?php if ($u['id_rusun'] == '1') { ?>
                                            <td>Rusun Sekupang</td>
                                        <?php } else if ($u['id_rusun'] == '2') { ?>
                                            <td>Rusun Tanjung Ucang</td>
                                        <?php } else if ($u['id_rusun'] == '3') { ?>
                                            <td>Rusun Muka Kuning</td>
                                        <?php } else if ($u['id_rusun'] == '4') { ?>
                                            <td>Rusun Kabil</td>
                                        <?php } else { ?>
                                            <td>Rusun Batu Ampar</td>
                                        <?php } ?>

                                        <td>Type <?= $u['type']; ?></td>
                                        <td>Lantai <?= $u['lantai']; ?></td>
                                        <td>No <?= $u['lantai']; ?></td>
                                        <?php if ($u['status'] == 'Kosong') { ?>
                                            <td>
                                                <p style="color:crimson"><?= $u['status']; ?></p>
                                            </td>
                                        <?php } else { ?>
                                            <td>
                                                <p style="color:chartreuse"><?= $u['status']; ?></p>
                                            </td>
                                        <?php } ?>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="col">
                            <?= $this->pagination->create_links();; ?>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url('unit/tambah'); ?>" class="btn btn-info"><i class="tim-icons icon-simple-add"></i> Tambah Data Unit</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
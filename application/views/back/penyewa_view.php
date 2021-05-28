<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card  card-plain">
                <div class="card-header">
                    <h2 class="card-title"><i class="far fa-building "></i> <b>Data penyewa</b></h2>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <form action="" method="POST">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="keyword" placeholder="Cari penyewa">
                                <div class="input-group-append">
                                    <input class="btn btn-primary btn-sm" type="submit" name="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php echo $this->session->flashdata('pesan') ?>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>tempat/Tanggal lahir</th>
                                    <th>Jenis kelamin</th>
                                    <th>Tempat kerja</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($penyewa)) : ?>
                                    <tr>
                                        <td colspan="6">
                                            <div class="alert alert-danger" role="alert">
                                                data not found!
                                            </div>
                                        </td>
                                    </tr>
                                <?php endif; ?>

                                <?php foreach ($penyewa as $p) : ?>
                                    <tr>
                                        <td><?= ++$start; ?></td>
                                        <td><?= $p['nama']; ?></td>
                                        <td><?= $p['tempat_lahir']; ?>/<?= $p['tanggal_lahir']; ?></td>
                                        <td><?= $p['jenis_kelamin']; ?></td>
                                        <td><?= $p['tempat_kerja']; ?></td>
                                        <td>
                                            <a href="<?= base_url('penyewa/detail/') . $p['id_penyewa']; ?>" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card  card-plain">
                <div class="card-header">
                    <h2 class="card-title"><i class="far fa-building "></i> <b>Data formulir masuk</b></h2>
                    <hr>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>ID Unit</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($formulir)) : ?>
                                    <tr>
                                        <td colspan="6">
                                            <div class="alert alert-danger" role="alert">
                                                data not found!
                                            </div>
                                        </td>
                                    </tr>
                                <?php endif; ?>

                                <?php foreach ($formulir as $f) : ?>
                                    <tr>
                                        <td><?= ++$start; ?></td>

                                        <td><?= $f['nama']; ?></td>
                                        <td><?= $f['id_unit']; ?></td>

                                        <td>
                                            <a href="<?= base_url('form/tambah_penyewa/') . $f['id_sewa']; ?>" class="btn btn-sm btn-primary">Tambah Penyewa</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="col">
                            <?= $this->pagination->create_links();; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
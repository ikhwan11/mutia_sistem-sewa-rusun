<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card  card-plain">
                <div class="card-header">
                    <h2 class="card-title"><i class="far fa-building "></i> <b>Data transaksi</b></h2>
                    <hr class="d-print-none">
                </div>
                <div>
                    <a href="<?= base_url('transaksi/tambah_transaksi'); ?>" class="d-print-none btn btn-success mb-3">Tambah Transaksi</a>
                </div>
                <?php echo $this->session->flashdata('pesan') ?>
                <hr class="d-print-none">
                <div>
                    <h3 class="d-print-none">filter data :</h3>
                    <form action="<?= base_url('transaksi/'); ?>" method="POST" class="d-print-none">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group text-white">
                                    <label>Dari tanggal :</label>
                                    <input type="date" class="form-control" id="dari" name="dari">
                                    <?php echo form_error('dari', '<span class=" text-small text-danger">', '</span>') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group text-white">
                                    <label>Sampai Tanggal:</label>
                                    <input type="date" class="form-control" id="sampai" name="sampai">
                                    <?php echo form_error('sampai', '<span class=" text-small text-danger">', '</span>') ?>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary text-white">Filter</button>
                        <span><small class="text-muted text-white"> * Tekan tombol filter untuk menampilkan data</small></span>
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th>No</th>
                                    <th>Jenis transaksi</th>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>ID Unit</th>
                                    <th>total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($transaksi)) : ?>
                                    <tr>
                                        <td colspan="5">
                                            <div class="alert alert-danger" role="alert">
                                                data not found!
                                            </div>
                                        </td>
                                    </tr>
                                <?php endif; ?>

                                <?php $no = 1;
                                foreach ($transaksi as $tr) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $tr['jenis_transaksi']; ?></td>
                                        <td><?= $tr['atas_nama']; ?></td>
                                        <td><?= $tr['tanggal']; ?></td>
                                        <td><?= $tr['id_unit']; ?></td>
                                        <td>Rp. <?= number_format($tr['total'], 0, ',', '.'); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="col">
                            <?= $this->pagination->create_links(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
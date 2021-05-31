<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card  card-plain">
                <div class="card-header">
                    <h2 class="card-title"><i class="far fa-building "></i> <b>Data transaksi</b></h2>
                    <hr>
                </div>
                <div>
                    <a href="<?= base_url('transaksi/tambah_transaksi'); ?>" class="btn btn-success mb-3">Tambah Transaksi</a>
                </div>
                <hr>
                <div>
                    <h3>filter data :</h3>
                    <form action="<?= base_url('transaksi/'); ?>" method="POST">
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
            </div>
        </div>
    </div>
</div>
</div>
</div>
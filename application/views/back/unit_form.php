<div class="content">
    <div class="row">
        <div class="col">
            <div class="card card-chart">
                <div class="card-header">
                    <h3 class="card-title"><b>Form tambah unit</b></h3>
                    <hr>
                </div>
                <div class="card-body">
                    <div class="container">
                        <form action="<?= base_url('unit/tambah_aksi'); ?>" method="POST">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group text-white">
                                        <label>wilayah :</label>
                                        <select class="form-control" id="wilayah" name="wilayah">
                                            <?php foreach ($rusun as $rn) : ?>
                                                <option value="<?= $rn['id_rusun']; ?>" class="text-dark"><?= $rn['wilayah']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group text-white">
                                        <label>Type :</label>
                                        <select class="form-control" id="type" name="type">
                                            <option value="21" class="text-dark">21</option>
                                            <option value="36" class="text-dark">36</option>
                                            <option value="27" class="text-dark">27</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group text-white">
                                        <label>Lantai :</label>
                                        <input type="number" class="form-control" id="lantai" name="lantai">
                                        <?php echo form_error('lantai', '<span class=" text-small text-danger"><small>', '</small></span>') ?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group text-white">
                                        <label>No :</label>
                                        <input type="number" class="form-control" id="no" name="no">
                                        <?php echo form_error('no', '<span class=" text-small text-danger"><small>', '</small></span>') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="<?= base_url('unit/'); ?>" class="btn btn-warning">Kembali</a><br>
                                    <span><small class="text-warning">* tekan tombol save untuk menyimpan data</small></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
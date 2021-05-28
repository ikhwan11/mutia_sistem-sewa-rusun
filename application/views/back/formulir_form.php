<div class="content">
    <div class="row">
        <div class="col">
            <div class="card card-chart">
                <div class="card-header">
                    <h3 class="card-title"><b>Form tambah penyewa</b></h3>
                    <hr>
                </div>
                <div class="card-body">
                    <div class="container">
                        <form action="<?= base_url('form/tambah_penyewa_aksi'); ?>" method="POST">
                            <?php foreach ($penyewa as $p) : ?>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group text-white">
                                            <label>Nama Penyewa :</label>
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $p['nama']; ?>" required>
                                            <input type="hidden" class="form-control" id="id_unit" name="id_unit" value="<?= $p['id_unit']; ?>">
                                            <input type="hidden" class="form-control" id="id_sewa" name="id_sewa" value="<?= $p['id_sewa']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group text-white">
                                            <label>Tempat lahir :</label>
                                            <input type="text" class="form-control" id="tl" name="tl" value="<?= $p['tempat_lahir']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group text-white">
                                            <label>Tanggal lahir :</label>
                                            <input type="date" class="form-control" id="tgl" name="tgl" value="<?= $p['tanggal_lahir']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group text-white">
                                            <label>Alamat :</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $p['alamat']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group text-white">
                                            <label>Jenis Kelamin :</label>
                                            <select type="text" class="form-control" id="jk" name="jk" required>
                                                <option value="">--Pilih Jenis Kelamin--</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <h4>Info kontak : </h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group text-white">
                                            <label>No hp/wa :</label>
                                            <input type="number" class="form-control" id="no_hp" name="no_hp" value="<?= $p['no_hp']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group text-white">
                                            <label>Email :</label>
                                            <input type="email" class="form-control" id="email" name="email" value="<?= $p['email']; ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group text-white">
                                            <label>Tempat kerja :</label>
                                            <input type="text" class="form-control" id="tkerja" name="tkerja" value="<?= $p['tempat_kerja']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <a href="<?= base_url('form/'); ?>" class="btn btn-warning">Kembali</a><br>
                                        <span><small class="text-warning">* harap cek data sekali lagi sebelum menyimpan data</small></span>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
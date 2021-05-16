<section class="ftco-section contact-section">
    <div class="container">
        <div class="row block-9 justify-content-center mb-5">
            <div class="col-md-8 mb-md-5">
                <h2 class="text-center">Isi form pengajuan sewa <br><small class="text-warning">*Pastikan data yang anda masukan asli dan benar</small></h2>
                <form action="<?= base_url('rusun/tambah_sewa'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="row">
                            <div class="col mb-3">
                                <label>Nama Lengkap :</label>

                                <?php foreach ($unit as $u) : ?>
                                    <input type="hidden" class="form-control" name="id_unit" value="<?= $u['id_unit']; ?>">
                                <?php endforeach; ?>

                                <input type="text" class="form-control" placeholder="Text there.." name="nama" autocomplete="off" autofocus required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label>Tempat dan tanggal lahir :</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Text there.." name="tml" required>
                            </div>
                            <div class="col-md-5">
                                <input type="date" class="form-control" name="tgl" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-2">
                                <label>Info kontak :</label>
                            </div>
                            <div class="col-md-5">
                                <input type="number" class="form-control" placeholder="No hp.." name="no_hp" autocomplete="off" required>
                            </div>
                            <div class="col-md-5">
                                <input type="email" class="form-control" placeholder="Email.." name="email" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label>Alamat Sekarang :</label>
                                <textarea class="form-control" name="alamat" id="alamat" cols="45" rows="3" required></textarea>
                            </div>
                            <div class="col-md-6">
                                <p></p><br>
                                <span><small class="text-warning">*isi alamat secara spesifik dan jelas</small></span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label>Tempat kerja :</label>
                                <input type="text" class="form-control" placeholder="Text there.." name="kerja" required>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="form-group">
                        <h3>Upload berkas :</h3>
                        <span><small class="text-warning">*Berkas KTP dan keterangan kerja dijadikan dalam satu file</small></span>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="file" name="berkas" id="berkas" class="form-control" required>
                            </div>
                            <span><small class="text-danger">*format file harus pdf</small></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Simpan" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <?php foreach ($penyewa as $p) : ?>
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-5">
                                <?php if ($p['foto'] == !null) { ?>
                                    <img src="<?= base_url('assets/foto/') . $p['foto']; ?>" class="rounded float-left" width="300">
                                <?php } else if ($p['jenis_kelamin'] == 'Laki-laki') { ?>
                                    <img src="<?= base_url('assets/foto/default_male.jpg'); ?>" class="rounded float-left" width="300">
                                <?php } else { ?>
                                    <img src="<?= base_url('assets/foto/default_female.jpg'); ?>" class="rounded float-left" width="300">
                                <?php } ?>
                            </div>
                            <div class="col-md-6">
                                <h3 class="card-title"><?= $p['nama']; ?></h3>
                            </div>
                        </div>
                        <div class="container mt-3">
                            <div class="row">
                                <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#Foto"><i class="fas fa-camera"></i> Ganti foto</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table tablesorter " id="">
                                <tbody>
                                    <tr>
                                        <td>
                                            Jenis Kelamin
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <?= $p['jenis_kelamin']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Tempat/Tanggal lahir
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <?= $p['tempat_lahir']; ?>/<?= $p['tanggal_lahir']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            No Hp/wa
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <?= $p['no_hp']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Email
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <?= $p['email']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Alamat
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <?= $p['alamat']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Tempat kerja
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <?= $p['tempat_kerja']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Lokasi rusun
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <?= $p['wilayah']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Lantai
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <?= $p['lantai']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Type
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <?= $p['type']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Harga sewa
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            Rp. <?= number_format($p['harga'], 0, ',', '.'); ?>/Bln
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <a href="<?= base_url('penyewa/'); ?>" class="btn btn-warning">Kembali</a>
            <button class="btn btn-danger" data-toggle="modal" data-target="#modalHapus">Hapus</button>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLabel">Warning !</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('') . $p['id_penyewa']; ?>" method="POST">
                <div class="modal-body">
                    apakah anda yakin ingin menghapus data ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal -->
<div class="modal fade" id="Foto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">Ubah foto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('penyewa/update_foto'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <label>Unggah foto baru :</label>
                    <input type="file" class="form-control text-dark" name="foto">
                    <input type="hidden" class="form-control" name="id" value="<?= $p['id_penyewa']; ?>">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Unggah</button>
                </div>
            </form>
        </div>
    </div>
</div>
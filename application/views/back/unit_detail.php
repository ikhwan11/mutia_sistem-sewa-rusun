<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <?php foreach ($unit as $u) : ?>
                    <div class="card-header">
                        <?php if ($u['id_rusun'] == '1') { ?>
                            <h3 class="card-title"> Rusun Sekupang <span> Lantai <?= $u['lantai']; ?> </span></h3>
                        <?php } else if ($u['id_rusun'] == '2') { ?>
                            <h3 class="card-title"> Rusun Tanjung Ucang <span> Lantai <?= $u['lantai']; ?> </span></h3>
                        <?php } else if ($u['id_rusun'] == '3') { ?>
                            <h3 class="card-title"> Rusun Muka Kuning <span> Lantai <?= $u['lantai']; ?> </span></h3>
                        <?php } else if ($u['id_rusun'] == '4') { ?>
                            <h3 class="card-title"> Rusun Kabil <span> Lantai <?= $u['lantai']; ?> </span></h3>
                        <?php } else { ?>
                            <h3 class="card-title"> Rusun Batu Ampar <span> Lantai <?= $u['lantai']; ?> </span></h3>
                        <?php } ?>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table tablesorter " id="">
                                <tbody>
                                    <tr>
                                        <td>
                                            Status
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <?= $u['status']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            type
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <?= $u['type']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Jumlah kamar
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <?= $u['kamar']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Jumlah kasur
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <?= $u['bed']; ?> Kasur Tingkat
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            AC
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <?= $u['ac']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Kamar Mandi
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <?= $u['kamar_mandi']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Dapur
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <?= $u['dapur']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Lemari
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <?= $u['lemari']; ?> Unit
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
                                            Rp. <?= number_format($u['harga'], 0, ',', '.'); ?>/Bln
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <a href="<?= base_url('unit/'); ?>" class="btn btn-warning">Kembali</a>
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
            <form action="<?= base_url('unit/delete/') . $u['id_unit']; ?>" method="POST">
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
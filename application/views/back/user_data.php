<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title"> Data User</h4>
                    <?php echo $this->session->flashdata('pesan') ?>
                </div>
                <div class="col">
                    <a href="<?= base_url('user/tambah'); ?>" class="btn btn-sm btn-warning text-white">Tambah User</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>username</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <?php $no = 1;
                            foreach ($user as $u) : ?>
                                <tbody>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $u['nama']; ?></td>
                                        <td><?= $u['username']; ?></td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-success text-white">Ubah password</a>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
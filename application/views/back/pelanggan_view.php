<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card  card-plain">
                <div class="card-header">
                    <h2 class="card-title"><i class="far fa-building "></i> <b>Data pelanggan</b></h2>
                    <hr>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tanggal lahir</th>
                                    <th>Jenis kelamin</th>
                                    <th>pekerjaan</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>sonia</td>
                                    <td>12-3-97</td>
                                    <td>Perempuan</td>
                                    <td>wiraswasta</td>
                                    <td>
                                        <a href="<?= base_url('pelanggan/detail'); ?>" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url('pelanggan/tambah'); ?>" class="btn btn-warning"><i class="tim-icons icon-simple-add"></i> Tambah pelanggan</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
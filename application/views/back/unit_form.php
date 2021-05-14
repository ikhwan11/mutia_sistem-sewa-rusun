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
                                            <option value="1" class="text-dark">Rusun Sekupang</option>
                                            <option value="2" class="text-dark">Rusun Tanjung Ucang</option>
                                            <option value="3" class="text-dark">Rusun Muka Kuning</option>
                                            <option value="4" class="text-dark">Rusun Kabil</option>
                                            <option value="5" class="text-dark">Rusun Batu Ampar</option>
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
                                        <select class="form-control" id="lantai" name="lantai">
                                            <option value="1" class="text-dark">1</option>
                                            <option value="2" class="text-dark">2</option>
                                            <option value="3" class="text-dark">3</option>
                                            <option value="4" class="text-dark">4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group text-white">
                                        <label>Harga Sewa :</label>
                                        <select class="form-control" id="harga" name="harga">
                                            <option value="350000" class="text-dark">Rp. 350.000</option>
                                            <option value="400000" class="text-dark">Rp. 400.000</option>
                                            <option value="450000" class="text-dark">Rp. 450.000</option>
                                            <option value="475000" class="text-dark">Rp. 475.000</option>
                                            <option value="525000" class="text-dark">Rp. 525.000</option>
                                            <option value="550000" class="text-dark">Rp. 550.000</option>
                                            <option value="575000" class="text-dark">Rp. 575.000</option>
                                            <option value="600000" class="text-dark">Rp. 600.000</option>
                                            <option value="625000" class="text-dark">Rp. 625.000</option>
                                            <option value="800000" class="text-dark">Rp. 800.000</option>
                                            <option value="850000" class="text-dark">Rp. 850.000</option>
                                        </select>
                                    </div>
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal"><small>List harga</small></button>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <h4>Fasilitas : </h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group text-white">
                                        <label>AC :</label>
                                        <select type="number" class="form-control" id="ac" name="ac">
                                            <option value="iya" class="text-dark">iya</option>
                                            <option value="tidak" class="text-dark">tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group text-white">
                                        <label>Kamar Mandi :</label>
                                        <select type="number" class="form-control" id="kamar_mandi" name="kamar_mandi">
                                            <option value="Luar" class="text-dark">Luar</option>
                                            <option value="Dalam" class="text-dark">Dalam</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group text-white">
                                        <label>Dapur :</label>
                                        <select type="number" class="form-control" id="dapur" name="dapur">
                                            <option value="Luar" class="text-dark">Luar</option>
                                            <option value="Dalam" class="text-dark">Dalam</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group text-white">
                                        <label>Jumlah kamar :</label>
                                        <select type="number" class="form-control" id="kamar" name="kamar">
                                            <option value="1" class="text-dark">1</option>
                                            <option value="2" class="text-dark">2</option>
                                            <option value="3" class="text-dark">3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group text-white">
                                        <label>Jumlah Bed :</label>
                                        <select type="number" class="form-control" id="bed" name="bed">
                                            <option value="1" class="text-dark">1 Kasur tingkat</option>
                                            <option value="2" class="text-dark">2 Kasur tingkat</option>
                                            <option value="3" class="text-dark">3 Kasur tingkat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group text-white">
                                        <label>Jumlah Lemari :</label>
                                        <select type="number" class="form-control" id="lemari" name="lemari">
                                            <option value="1" class="text-dark">1</option>
                                            <option value="2" class="text-dark">2</option>
                                            <option value="3" class="text-dark">3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="<?= base_url('unit/'); ?>" class="btn btn-warning">Kembali</a><br>
                                    <span><small class="text-warning">* harap cek data sekali lagi sebelum menyimpan data</small></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">List harga sewa</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-dark rounded">
                    <thead>
                        <tr>
                            <th class="text-primary">Wilayah</th>
                            <th class="text-primary">Lantai</th>
                            <th class="text-primary">Type</th>
                            <th class="text-primary">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($harga as $h) : ?>
                            <tr>
                                <td><?= $h['wilayah']; ?></td>
                                <td><?= $h['lantai']; ?></td>
                                <td><?= $h['type']; ?></td>
                                <td>Rp. <?= number_format($h['harga'], 0, ',', '.'); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
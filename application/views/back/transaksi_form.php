<div class="content">
    <div class="row">
        <div class="col">
            <div class="card card-chart">
                <div class="card-header">
                    <h3 class="card-title"><b>Form tambah transaksi</b></h3>
                    <hr>
                </div>
                <div class="card-body">
                    <div class="container">
                        <form action="<?= base_url('transaksi/tambah_transaksi_aksi'); ?>" method="POST">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group text-white">
                                        <label>Jenis transaksi :</label>
                                        <select class="form-control" id="jt" name="jt">
                                            <option value="" class="text-dark">== pilih jenis ==</option>
                                            <option value="Down payment/bail" class="text-dark">Down payment/bail</option>
                                            <option value="Rent money" class="text-dark">Rent money</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group text-white">
                                        <label>ID unit :</label>
                                        <input type="number" class="form-control" id="iu" name="iu">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group text-white">
                                        <label>Atas nama :</label>
                                        <input type="text" class="form-control" id="an" name="an">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group text-white">
                                        <label>tanggal :</label>
                                        <input type="date" class="form-control" id="tgl" name="tgl">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group text-white">
                                        <label>total :</label>
                                        <input type="number" class="form-control" id="total" name="total">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="<?= base_url('transaksi/'); ?>" class="btn btn-warning">Kembali</a><br>
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
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h1 class="card-title">Tambah user</h1>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('user/tambah_aksi'); ?>" method="POST">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group text-white">
                                    <label for="tipe_transaksi">Nama :</label>
                                    <input type="text" class="form-control" id="nama" name="nama" autofocus autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group text-white">
                                    <label for="tipe_transaksi">Username :</label>
                                    <input type="text" class="form-control" id="username" name="username" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group text-white">
                                    <label for="tipe_transaksi">Password :</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-fill btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
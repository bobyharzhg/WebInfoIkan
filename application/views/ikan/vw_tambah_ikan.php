<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
            <div class="row justify-content-center">
                <div class="col-md-8 ">
                    <div class="card">
                        <div class="card-header justify-content-center">
                            Form Tambah Data Ikan
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nama">Nama ikan</label>
                                    <input type="text" name="nama" value="<?= set_value('nama') ?>" class="form-control" id="nama" placeholder="nama_ikan">
                                    <?= form_error('nama', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="nama_ilmiah">Nama ilmiah ikan</label>
                                    <input type="text" name="nama_ilmiah" value="<?= set_value('nama_ilmiah') ?>" class="form-control" id="nama_ilmiah" placeholder="nama_ilmiah">
                                    <?= form_error('nama_ilmiah', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="ukuran_ikan">Ukuran ikan</label>
                                    <input type="text" name="ukuran_ikan" value="<?= set_value('ukuran_ikan') ?>" class="form-control" id="ukuran_ikan" placeholder="ukuran_ikan">
                                    <?= form_error('ukuran_ikan', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="kesulitan">Kesulitan</label>
                                    <input type="text" name="kesulitan" value="<?= set_value('kesulitan') ?>" class="form-control" id="kesulitan" placeholder="kesulitan">
                                    <?= form_error('kesulitan', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="sifat">Sifat ikan</label>
                                    <input type="text" name="sifat" value="<?= set_value('sifat') ?>" class="form-control" id="sifat" placeholder="sifat">
                                    <?= form_error('sifat', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="panjang_umur">Panjang umur ikan</label>
                                    <input type="text" name="panjang_umur" value="<?= set_value('panjang_umur') ?>" class="form-control" id="panjang_umur" placeholder="panjang_umur">
                                    <?= form_error('panjang_umur', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="makanan">Makanan</label>
                                    <input type="text" name="makanan" value="<?= set_value('makanan') ?>" class="form-control" id="makanan" placeholder="makanan">
                                    <?= form_error('makanan', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="ukuran_akuarium">Ukuran akuarium</label>
                                    <input type="text" name="ukuran_akuarium" value="<?= set_value('ukuran_akuarium') ?>" class="form-control" id="ukuran_akuarium" placeholder="ukuran_akuarium">
                                    <?= form_error('ukuran_akuarium', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="suhu_optimal">Suhu optimal</label>
                                    <input type="text" name="suhu_optimal" value="<?= set_value('suhu_optimal') ?>" class="form-control" id="suhu_optimal" placeholder="suhu_optimal">
                                    <?= form_error('suhu_optimal', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Gambar</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                        <label for="gambar" class="custom-file-label">Choose File</label>
                                    </div>
                                </div>
                                <a href="<?= base_url('ikan') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah ikan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
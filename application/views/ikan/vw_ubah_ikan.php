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
                            Form Ubah Data Ikan
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $ikan['id']; ?>">
                                <div class="form-group">
                                    <label for="nama">Nama Ikan</label>
                                    <input type="text" name="nama" value="<?= $ikan['nama']; ?>" class="form-control" id="nama" placeholder="Nama_ikan">
                                    <?= form_error('nama', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="nama_ilmiah">Nama ilmiah ikan</label>
                                    <input type="text" name="nama_ilmiah" value="<?= $ikan['nama_ilmiah']; ?>" class="form-control" id="nama_ilmiah" placeholder="nama_ilmiah">
                                    <?= form_error('nama_ilmiah', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="ukuran_ikan">Ukuran ikan</label>
                                    <input type="text" name="ukuran_ikan" value="<?= $ikan['ukuran_ikan']; ?>" class=" form-control" id="ukuran_ikan" placeholder="ukuran_ikan">
                                    <?= form_error('ukuran_ikan', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="kesulitan">Kesulitan</label>
                                    <input type="text" name="kesulitan" value="<?= $ikan['kesulitan']; ?>" class="form-control" id="kesulitan" placeholder="kesulitan">
                                    <?= form_error('kesulitan', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="sifat">Sifat ikan</label>
                                    <input type="text" name="sifat" value="<?= $ikan['sifat']; ?>" class="form-control" id="sifat" placeholder="sifat">
                                    <?= form_error('sifat', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="panjang_umur">Panjang umur ikan</label>
                                    <input type="text" name="panjang_umur" value="<?= $ikan['panjang_umur']; ?>" class="form-control" id="panjang_umur" placeholder="panjang_umur">
                                    <?= form_error('panjang_umur', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="makanan">Makanan</label>
                                    <input type="text" name="makanan" value="<?= $ikan['makanan']; ?>" class="form-control" id="makanan" placeholder="makanan">
                                    <?= form_error('makanan', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="ukuran_akuarium">Ukuran akuarium</label>
                                    <input type="text" name="ukuran_akuarium" value="<?= $ikan['ukuran_akuarium']; ?>" class="form-control" id="ukuran_akuarium" placeholder="ukuran_akuarium">
                                    <?= form_error('ukuran_akuarium', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="suhu_optimal">Suhu optimal</label>
                                    <input type="text" name="suhu_optimal" value="<?= $ikan['suhu_optimal']; ?>" class="form-control" id="suhu_optimal" placeholder="suhu_optimal">
                                    <?= form_error('suhu_optimal', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <img src="<?= base_url('dist/assets/images/ikan/') . $ikan['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                        <label for="gambar" class="custom-file-label">Choose File</label>
                                        <?= form_error('gambar', '<small class="text-danger p1-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <a href="<?= base_url('ikan') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah data ikan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="container-fluid">
            <!-- <h1 class="h3 mb--4 text-gray-800"><?php echo $judul; ?></h1>
            <div class="row">
                <div class="col-md-6"><a href="<?= base_url() ?>Ikan/tambah" class="btn btn-info mb-2">Tambah Data Ikan</a></div>
                <div class="col-md-12"> -->
            <?= $this->session->flashdata('message'); ?>
            <div class="clearfix">
                <div class="float-left">
                    <h1 class="h3 mb--4 text-gray-800"><?php echo $judul; ?></h1>
                </div>
                <div class="float-right">
                    <a href="<?= base_url() ?>Ikan/tambah" class="btn btn-info mb-2">Tambah Data Ikan</a>
                </div>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacinf="0">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Gambar</td>
                                <td>Nama Ikan</td>
                                <td>Nama Ilmiah</td>
                                <td>Makanan</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($ikan as $us) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><img src="<?= base_url('dist/assets/images/ikan/') . $us['gambar']; ?>" style="width: 100px;" class="img-thumbnail"></td>
                                    <td><?= $us['nama']; ?></td>
                                    <td><?= $us['nama_ilmiah']; ?></td>
                                    <td><?= $us['makanan']; ?></td>
                                    <td>
                                        <a href="<?= base_url('Ikan/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
                                        <a href="<?= base_url('Ikan/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
            <div class="row">
                <div class="col-md-12">
                    <?= $this->session->flashdata('message');
                    ?>
                </div>
                <?php $i = 1; ?>
                <?php foreach ($ikan as $us) : ?>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="tetxt-xs font-weight-bold text-gray-800">Nama : <?= $us['nama'] ?></div>
                                        <div>Tingkat Kesulitan : <?= $us['kesulitan'] ?></div>
                                        <div><a class="badge badge-info">Ukuran : <?= $us['ukuran_ikan'] ?></a></div>
                                    </div>
                                    <div class="col-auto">
                                        <img src="<?= base_url('dist/assets/images/ikan/') . $us['gambar']; ?>" style="width:150px" class="img-thumbnail">
                                    </div>
                                </div>
                                <div class="align-items-center">
                                    <a href="<?= base_url('Profil/detailikan/') . $us['id'] ?>" class="badge badge-warning badge-block">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>
</div>
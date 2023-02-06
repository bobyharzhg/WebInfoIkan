<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
	<div class="pcoded-content">
		<!-- [ breadcrumb ] start -->
		<!-- Begin Page Content -->
		<div class="container-fluid">
			<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
			<div class="row justify-content-center">
				<div class="col-md-8 ">
					<div class="card">
						<div class="card-header">
							Form Ubah Data Toko
						</div>
						<div class="card-body">
							<form action="" method="POST" enctype="multipart/form-data">
								<input type="hidden" name="id" value="<?= $toko['id']; ?>">
								<div class="form-group">
									<label for="nama_toko">Nama Toko</label>
									<input name="nama_toko" value="<?= $toko['nama_toko']; ?>" type="text" class="form-control" id="nama_toko" placeholder="Nama Toko">
									<?= form_error('nama_toko', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="alamat">Alamat Toko</label>
									<input name="alamat" value="<?= $toko['alamat']; ?>" type="text" class="form-control" id="alamat" placeholder="alamat">
									<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>

								<div class="form-group">
									<label for="link">Link Map</label>
									<input value="<?= $toko['link']; ?>" name="link" type="text" class="form-control" id="link" placeholder="link">
									<?= form_error('link', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<a href="<?= base_url('Toko') ?>" class="btn btn-danger">Tutup</a>
								<button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data Toko</button>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
</div>
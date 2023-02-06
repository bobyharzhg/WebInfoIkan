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
							Form Tambah Data Toko
						</div>
						<div class="card-body">
							<form action="" method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<label for="nama_toko">Nama Toko</label>
									<input name="nama_toko" type="text" value="<?= set_value('nama_toko'); ?>" class="form-control" id="nama_toko" placeholder="Nama Toko">
									<?= form_error('nama_toko', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="alamat">Alamat Toko</label>
									<input name="alamat" type="text" value="<?= set_value('alamat'); ?>" class="form-control" id="alamat" placeholder="alamat">
									<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>

								<div class="form-group">
									<label for="link">Link Map</label>
									<input name="link" type="text" value="<?= set_value('link'); ?>" class="form-control" id="link" placeholder="link">
									<?= form_error('link', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>

								<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data Toko</button>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
</div>
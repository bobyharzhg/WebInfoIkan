<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
	<div class="pcoded-content">
		<!-- [ breadcrumb ] start -->
		<!-- Begin Page Content -->
		<div class="container-fluid">
			<!-- <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
			<div class="row">
				<div class="col-md-6"><a href="<?= base_url('Toko/tambah') ?>" class="btn btn-info mb-2">Tambah Toko</a></div>
				<div class="col-md-12"> -->
			<?= $this->session->flashdata('message'); ?>
			<div class="clearfix">
				<div class="float-left">
					<h1 class="h3 mb--4 text-gray-800"><?php echo $judul; ?></h1>
				</div>
				<div class="float-right">
					<a href="<?= base_url() ?>Toko/tambah" class="btn btn-info mb-2">Tambah Data Ikan</a>
				</div>
			</div>
		</div>
		<div class="card shadow mb-4">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<td>No</td>
								<td>Nama Toko</td>
								<td>Alamat</td>
								<td>Aksi</td>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($toko as $us) : ?>
								<tr>
									<td> <?= $i; ?>.</td>
									<td><?= $us['nama_toko']; ?></td>
									<td><?= $us['alamat']; ?></td>

									<td>
										<a href="<?= base_url('Toko/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
										<a href="<?= base_url('Toko/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
										<a href="<?= $us['link']; ?>" target="_blank" class="badge badge-info">Map</a>
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
</div>
</div>
</div>
</div>
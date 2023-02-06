<div class="auth-wrapper">
	<div class="auth-content text-center">
		<img src="<?= base_url('dist/'); ?>assets/images/logo.png" alt="" class="img-fluid mb-4">
		<div class="card borderless">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<h4 class="f-w-400">Registrasi</h4>
						<hr>
						<form class="user" method="POST" action="<?= base_url('auth/registrasi'); ?>">
                            <div class="form-group">
                                <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control form-control-user" id="nama" placeholder="Nama Lengkap">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" value="<?= set_value('email'); ?>" class="form-control form-control-user" id="email" placeholder="Alamat Email">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="password1" value="<?= set_value('password1'); ?>" class="form-control form-control-user" id="password1" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="password2" value="<?= set_value('password2'); ?>" class="form-control form-control-user" id="password2" placeholder="Ulangi Password">
                                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
						<button class="btn btn-primary btn-block mb-4">Daftar</button>
						<hr>
						<p class="mb-2">Sudah memiliki akun? <a href="<?= base_url('Auth'); ?>" class="f-w-400">Login</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->
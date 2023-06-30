<div class="card">
	<div class="card-header">
		<h3 class="card-title">Tambah Data <?= $title; ?></h3>
		<div class="float-right">
			<a href="<?= site_url('user') ?>" class="btn btn-warning btn-sm">
				<i class="fas fa-arrow-left"></i> Kembali
			</a>
		</div>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-6">
				<form action="" method="POST">
					<!-- <?php echo validation_errors(); ?> -->
					<div class="form-group <?= form_error('nama') ? 'text-danger' : null ?>">
						<label for="namaInput">Nama *</label>
						<input type="text" name="nama" id="namaInput" value="<?= set_value('nama') ?>" class="form-control <?= form_error('nama') ? 'is-invalid' : null ?>" placeholder="Nama">
						<?= form_error('nama') ?>
					</div>
					<div class="form-group <?= form_error('username') ? 'text-danger' : null ?>">
						<label for="usernameInput">Username *</label>
						<input type="text" name="username" id="usernameInput" value="<?= set_value('username') ?>" class="form-control <?= form_error('username') ? 'is-invalid' : null ?>" placeholder="Username">
						<?= form_error('username') ?>
					</div>
					<div class="form-group <?= form_error('password') ? 'text-danger' : null ?>">
						<label for="passwordInput">Password *</label>
						<input type="password" name="password" id="passwordInput" value="<?= set_value('password') ?>" class="form-control <?= form_error('password') ? 'is-invalid' : null ?>" placeholder="Password">
						<?= form_error('password') ?>
					</div>
					<div class="form-group <?= form_error('konfirmasi') ? 'text-danger' : null ?>">
						<label for="konfirmasiInput">Konfirmasi Password *</label>
						<input type="password" name="konfirmasi" id="konfirmasiInput" value="<?= set_value('konfirmasi') ?>" class="form-control <?= form_error('konfirmasi') ? 'is-invalid' : null ?>" placeholder="Konfirmasi Password">
						<?= form_error('konfirmasi') ?>
					</div>
					<div class="form-group <?= form_error('role') ? 'text-danger' : null ?>">
						<label for="roleInput">Role *</label>
						<select name="role" id="roleInput" class="form-control <?= form_error('role') ? 'is-invalid' : null ?>">
							<option value=""> - Pilih - </option>
							<option value="1" <?= set_value('role') == 1 ? "selected" : null ?>> BK </option>
							<option value="2" <?= set_value('role') == 2 ? "selected" : null ?>> Siswa </option>
						</select>
						<?= form_error('role') ?>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-info">
							<i class="fas fa-paper-plane"></i> Simpan
						</button>
						<button type="reset" value="reset" class="btn btn-default">
							<i class="fas fa-undo-alt"></i> Reset
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
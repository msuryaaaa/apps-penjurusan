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
					<?php echo validation_errors(); ?>
					<div class="form-group">
						<label for="namaInput">Nama *</label>
						<input type="text" name="nama" id="namaInput" value="<?= set_value('nama') ?>" class="form-control" placeholder="Nama">
					</div>
					<div class="form-group">
						<label for="usernameInput">Username *</label>
						<input type="text" name="username" id="usernameInput" value="<?= set_value('username') ?>" class="form-control" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="passwordInput">Password *</label>
						<input type="password" name="password" id="passwordInput" value="<?= set_value('password') ?>" class="form-control" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="konfirmasiInput">Konfirmasi Password *</label>
						<input type="password" name="konfirmasi" id="konfirmasiInput" value="<?= set_value('konfirmasi') ?>" class="form-control" placeholder="Konfirmasi Password">
					</div>
					<div class="form-group">
						<label for="roleInput">Role *</label>
						<select name="role" id="roleInput" class="form-control">
							<option value="" <?= set_select('role', '') ?>>- Pilih -</option>
							<option value="1" <?= set_select('role', '1') ?>>BK</option>
							<option value="2" <?= set_select('role', '2') ?>>Siswa</option>
						</select>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-info">
							<i class="fas fa-paper-plane"></i> Simpan
						</button>
						<button type="reset" class="btn btn-default">
							<i class="fas fa-undo-alt"></i> Reset
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="card">
	<div class="card-header">
		<h3 class="card-title">Tambah Data <?= $title; ?></h3>
		<div class="float-right">
			<a href="<?= site_url('jurusan') ?>" class="btn btn-warning btn-sm">
				<i class="fas fa-arrow-left"></i> Kembali
			</a>
		</div>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-6">
				<form action="" method="POST">
					<!-- <?php echo validation_errors(); ?> -->
					<div class="form-group <?= form_error('idJurusan') ? 'text-danger' : null ?>">
						<label for="idJurusanInput">ID Jurusan *</label>
						<input type="text" name="idJurusan" id="idJurusanInput" value="<?= set_value('idJurusan') ?>" class="form-control <?= form_error('idJurusan') ? 'is-invalid' : null ?>" placeholder="ID Jurusan">
						<?= form_error('idJurusan') ?>
					</div>
					<div class="form-group <?= form_error('namaJurusan') ? 'text-danger' : null ?>">
						<label for="namaJurusanInput">Nama Jurusan *</label>
						<input type="text" name="namaJurusan" id="namaJurusanInput" value="<?= set_value('namaJurusan') ?>" class="form-control <?= form_error('namaJurusan') ? 'is-invalid' : null ?>" placeholder="Nama Jurusan">
						<?= form_error('namaJurusan') ?>
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
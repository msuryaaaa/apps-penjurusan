<div class="card">
	<div class="card-header">
		<h3 class="card-title">Tambah Data <?= $title; ?></h3>
		<div class="float-right">
			<a href="<?= site_url('training') ?>" class="btn btn-warning btn-sm">
				<i class="fas fa-arrow-left"></i> Kembali
			</a>
		</div>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-6">
				<form action="" method="POST">
					<!-- <?php echo validation_errors(); ?> -->
					<div class="form-group <?= form_error('nisTraining') ? 'text-danger' : null ?>">
						<label for="nisTrainingInput">NIS *</label>
						<input type="text" name="nisTraining" id="nisTrainingInput" value="<?= set_value('nisTraining') ?>" class="form-control <?= form_error('nisTraining') ? 'is-invalid' : null ?>" placeholder="NIS">
						<?= form_error('nisTraining') ?>
					</div>
					<div class="form-group <?= form_error('namaTraining') ? 'text-danger' : null ?>">
						<label for="namaTrainingInput">Nama Lengkap *</label>
						<input type="text" name="namaTraining" id="namaTrainingInput" value="<?= set_value('namaTraining') ?>" class="form-control <?= form_error('namaTraining') ? 'is-invalid' : null ?>" placeholder="Nama Lengkap">
						<?= form_error('namaTraining') ?>
					</div>
					<div class="form-group <?= form_error('pai') ? 'text-danger' : null ?>">
						<label for="paiInput">Nilai PAI *</label><small> (Input nilai dari 1-100)</small>
						<input type="text" name="pai" id="paiInput" value="<?= set_value('pai') ?>" class="form-control <?= form_error('pai') ? 'is-invalid' : null ?>" placeholder="Nilai PAI">
						<?= form_error('pai') ?>
					</div>
					<div class="form-group <?= form_error('pkn') ? 'text-danger' : null ?>">
						<label for="pknInput">Nilai PKN *</label><small> (Input nilai dari 1-100)</small>
						<input type="text" name="pkn" id="pknInput" value="<?= set_value('pkn') ?>" class="form-control <?= form_error('pkn') ? 'is-invalid' : null ?>" placeholder="Nilai PKN">
						<?= form_error('pkn') ?>
					</div>
					<div class="form-group <?= form_error('bindo') ? 'text-danger' : null ?>">
						<label for="bindoInput">Nilai B.INDO *</label><small> (Input nilai dari 1-100)</small>
						<input type="text" name="bindo" id="bindoInput" value="<?= set_value('bindo') ?>" class="form-control <?= form_error('bindo') ? 'is-invalid' : null ?>" placeholder="Nilai B.INDO">
						<?= form_error('bindo') ?>
					</div>
					<div class="form-group <?= form_error('mtk') ? 'text-danger' : null ?>">
						<label for="mtkInput">Nilai MTK *</label><small> (Input nilai dari 1-100)</small>
						<input type="text" name="mtk" id="mtkInput" value="<?= set_value('mtk') ?>" class="form-control <?= form_error('mtk') ? 'is-invalid' : null ?>" placeholder="Nilai MTK">
						<?= form_error('mtk') ?>
					</div>
					<div class="form-group <?= form_error('sejarah') ? 'text-danger' : null ?>">
						<label for="sejarahInput">Nilai SEJARAH *</label><small> (Input nilai dari 1-100)</small>
						<input type="text" name="sejarah" id="sejarahInput" value="<?= set_value('sejarah') ?>" class="form-control <?= form_error('sejarah') ? 'is-invalid' : null ?>" placeholder="Nilai SEJARAH">
						<?= form_error('sejarah') ?>
					</div>
					<div class="form-group <?= form_error('bing') ? 'text-danger' : null ?>">
						<label for="bingInput">Nilai B.INGGRIS *</label><small> (Input nilai dari 1-100)</small>
						<input type="text" name="bing" id="bingInput" value="<?= set_value('bing') ?>" class="form-control <?= form_error('bing') ? 'is-invalid' : null ?>" placeholder="Nilai B.INGGRIS">
						<?= form_error('bing') ?>
					</div>
					<div class="form-group <?= form_error('sbk') ? 'text-danger' : null ?>">
						<label for="sbkInput">Nilai SBK *</label><small> (Input nilai dari 1-100)</small>
						<input type="text" name="sbk" id="sbkInput" value="<?= set_value('sbk') ?>" class="form-control <?= form_error('sbk') ? 'is-invalid' : null ?>" placeholder="Nilai SBK">
						<?= form_error('sbk') ?>
					</div>
					<div class="form-group <?= form_error('pjok') ? 'text-danger' : null ?>">
						<label for="pjokInput">Nilai PJOK *</label><small> (Input nilai dari 1-100)</small>
						<input type="text" name="pjok" id="pjokInput" value="<?= set_value('pjok') ?>" class="form-control <?= form_error('pjok') ? 'is-invalid' : null ?>" placeholder="Nilai PJOK">
						<?= form_error('pjok') ?>
					</div>
					<div class="form-group <?= form_error('kwu') ? 'text-danger' : null ?>">
						<label for="kwuInput">Nilai KWU *</label><small>(Input nilai dari 1-100)</small>
						<input type="text" name="kwu" id="kwuInput" value="<?= set_value('kwu') ?>" class="form-control <?= form_error('kwu') ? 'is-invalid' : null ?>" placeholder="Nilai KWU">
						<?= form_error('kwu') ?>
					</div>
					<div class="form-group <?= form_error('bsun') ? 'text-danger' : null ?>">
						<label for="bsunInput">Nilai B.SUNDA *</label><small> (Input nilai dari 1-100)</small>
						<input type="text" name="bsun" id="bsunInput" value="<?= set_value('bsun') ?>" class="form-control <?= form_error('bsun') ? 'is-invalid' : null ?>" placeholder="Nilai B.SUNDA">
						<?= form_error('bsun') ?>
					</div>
					<div class="form-group <?= form_error('jurusan') ? 'text-danger' : null ?>">
						<label for="jurusanInput">Jurusan *</label>
						<select name="jurusan" id="jurusanInput" class="form-control <?= form_error('jurusan') ? 'is-invalid' : null ?>">
							<option value=""> - Pilih - </option>
							<option value="IPA" <?= set_value('jurusan') == "IPA" ? "selected" : null ?>> IPA </option>
							<option value="IPS" <?= set_value('jurusan') == "IPS" ? "selected" : null ?>> IPS </option>
							<option value="BAHASA" <?= set_value('jurusan') == "BAHASA" ? "selected" : null ?>> BAHASA </option>
						</select>
						<?= form_error('jurusan') ?>
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
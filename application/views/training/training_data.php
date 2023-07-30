<div class="card">
	<div class="card-header">
		<h3 class="card-title">Tabel <?= $title; ?></h3>
		<div class="float-right">
			<a href="<?= site_url('training/add') ?>" class="btn btn-primary btn-sm">
				<i class="fas fa-user-plus"></i> Tambah Data
			</a>
		</div>
	</div>
	<div class="card-body table-responsive">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>NIS</th>
					<th>Nama</th>
					<th>PAI</th>
					<th>PKN</th>
					<th>BINDO</th>
					<th>MTK</th>
					<th>SEJ</th>
					<th>BING</th>
					<th>SBK</th>
					<th>PJOK</th>
					<th>KWU</th>
					<th>BSUN</th>
					<th>Jurusan</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach ($row->result() as $key => $data) {
				?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $data->nis_training ?></td>
						<td><?= $data->nama_training ?></td>
						<td><?= $data->aga_training ?></td>
						<td><?= $data->pkn_training ?></td>
						<td><?= $data->bindo_training ?></td>
						<td><?= $data->mtk_training ?></td>
						<td><?= $data->sej_training ?></td>
						<td><?= $data->bing_training ?></td>
						<td><?= $data->sbk_training ?></td>
						<td><?= $data->pjok_training ?></td>
						<td><?= $data->pkwu_training ?></td>
						<td><?= $data->bsun_training ?></td>
						<td><?= $data->jurusan_training ?></td>
						<td class="text-center" style="width: 180px;">
							<form action="<?= site_url('training/delete') ?>" method="post">
								<a href="<?= site_url('training/edit/' . $data->nis_training) ?>" class="btn btn-success btn-sm">
									<i class="fas fa-edit"></i> Ubah
								</a>
								<input type="hidden" name="nis_training" value="<?= $data->nis_training ?>">
								<button onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger btn-sm">
									<i class="fas fa-trash"></i> Hapus
								</button>
							</form>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
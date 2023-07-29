<div class="card">
	<div class="card-header">
		<h3 class="card-title">Tabel <?= $title; ?></h3>
		<div class="float-right">
			<a href="<?= site_url('jurusan/add') ?>" class="btn btn-primary btn-sm">
				<i class="fas fa-user-plus"></i> Tambah Data
			</a>
		</div>
	</div>
	<div class="card-body table-responsive">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>ID Jurusan</th>
					<th>Nama Jurusan</th>
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
						<td><?= $data->id_jurusan ?></td>
						<td><?= $data->nama_jurusan ?></td>
						<td class="text-center" style="width: 180px;">
							<form action="<?= site_url('jurusan/delete') ?>" method="post">
								<a href="<?= site_url('jurusan/edit/' . $data->id_jurusan) ?>" class="btn btn-success btn-sm">
									<i class="fas fa-edit"></i> Ubah
								</a>
								<input type="hidden" name="id_jurusan" value="<?= $data->id_jurusan ?>">
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
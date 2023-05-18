<div class="card">
	<div class="card-header">
		<h3 class="card-title">Tabel <?= $title; ?></h3>
		<div class="float-right">
			<a href="<?= site_url('user/add') ?>" class="btn btn-primary btn-sm">
				<i class="fas fa-user-plus"></i> Tambah Data
			</a>
		</div>
	</div>
	<div class="card-body table-responsive">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Username</th>
					<th>Nama</th>
					<th>Level</th>
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
						<td><?= $data->username ?></td>
						<td><?= $data->nama ?></td>
						<td><?= $data->level == 1 ? "BK" : "Siswa" ?></td>
						<td class="text-center" style="width: 180px;">
							<a href="<?php site_url('user/edit/') ?>" class="btn btn-success btn-sm">
								<i class="fas fa-edit"></i> Ubah
							</a>
							<a href="<?php site_url('user/delete/') ?>" class="btn btn-danger btn-sm">
								<i class="fas fa-trash"></i> Hapus
							</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
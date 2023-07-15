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
					<th>Role</th>
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
							<form action="<?= site_url('user/delete') ?>" method="post">
								<a href="<?= site_url('user/edit/' . $data->id_users) ?>" class="btn btn-success btn-sm">
									<i class="fas fa-edit"></i> Ubah
								</a>
								<input type="hidden" name="id_users" value="<?= $data->id_users ?>">
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
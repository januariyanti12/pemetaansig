<?= content_open($title) ?>
<a href="<?= site_url($url . '/form/tambah') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>
<hr>
<?= $this->session->flashdata('info') ?>
<table class="table table-bordered">
	<thead>
		<tr>
			<th class="text-center" width="50px">No</th>
			<th>Nomor KK</th>
			<th>Nik</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Jenis KB</th>
			<th>Jenis RT</th>
			<th>Jenis KS</th>
			<th width="200px">Aksi</th>

		</tr>

		</tr>
	</thead>
	<tbody>
		<?php
		$no = 1;
		foreach ($datatable->result() as $row) {
		?>
			<tr>
				<td class="text-center"><?= $no ?></td>
				<td><?= $row->nomor_kk ?></td>
				<td><?= $row->nik ?></td>
				<td><?= $row->nama ?></td>
				<td><?= $row->jenis_kelamin ?></td>
				<td><?= $row->nama_kb ?></td>
				<td><?= $row->rt_rw ?></td>
				<td><?= $row->nama_ks ?></td>
				<td>
					<div class="btn-group">
						<a href="<?= site_url($url . '/form/ubah/' . $row->id_penduduk) ?>" class="btn btn-info"><i class="fa fa-edit"></i> Ubah</a>
						<a href="<?= site_url($url . '/hapus/' . $row->id_penduduk) ?>" class="btn btn-danger" onclick="return confirm('Hapus data?')"><i class="fa fa-trash"></i> Hapus</a>
					</div>
				</td>
			</tr>
		<?php
			$no++;
		}

		?>
	</tbody>
</table>
<?= content_close() ?>
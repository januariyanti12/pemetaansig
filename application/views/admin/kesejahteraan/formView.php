<?php
$id_penduduk = "";
$nomor_kk = "";
$nik = "";
$jenis_kelamin = "";
$nama_kb = "";
$rt_rw = "";
$nama_ks = "";
if ($parameter == 'ubah' && $id != '') {
	$this->db->where('id_penduduk', $id);
	$row = $this->Model->get()->row_array();
	extract($row);
}


// value ketika validasi
if ($this->session->flashdata('error_value')) {
	extract($this->session->flashdata('error_value'));
}

?>
<?= content_open('Form Keluarga Sejahtera') ?>
<?php
// menampilkan error validasi
if ($this->session->flashdata('error_validation')) {
	foreach ($this->session->flashdata('error_validation') as $key => $value) {
		echo '<div class="alert alert-danger">' . $value . '</div>';
	}
}
?>
<form method="post" action="<?= site_url($url . '/simpan') ?>" enctype="multipart/form-data">
	<?= input_hidden('parameter', $parameter) ?>
	<?= input_hidden('id_penduduk', $id_penduduk) ?>
	<label for="id_lokasi">Nama Penduduk</label>
	<select name="id_lokasi">
		<?php
		$connections = mysqli_connect("localhost", "root", "", "datakeluargasejahtera");
		//$link = mysqli_connect("localhost", "root", "", "test");
		$query = mysqli_query($connections, "SELECT * FROM lokasi");

		while ($qtabel = mysqli_fetch_assoc($query)) {
			echo '<option value="' . $qtabel['id_lokasi'] . '">' . $qtabel['nama_penduduk'] . '</option>';
		}
		?>

	</select>
	<div class="form-group">
		<label>Nomor KK</label>
		<div class="row">
			<div class="col-md-4">
				<?= input_text('nomor_kk', $nomor_kk) ?>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label>Nik</label>
		<div class="row">
			<div class="col-md-6">
				<?= input_text('nik', $nik) ?>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<div class="row">
			<div class="col-md-3">
				<?= input_text('jenis_kelamin', $jenis_kelamin) ?>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label>Jenis KB</label>
		<div class="row">
			<div class="col-md-3">
				<?= input_text('nama_kb', $nama_kb) ?>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label>Jenis RT</label>
		<div class="row">
			<div class="col-md-3">
				<?= input_text('rt_rw', $rt_rw) ?>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label>Jenis KS</label>
		<div class="row">
			<div class="col-md-3">
				<?= input_text('nama_ks', $nama_ks) ?>
			</div>
		</div>
	</div>
	<div class="form-group">
		<button type="submit" name="simpan" value="true" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
		<a href="<?= site_url($url) ?>" class="btn btn-danger"><i class="fa fa-reply"></i> Kembali</a>
	</div>
</form>
<?= content_close() ?>
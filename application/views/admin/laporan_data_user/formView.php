<?php
$id_pengguna = "";
$nm_pengguna = "";
$kt_sandi = "";
$level = "";
if ($parameter == 'ubah' && $id != '') {
    $this->db->where('id_pengguna', $id);
    $row = $this->Model->get()->row_array();
    extract($row);
}


// value ketika validasi
if ($this->session->flashdata('error_value')) {
    extract($this->session->flashdata('error_value'));
}

?>
<?= content_open('Form User') ?>
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
    <?= input_hidden('id_pengguna', $id_pengguna) ?>
    <div class="form-group">
        <label>Nama Pengguna</label>
        <div class="row">
            <div class="col-md-4">
                <?= input_text('nm_pengguna', $nm_pengguna) ?>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label>Kata Sandi</label>
        <div class="row">
            <div class="col-md-6">
                <?= input_text('kt_sandi', $kt_sandi) ?>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label>Level</label>
        <div class="row">
            <div class="col-md-3">
                <?= input_text('level', $level) ?>
            </div>
        </div>
    </div>

    <div class="form-group">
        <button type="submit" name="simpan" value="true" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
        <a href="<?= site_url($url) ?>" class="btn btn-danger"><i class="fa fa-reply"></i> Kembali</a>
    </div>
</form>
<?= content_close() ?>
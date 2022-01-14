<?php
$id_lokasi = "";
$nama_penduduk = "";
$lat = "";
$lng = "";
if ($parameter == 'ubah' && $id != '') {
    $this->db->where('id_lokasi', $id);
    $row = $this->Model->get()->row_array();
    extract($row);
}
?>
<?= content_open($title) ?>
<form method="post" action="<?= site_url($url . '/simpan') ?>" enctype="multipart/form-data">
    <?= input_hidden('id_lokasi', $id_lokasi) ?>
    <?= input_hidden('parameter', $parameter) ?>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <label>Nama Penduduk</label>
                        <?= input_text('nama_penduduk', $nama_penduduk) ?>
                    </div>
                    <div class="col-md-7">
                        <label>Latitude</label>
                        <?= input_text('lat', $lat) ?>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <label>Longitude</label>
                <?= input_text('lng', $lng) ?>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <hr>
        <div class="form-group">
            <button type="submit" name="simpan" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
            <a href="<?= site_url($url) ?>" class="btn btn-danger"><i class="fa fa-reply"></i> Kembali</a>
        </div>
    </div>
    </div>

</form>
<?= content_close() ?>
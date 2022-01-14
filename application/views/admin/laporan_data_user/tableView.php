<?= content_open($title) ?>
<a href="<?= site_url($url . '/form/tambah') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>
<a href="<?= site_url($url . '/export/pd') ?>" class="btn btn-danger" target="_BLANK"><i class="fa fa-file-pdf-o"></i> Unduh Data</a>

<hr>
<?= $this->session->flashdata('info') ?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th class="text-center" width="50px">No</th>
            <th>Nama Pengguna</th>
            <th>Kata Sandi</th>
            <th>Level</th>
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
                <td><?= $row->nm_pengguna ?></td>
                <td><?= $row->kt_sandi ?></td>
                <td><?= $row->level ?></td>
                <td>
                    <div class="btn-group">
                        <a href="<?= site_url($url . '/form/ubah/' . $row->id_pengguna) ?>" class="btn btn-info"><i class="fa fa-edit"></i> Ubah</a>
                        <a href="<?= site_url($url . '/hapus/' . $row->id_pengguna) ?>" class="btn btn-danger" onclick="return confirm('Hapus data?')"><i class="fa fa-trash"></i> Hapus</a>
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
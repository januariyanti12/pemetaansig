<?= content_open($title) ?>
<a href="<?= site_url($url . '/export/pdf') ?>" class="btn btn-danger" target="_BLANK"><i class="fa fa-file-pdf-o"></i> Unduh Data</a>

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
            <th width="200px">Jenis KS</th>

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
                </td>
            </tr>
        <?php
            $no++;
        }

        ?>
    </tbody>
</table>
<?= content_close() ?>
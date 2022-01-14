<?= content_open($title) ?>

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
            <th width="200px">Jenis RT</th>

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
                </td>
            </tr>
        <?php
            $no++;
        }

        ?>
    </tbody>
</table>
<?= content_close() ?>
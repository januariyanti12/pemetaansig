<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
	<style type="text/css">
		.table{
			width: 100%;
			border-spacing: 0
		}
		.table tr:first-child th,
		.table tr:first-child td{
			border-top: 1px solid #000
		}
		.table tr th:first-child,
		.table tr td:first-child{
			border-left: 1px solid #000
		}
		.table tr th,
		.table tr td{
			border-right: 1px solid #000;
			border-bottom: 1px solid #000;
			padding:4px;
			vertical-align: top
		}
		.text-center{
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Keluarga Sejahtera Report</h1>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th width="50px" class="text-center">No</th>
                <th>Nama Pengguna</th>
                <th>Kata Sandi</th>
                <th>Level</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$no=1;
				foreach ($datatable->result() as $row) {
					?>
						<tr>
							<td class="text-center"><?=$no?></td>
                            <td><?= $row->nm_pengguna ?></td>
                            <td><?= $row->kt_sandi ?></td>
                            <td><?= $row->level ?></td>
						</tr>
					<?php
					$no++;
				}

			?>
		</tbody>
	</table>

</body>
</html>
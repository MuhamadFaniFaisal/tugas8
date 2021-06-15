<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Cetak Data</title>
	<style>
		h1 {
		text-align: center;
		}
		table, 
		td, 
		th {
		border: 1px solid #ddd;
		text-align: left;
		}
		table {
		border-collapse: collapse;
		width: 100%;
		}
		th, 
		td {
		padding: 15px;
		}
	</style>
</head>

<body>
	<h1>Laporan Data Anggota</h1>
	<table class="table table-striped" border="1">
		<thead>
			<tr bgcolor="B0C4DE">
                    <th scope="col">No.</th>
                    <th scope="col">ID Anggota</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No. Telp</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$result = $model->tampil_data_anggota();
			if ( !empty($result) ) {
				foreach ($result as $data): ?>
					<tr>
                            <td><?= $index++ ?></td>
                            <td><?= $data->id_anggota ?></td>
                            <td><?= $data->nama ?></td> 
                            <td><?= $data->no_tlp ?></td>
                            <td><?= $data->alamat ?></td>
                            <td>
					</tr>
				<?php endforeach;
			} else{ ?>
				<tr>
					<td colspan="9">Belum ada data pada tabel anggota.</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<script>
	window.print();
	</script>
</body>
</html>
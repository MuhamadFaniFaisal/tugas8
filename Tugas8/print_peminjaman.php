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
	<h1>Laporan Data Peminjaman</h1>
	<table>
		<thead>
			<tr tr bgcolor="B0C4DE">
                    <th>No.</th>
                    <th>ID Peminjaman</th>
                    <th>ID Anggota</th>
                    <th>Nama VCD</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$result = $model->tampil_data_pjm();
			if ( !empty($result) ) {
				foreach ($result as $data): ?>
					<tr>
                            <td><?= $index++ ?></td>
                            <td><?= $data->id_pjm ?></td>
                            <td><?= $data->id_anggota ?></td>
                            <td><?= $data->nama_vcd ?></td> 
                            <td><?= $data->tgl_pjm ?></td>
                            <td><?= $data->tgl_kmbl ?></td>
                            <td>
					</tr>
				<?php endforeach;
			} else{ ?>
				<tr>
					<td colspan="9">Belum ada data pada tabel peminjaman.</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<script>
	window.print();
	</script>
</body>
</html>
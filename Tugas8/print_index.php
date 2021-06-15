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
	<table>
		<thead>
			<tr tr bgcolor="B0C4DE">
                    <th>No.</th>
                    <th>Nama</th>
                    <th>No. Telp</th>
                    <th>ID Peminjaman</th>
                    <th>ID Anggota</th>
                    <th>Nama PS</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$result = $model->tampil_data();
			if ( !empty($result) ) {
				foreach ($result as $data): ?>
					<tr>
                            <td><?= $index++ ?></td>
                            <td><?= $data->nama ?></td> 
                            <td><?= $data->no_tlp ?></td>
                            <td><?= $data->id_pjm ?></td>
                            <td><?= $data->id_anggota ?></td>
                            <td><?= $data->nama_ps ?></td> 
                            <td><?= $data->tgl_pjm ?></td>
                            <td><?= $data->tgl_kmbl ?></td>
                    </tr>
				<?php endforeach;
			} else{ ?>
				<tr>
					<td colspan="9">Belum ada data pada tabel rental ps.</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<script>
	window.print();
	</script>
</body>
</html>
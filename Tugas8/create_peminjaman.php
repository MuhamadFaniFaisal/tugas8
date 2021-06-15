<!doctype html>
<html lang="en">
<head>
	<title>Tambah Anggota</title>
</head>

<body>
	<h1>Tambah Anggota</h1>
	<a href="peminjaman.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>ID Peminjaman</label>
		<br>
		<input type="text" name="id_pjm">
		<br>
		<label>ID Anggota</label>
		<br>
		<input type="text" name="id_anggota">
        <br>
		<label>Nama PS</label>
		<br>
		<input type="text" name="nama_ps">
		<br>
		<label>Tanggal Pinjam</label>
		<br>
		<input type="date" name="tgl_pjm">
		<br>
		<label>Tanggal Kembali</label>
		<br>
		<input type="date" name="tgl_kmbl">
        <br><br>
		<button type="submit" name="submit_simpan_pjm">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html>
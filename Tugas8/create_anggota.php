<!doctype html>
<html lang="en">
<head>
	<title>Tambah Anggota</title>
</head>

<body>
	<h1>Tambah Anggota</h1>
	<a href="anggota.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>Id Anggota</label>
		<br>
		<input type="text" name="id_anggota">
		<br>
		<label>Nama</label>
		<br>
		<input type="text" name="nama">
        <br>
		<label>No. Telp</label>
		<br>
		<input type="text" name="no_tlp">
		<br>
		<label>Alamat</label>
		<br>
		<input type="text" name="alamat">
        <br><br>
		<button type="submit" name="submit_simpan_anggota">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html>
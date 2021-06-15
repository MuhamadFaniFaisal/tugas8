<?php
$id_pjm = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_pjm($id_pjm);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Peminjaman</title>
</head>

<body>
    <h1>Edit Data Peminjaman</h1>
    <a href="peminjaman.php">Kembali</a>
    <br><br>
    <form action="proses.php" method="post">
        <label>ID Peminjaman</label>
        <br>
        <input type="text" name="id_pjm" value="<?php echo $data->id_pjm ?>">
        <br>
        <label>ID Anggota</label>
        <br>
        <input type="text" name="id_anggota" value="<?php echo $data->id_anggota ?>">
        <br>
        <label>Nama PS</label>
        <br>
        <input type="text" name="nama_ps" value="<?php echo $data->nama_ps ?>">
        <br>
        <label>Tanggal Pinjam</label>
        <br>
        <input type="date" name="tgl_pjm" value="<?php echo $data->tgl_pjm ?>">
        <br>
        <label>Tanggal Kembali</label>
        <br>
        <input type="date" name="tgl_kmbl" value="<?php echo $data->tgl_kmbl ?>">
        <br><br>
        <button type="submit" name="submit_edit_pjm">Submit</button>
    </form>
</body>

</html>
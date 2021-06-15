<?php
$id_anggota = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_anggota($id_anggota);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Anggota</title>
</head>

<body>
    <h1>Edit Anggota</h1>
    <a href="anggota.php">Kembali</a>
    <br><br>
    <form action="proses.php" method="post">
        <label>Id Anggota</label>
        <br>
        <input type="text" name="id_anggota" value="<?php echo $data->id_anggota ?>">
        <br>
        <label>Nama</label>
        <br>
        <input type="text" name="nama" value="<?php echo $data->nama ?>">
        <br>
        <label>No. Telp</label>
        <br>
        <input type="text" name="no_tlp" value="<?php echo $data->no_tlp ?>">
        <br>
        <label>Alamat</label>
        <br>
        <input type="text" name="alamat" value="<?php echo $data->alamat ?>">
        <br><br>
        <button type="submit" name="submit_edit_anggota">Submit</button>
    </form>
</body>

</html>
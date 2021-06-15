<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">


<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Data Rental PS</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Sistem Rental PS</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
         <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Data Rental PS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="anggota.php">Anggota</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="peminjaman.php">Peminjaman PS</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
        <h1 align="center">Data Rental PS</h1>
        <br>
        <a href="print_index.php" target="_blank"><input type="button" value="Cetak Data"></a>
        <br><br>
        <table class="table table-striped table-hover" border="1">
            <thead>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No. Telp</th>
                    <th scope="col">ID Peminjaman</th>
                    <th scope="col">ID Anggota</th>
                    <th scope="col">Nama PS</th>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Tanggal Kembali</th>
            </thead>
            <tbody>
                <?php
                $result = $model->tampil_data();
                if (!empty($result)) {
                    foreach ($result as $data) : ?>
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
                } else { ?>
                <tr>
                    <td colspan="9">Belum ada data pada tabel data rental ps.</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>
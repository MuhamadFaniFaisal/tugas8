<?php
include 'model.php';
//tbl anggota
if (isset($_POST['submit_simpan_anggota'])) {
 $id_anggota = $_POST['id_anggota'];
 $nama = $_POST['nama'];
 $no_tlp = $_POST['no_tlp'];
 $alamat = $_POST['alamat'];
 $model = new Model();
 $model->insert_anggota($id_anggota, $nama, $no_tlp, $alamat);
 header('location:anggota.php');
}
if (isset($_POST['submit_edit_anggota'])) {
 $id_anggota = $_POST['id_anggota'];
 $nama = $_POST['nama'];
 $no_tlp = $_POST['no_tlp'];
 $alamat = $_POST['alamat'];
 $model = new Model();
 $model->update_anggota($id_anggota, $nama, $no_tlp, $alamat);
 header('location:anggota.php');
}
if (isset($_GET['anggota_id'])) {
 $id_anggota = $_GET['anggota_id'];
 $model = new Model();
 $model->delete_anggota($id_anggota);
 header('location:anggota.php');
}

//tbl peminjaman
if (isset($_POST['submit_simpan_pjm'])) {
 $id_pjm = $_POST['id_pjm'];
 $id_anggota = $_POST['id_anggota'];
 $nama_ps = $_POST['nama_ps'];
 $tgl_pjm = $_POST['tgl_pjm'];
 $tgl_kmbl = $_POST['tgl_kmbl'];
 $model = new Model();
 $model->insert_pjm($id_pjm, $id_anggota, $nama_ps, $tgl_pjm, $tgl_kmbl);
 header('location:peminjaman.php');
}
if (isset($_POST['submit_edit_pjm'])) {
  $id_pjm = $_POST['id_pjm'];
 $id_anggota = $_POST['id_anggota'];
 $nama_ps = $_POST['nama_ps'];
 $tgl_pjm = $_POST['tgl_pjm'];
 $tgl_kmbl = $_POST['tgl_kmbl'];
 $model = new Model();
 $model->update_pjm($id_pjm, $id_anggota, $nama_ps, $tgl_pjm, $tgl_kmbl);
 header('location:peminjaman.php');
}
if (isset($_GET['pjm_id'])) {
 $id_pjm = $_GET['pjm_id'];
 $model = new Model();
 $model->delete_pjm($id_pjm);
 header('location:peminjaman.php');
}

//tbl join
if (isset($_POST['submit_simpan_pjm'])) {
 $id_pjm = $_POST['id_pjm'];
 $id_anggota = $_POST['id_anggota'];
 $nama_ps = $_POST['nama_ps'];
 $tgl_pjm = $_POST['tgl_pjm'];
 $tgl_kmbl = $_POST['tgl_kmbl'];
 $model = new Model();
 $model->insert_pjm($id_pjm, $id_anggota, $nama_ps, $tgl_pjm, $tgl_kmbl);
 header('location:peminjaman.php');
}
if (isset($_POST['submit_edit_pjm'])) {
  $id_pjm = $_POST['id_pjm'];
 $id_anggota = $_POST['id_anggota'];
 $nama_ps = $_POST['nama_ps'];
 $tgl_pjm = $_POST['tgl_pjm'];
 $tgl_kmbl = $_POST['tgl_kmbl'];
 $model = new Model();
 $model->update_pjm($id_pjm, $id_anggota, $nama_ps, $tgl_pjm, $tgl_kmbl);
 header('location:peminjaman.php');
}
if (isset($_GET['pjm_id'])) {
 $id_pjm = $_GET['pjm_id'];
 $model = new Model();
 $model->delete_pjm($id_pjm);
 header('location:peminjaman.php');
}
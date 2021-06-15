<?php
include 'connection.php';
class Model extends Connection
{
public function __construct()
 {
 $this->conn = $this->get_connection();


// tabel anggota
 }
 public function insert_anggota($id_anggota, $nama, $no_tlp, $alamat)
{
	$sql = "INSERT INTO tbl_anggota (id_anggota, nama, no_tlp, alamat) 
	VALUES ('$id_anggota', '$nama', '$no_tlp', '$alamat')";
	$this->conn->query($sql);
}
public function tampil_data_anggota()
{
	 $sql = "SELECT * FROM tbl_anggota";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) { 
	 	$baris[] = $obj;
	 }
	 if(!empty($baris)){
	 	return $baris;
	 }
}
public function edit_anggota($id)
{
	 $sql = "SELECT * FROM tbl_anggota WHERE id_anggota='$id'";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) {
		 $baris = $obj;
	 }
	 return $baris;
}
public function update_anggota($id_anggota, $nama, $no_tlp, $alamat)
{
	 $sql = "UPDATE tbl_anggota SET nama='$nama', no_tlp='$no_tlp', alamat='$alamat' WHERE id_anggota='$id_anggota'";
	 $this->conn->query($sql);
}
public function delete_anggota($anggota_id)
{ 
	$sql = "DELETE FROM tbl_anggota WHERE id_anggota='$anggota_id'";
	$this->conn->query($sql);
}

// tabel peminjaman
 public function insert_pjm($id_pjm, $id_anggota, $nama_ps, $tgl_pjm, $tgl_kmbl)
{
  $sql = "INSERT INTO tbl_pjm (id_pjm, id_anggota, nama_ps, tgl_pjm, tgl_kmbl) 
  VALUES ('$id_pjm', '$id_anggota', '$nama_ps', '$tgl_pjm', '$tgl_kmbl')";
  $this->conn->query($sql);
}
public function tampil_data_pjm()
{
   $sql = "SELECT * FROM tbl_pjm";
   $bind = $this->conn->query($sql);
   while ($obj = $bind->fetch_object()) { 
    $baris[] = $obj;
   }
   if(!empty($baris)){
    return $baris;
   }
}
public function edit_pjm($id)
{
   $sql = "SELECT * FROM tbl_pjm WHERE id_pjm='$id'";
   $bind = $this->conn->query($sql);
   while ($obj = $bind->fetch_object()) {
     $baris = $obj;
   }
   return $baris;
}
public function update_pjm($id_pjm, $id_anggota, $nama_ps, $tgl_pjm, $tgl_kmbl)
{
   $sql = "UPDATE tbl_pjm SET id_anggota='$id_anggota', nama_ps='$nama_ps', tgl_pjm='$tgl_pjm', tgl_kmbl='$tgl_kmbl' WHERE id_pjm='$id_pjm'";
   $this->conn->query($sql);
}
public function delete_pjm($pjm_id)
{ 
  $sql = "DELETE FROM tbl_pjm WHERE id_pjm='$pjm_id'";
  $this->conn->query($sql);
}

// tabel peminjaman
public function tampil_data()
{
   $sql = "SELECT tbl_pjm.*, nama, no_tlp FROM tbl_pjm INNER JOIN tbl_anggota ON tbl_pjm.id_anggota = tbl_anggota.id_anggota";
   $bind = $this->conn->query($sql);
   while ($obj = $bind->fetch_object()) { 
    $baris[] = $obj;
   }
   if(!empty($baris)){
    return $baris;
   }
}


}

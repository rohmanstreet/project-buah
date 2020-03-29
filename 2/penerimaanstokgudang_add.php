<?php
include "../koneksi.php";

$id_pnsgdg	= $_POST["id_pnsgdg"];
$id_admin	= $_POST["id_admin"];
$id_jenis	= $_POST["id_jenis"];
$id_gudang	= $_POST["id_gudang"];
$jumlah	= $_POST["jumlah"];
$tgl_terima	= $_POST["tgl_terima"];

if($add = mysqli_query($konek, "INSERT INTO tbl_penerimaanstokgudang (id_pnsgdg, id_admin, nm_jenis, nm_gudang, jumlah, tgl)
															 VALUES ('$id_pnsgdg', '$id_admin', '$id_jenis', '$id_gudang', '$jumlah', '$tgl_terima')")){
	header("Location: penerimaanstok_gudang.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
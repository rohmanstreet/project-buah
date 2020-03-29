<?php
include "../koneksi.php";

$id_pgrimgdg	= $_POST["id_pgrimgdg"];
$id_admin	= $_POST["id_admin"];
$id_jenis	= $_POST["id_jenis"];
$id_gudang	= $_POST["id_gudang"];
$jumlah	= $_POST["jumlah"];
$tgl_kirim	= $_POST["tgl_kirim"];

if($add = mysqli_query($konek, "INSERT INTO tb_pengirimstokgudang (id_pgrimgdg, id_admin, jenis, gudang, jumlah, tgl)
															 VALUES ('$id_pgrimgdg', '$id_admin', '$id_jenis', '$id_gudang', '$jumlah', '$tgl_kirim')")){
	header("Location: pengirimanstok_gudang.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
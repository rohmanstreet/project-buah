<?php
include "../koneksi.php";

$id_pgrimgdg	= $_POST["id_pgrimgdg"];
$id_jenisbr	= $_POST["id_jenisbr"];
$id_gudangbr	= $_POST["id_gudangbr"];
$jumlahbr	= $_POST["jumlahbr"];
$tgl_kirimbr	= $_POST["tgl_kirimbr"];

if ($edit = mysqli_query($konek, "UPDATE tb_pengirimstokgudang SET id_jenis='$id_jenisbr', id_gudang='$id_gudangbr', jumlah='$jumlahbr', tgl_kirim='$tgl_kirimbr' WHERE id_pgrimgdg='$id_pgrimgdg'")){
	header("Location: pengirimanstok_gudang.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
<?php
include "../koneksi.php";

$id_pgrimgdg	= $_POST["id_pgrimgdg"];
$id_admin	= $_POST["id_admin"];
$alamat = $_POST["alamat"];
$id_jenis	= $_POST["id_jenis"];
$id_gudang	= $_POST["id_gudang"];
$jumlah	= $_POST["jumlah"];
$tgl_kirim	= $_POST["tgl_kirim"];

if($add = mysqli_query($konek, "INSERT INTO tb_pengirimantoko (id_kirimtoko, id_admin,nm_gudang, alamat, jenis, jumlah, tgl)
															 VALUES ('$id_pgrimgdg', '$id_admin','$id_gudang','$alamat', '$id_jenis', '$jumlah', '$tgl_kirim')")){
	header("Location: pengiriman_toko.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
<?php
include "../koneksi.php";

$id_biaya	= $_POST["id_biaya"];
$id_admin	= $_POST["id_admin"];
$id_gudang	= $_POST["id_gudang"];
$keperluan	= $_POST["keperluan"];
$biaya	= $_POST["biaya"];
$tgl_transaksi	= $_POST["tgl_transaksi"];

if($add = mysqli_query($konek, "INSERT INTO tb_biaya (id_biaya, id_admin, nm_gudang, keperluan, biaya, tgl)
															 VALUES ('$id_biaya', '$id_admin', '$id_gudang', '$keperluan', '$biaya', '$tgl_transaksi')")){
	header("Location: keuangan.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
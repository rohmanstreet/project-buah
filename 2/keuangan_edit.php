<?php
include "../koneksi.php";

$id_biaya	= $_POST["id_biaya"];
$id_gudangbr	= $_POST["id_gudangbr"];
$keperluanbr	= $_POST["keperluanbr"];
$biayabr	= $_POST["biayabr"];
$tgl_transaksibr	= $_POST["tgl_transaksibr"];

if ($edit = mysqli_query($konek, "UPDATE tb_biaya SET nm_gudang='$id_gudangbr', keperluan='$keperluanbr', biaya='$biayabr', tgl='$tgl_transaksibr' WHERE id_biaya='$id_biaya'")){
	header("Location: keuangan.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
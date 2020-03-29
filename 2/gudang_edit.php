<?php
include "../koneksi.php";

$id_gdg	= $_POST["id_gdg"];
$nm_gudang	= $_POST["nm_gudang"];

if ($edit = mysqli_query($konek, "UPDATE tb_gudang SET nm_gudang='$nm_gudang' WHERE id_gdg='$id_gdg'")){
	header("Location: gudang.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
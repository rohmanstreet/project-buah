<?php
include "../koneksi.php";

$id_jns	= $_POST["id_jns"];
$nm_jenis	= $_POST["nm_jenis"];

if($add = mysqli_query($konek, "INSERT INTO tb_jenis (id_jns, nm_jenis) VALUES ('$id_jns', '$nm_jenis')")){
	header("Location: jenis.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
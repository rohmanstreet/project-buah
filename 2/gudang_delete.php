<?php

include "../koneksi.php";

$id_gdg	= $_GET["id_gdg"];

if($delete = mysqli_query($konek, "DELETE FROM tb_gudang WHERE id_gdg='$id_gdg'")){
	header("Location: gudang.php");
	exit();
}
die("Terdapat Kesalahan : ". mysqli_error($konek));

?>
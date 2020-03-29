<?php

include "../koneksi.php";

$id_jns	= $_GET["id_jns"];

if($delete = mysqli_query($konek, "DELETE FROM tb_jenis WHERE id_jns='$id_jns'")){
	header("Location: jenis.php");
	exit();
}
die("Terdapat Kesalahan : ". mysqli_error($konek));

?>
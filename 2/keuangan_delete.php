<?php

include "../koneksi.php";

$id_biaya	= $_GET["id_biaya"];

if($delete = mysqli_query($konek, "DELETE FROM tb_biaya WHERE id_biaya='$id_biaya'")){
	header("Location: keuangan.php");
	exit();
}
die("Terdapat Kesalahan : ". mysqli_error($konek));

?>
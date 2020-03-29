<?php
include "../koneksi.php";


$nm_gudang	= $_POST["nm_gudang"];

if($add = mysqli_query($konek, "INSERT INTO tb_gudang (id_gdg, nm_gudang) VALUES ('', '$nm_gudang')")){
	header("Location: gudang.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>
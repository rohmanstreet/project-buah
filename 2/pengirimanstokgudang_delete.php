<?php

include "../koneksi.php";

$id_pgrimgdg	= $_GET["id_pgrimgdg"];

if($delete = mysqli_query($konek, "DELETE FROM tb_pengirimstokgudang WHERE id_pgrimgdg='$id_pgrimgdg'")){
	header("Location: pengirimanstok_gudang.php");
	exit();
}
die("Terdapat Kesalahan : ". mysqli_error($konek));

?>
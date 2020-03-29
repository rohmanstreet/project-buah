<?php

include "../koneksi.php";

$id_pnsgdg	= $_GET["id_pnsgdg"];

if($delete = mysqli_query($konek, "DELETE FROM tb_penerimaanstokgudang WHERE id_pnsgdg='$id_pnsgdg'")){
	header("Location: penerimaanstok_gudang.php");
	exit();
}
die("Terdapat Kesalahan : ". mysqli_error($konek));

?>
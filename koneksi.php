<?php
	
$konek = mysqli_connect("localhost", "root", "", "buah");
	
if(mysqli_connect_errno()){
	printf ("Gagal terkoneksi : ".mysqli_connect_error());
	exit();
}
	
?>
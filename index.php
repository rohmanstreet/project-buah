<?php
session_start();
include "koneksi.php";

// Notif Error
$Err = "";
if(isset ($_GET ["Err"]) && !empty ($_GET ["Err"])){
	switch ($_GET ["Err"]){
		case 1:
			$Err = "Username dan Password Kosong";
		break;
		case 2:
			$Err = "Username Kosong";
		break;
		case 3:
			$Err = "Password Kosong";
		break;
		case 4:
			$Err = "Password salah";
		break;
		case 5:
			$Err = "Username salah";
		break;
		case 6:
			$Err = "Maaf, Terjadi Kesalahan";
		break;
	}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BUAH BAROKAH</title>
	<!-- Icon -->
	<link rel="shortcut icon" type="image/icon" href="favicon.ico">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="aset/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="aset/fa/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="aset/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="aset/plugins/iCheck/square/blue.css">
	<!-- login -->
    <link rel="stylesheet" href="aset/bootstrap/css/login.css">
  </head>
  
  <body class="hold-transition login-page">
  <?php 
	
		if(isset($_GET['Err'])){
			echo "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-warning'></i>&nbsp; $Err!</h4>
                
              </div>";
		}
	
	?>
    <div class="login-box">
      <div class="login-logo ">
	  <div class="logo">
				<img src="logobuah.png"/>
			</div>
        <b>BUAH BAROKAH</b>
		<h5> Sistem Informasi Pengiriman Buah</h5>
		
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <b><p class="login-box-msg">SILAHKAN LOGIN</p></b>
        <form action="vl_user.php" method="post">
          <div class="form-group has-feedback">
            <b><input type="text" name="Username" class="form-control" placeholder=" Username" maxlength="30" /></b>
            <span class="form-control-feedback"><i class="fa fa-user"></i></span>
          </div>
          <div class="form-group has-feedback">
            <b><input type="password" name="Password" class="form-control" placeholder="Password" maxlength="255" /></b>
            <span class="form-control-feedback"><i class="fa fa-unlock"></i></span>
          </div>
          <div class="row">
            
            <div class="login-box-msg">
              <button type="submit" class="btn btn-primary"><b>Masuk &nbsp; </b><i class="fa fa-sign-in"></i></button>
            </div><!-- /.col -->
          </div>
		
        </form>
		
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="aset/plugins/iCheck/icheck.min.js"></script>
  </body>
</html>
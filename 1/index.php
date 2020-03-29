<?php

session_start();
include "../koneksi.php";
include "auth_user.php";
?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>BUAH BAROKAH</title>
	<!-- Icon -->
	<link rel="shortcut icon" type="image/icon" href="../favicon.ico">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../aset/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../aset/fa/css/font-awesome.css">
	 
    <!-- DataTables -->
    <link rel="stylesheet" href="../aset/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../aset/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../aset/dist/css/skins/_all-skins.min.css">
  </head>
  <body class="hold-transition skin-green fixed sidebar-mini">
    <div class="wrapper">
      <?php
        include "content_header.php";  
       ?>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
        <div class="pull-left image">
          <img src="../aset/foto/logobuah.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo "".$_SESSION["nama"]."" ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
		  <!-- sidebar menu: : style can be found in sidebar.less -->
          
		  <ul class="sidebar-menu">
              <li class="header"><h4><b><center>MENU NAVIGASI</center></b></h4></li>
              <li class="active"><a href="index.php"><i class="fa fa-home sz1"></i><span> &nbsp;Dashboard</span></a></li>
			        <li class="header"><b> PENGUNA</b></li>
					<li><a href="user.php"><i class="fa fa-user text-green sz1"></i><span>&nbsp;&nbsp;Pengguna</span></a></li>
					<li class="header"><b>GUDANG</b></li>
					<li><a href="pengirimangudang.php"><i class="fa  fa-truck text-aqua sz1"></i><span>&nbsp;&nbsp;&nbsp;Pengiriman Antar Gudang</span></a></li>
					<li><a href="pengirimantoko.php"><i class="fa fa-cube text-yellow sz1"></i><span>&nbsp;&nbsp;&nbsp;Pengiriman Ke Toko</span></a></li>
					<li class="header"><b> TRANSAKSI</b></li>
					<li><a href="keuangan.php"><i class="fa fa-money text-red sz1"></i><span>&nbsp;&nbsp;&nbsp;Transaksi Keuangan</span></a></li>
			</ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i> Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
			
			<a href="user.php" class="small-box-footer">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h4>Data</h5>

              <h4><b>Pengguna</b></h4>
			  <br>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <div class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></div>
          </div>
        </div>
		</a>
        <!-- ./col -->
		
       <a href="lihathujan.php" class="small-box-footer">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h4>Pengiriman</h5>

              <h4><b>Antar Gudang</b></h4>
			  <br>
            </div>
            <div class="icon">
              <i class="fa fa-truck"></i>
            </div>
            <div class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></div>
          </div>
        </div>
		</a>
        <!-- ./col -->
		
        <a href="inputoperator.php" class="small-box-footer">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h4>Pengiriman</h5>

              <h4><b>Ke Toko</b></h4>
			  <br>
            </div>
            <div class="icon">
              <i class="fa fa-cube"></i>
            </div>
          <div class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></div>
          </div>
        </div>
		</a>
        <!-- ./col -->
		
        <a href="lihatoperator.php" class="small-box-footer">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h4>Transaksi</h4>

              <h4><b>Keuangan</b></h4>
			  <br>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
           <div class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></div>
          </div>
        </div>
		</a>
        <!-- ./col -->
		
			
		  
            <div class="col-xs-12">
			<br>
              <div class="box">
                <div class="box-header">
					<h1><center><b>BUAH BAROKAH</b></center></h1>
					<center><img class="logokecil" src="../aset/foto/logobuah.png" width="225" height="225" /></center>
					<center><h2><b>Sistem Informasi Pengiriman Buah &copy;  <?php echo date ('Y') ?></b></h2></center>
					<center><h4><b>Jombang</b></h4></center>
                </div><!-- /.box-header -->
                <div class="box-body">
					
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <?php
		include	"content_footer.php";
	?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../aset/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../aset/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../aset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../aset/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../aset/dist/js/app.min.js"></script>
  </body>
</html>

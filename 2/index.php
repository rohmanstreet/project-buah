<?php

session_start();
include "../koneksi.php";
include "auth_user.php";
?>
<!DOCTYPE html>
<html>
 <head>
     <?php
        include "bundle_css.php";  
       ?>
  </head>
  <body class="hold-transition skin-green fixed sidebar-mini">
    <div class="wrapper">
      <?php
        include "content_header.php";  
       ?>
      <!-- Left side column. contains the logo and sidebar -->
       <?php
        include "aside.php";  
       ?>
		
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
		  <a href="gudang.php" class="small-box-footer">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h4>Data</h5>

              <h4><b>Gudang</b></h4>
			  <br>
            </div>
            <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
            <div class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></div>
          </div>
        </div>
		</a>
        <!-- ./col -->
		
       <a href="jenis.php" class="small-box-footer">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h4>Data</h5>

              <h4><b>Jenis</b></h4>
			  <br>
            </div>
            <div class="icon">
              <i class="fa fa-cubes "></i>
            </div>
            <div class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></div>
          </div>
        </div>
		</a>
        <!-- ./col -->
		
        <a href="penerimaanstok_gudang.php" class="small-box-footer">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h4>Transaksi</h5>

              <h4><b>Penerimaan</b></h4>
			  <br>
            </div>
            <div class="icon">
              <i class="fa fa-download"></i>
            </div>
          <div class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></div>
          </div>
        </div>
		</a>
        <!-- ./col -->
		
        <a href="pengirimanstok_gudang.php" class="small-box-footer">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h4>Transaksi</h4>

              <h4><b>Pengiriman</b></h4>
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
		
		<a href="keuangan.php" class="small-box-footer">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
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
 <?php
    include "bundle_script.php";
  ?>
   
  </body>
</html>

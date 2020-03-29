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
	<!-- Library CSS -->
	<?php
		include "bundle_css.php";
	?>
  </head>
  <body class="hold-transition skin-green fixed sidebar-mini">
    <div class="wrapper">
      <?php
        include 'content_header.php';
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
              <li ><a href="index.php"><i class="fa fa-home sz1"></i><span> &nbsp;Dashboard</span></a></li>
			        <li class="header"><b> PENGUNA</b></li>
					<li><a href="user.php"><i class="fa fa-user text-green sz1"></i><span>&nbsp;&nbsp;Pengguna</span></a></li>
					<li class="header"><b>GUDANG</b></li>
					<li class="active"><a href="pengirimangudang.php"><i class="fa  fa-truck text-aqua sz1"></i><span>&nbsp;&nbsp;&nbsp;Pengiriman Antar Gudang</span></a></li>
					<li><a href="penerimaangudang.php"><i class="fa  fa-truck text-aqua sz1"></i><span>&nbsp;&nbsp;&nbsp;Penerimaan Antar Gudang</span></a></li>
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
            Data Pengiriman Antar Gudang
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-user-circle-o"></i> Data Pengiriman Antar Gudang</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
					<h5>Pengiriman</h5>
                </div><!-- /.box-header -->
                <div class="box-body">
				  <table id="data" class="table table-bordered table-striped table-scalable">
						<?php
							include "dt_pengirimangudang.php";
						?>
                  </table>
				  
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
	<!-- Library Scripts -->
	<?php
		include "bundle_script.php";
	?>
  </body>
</html>
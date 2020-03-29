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
              <li class="active"><a href="index.php"><i class="fa fa-home sz1"></i><span>&nbsp;&nbsp;&nbsp;Dashboard</span></a></li>
			   
              
              <li class="header"><b>DATA MASTER</b></li>
                <li><a href="gudang.php"><i class="fa fa-archive text-red sz1"></i>&nbsp;&nbsp;&nbsp; Gudang</a></li>
                <li><a href="jenis.php"><i class="fa fa-cubes text-yellow sz1"></i>&nbsp; &nbsp;&nbsp; Jenis</a></li>
              
				<li class="header"><b>Transaksi</b></li>
					<li><a href="penerimaanstok_gudang.php"><i class="fa fa-download text-blue sz1"></i><span>&nbsp;&nbsp;&nbsp;Transaksi Penerimaan</span></a></li>
					<li><a href="pengirimanstok_gudang.php"><i class="fa fa-truck text-green sz1"></i><span>&nbsp;&nbsp;&nbsp;Transaksi pengiriman</span></a></li>
					<li><a href="pengiriman_toko.php"><i class="fa fa-truck text-green sz1"></i><span>&nbsp;&nbsp;&nbsp;Transaksi pengiriman ke toko</span></a></li>
					<li><a href="keuangan.php"><i class="fa fa-money text-aqua sz1"></i><span>&nbsp;&nbsp;&nbsp;Transaksi Keuangan</span></a></li>
			</ul>
        </section>
        <!-- /.sidebar -->
      </aside>
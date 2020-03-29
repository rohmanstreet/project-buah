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
					<li class="active"><a href="user.php"><i class="fa fa-user text-green sz1"></i><span>&nbsp;&nbsp;Pengguna</span></a></li>
					<li class="header"><b>GUDANG</b></li>
					<li><a href="pengirimangudang.php"><i class="fa  fa-truck text-aqua sz1"></i><span>&nbsp;&nbsp;&nbsp;Pengiriman Antar Gudang</span></a></li>
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
            Data Pengguna
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-user-circle-o"></i> Pengguna</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">

                </div><!-- /.box-header -->
                <div class="box-body">
				<a href="#"><button class="btn btn-success" type="button" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i> Tambah Pengguna</button></a>
                  <br></br>
				  <table id="data" class="table table-bordered table-striped table-scalable">
						<?php
							include "dt_user.php";
						?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
		
		<!-- Modal Popup Dosen -->
		<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Form Tambah Pengguna</h4>
						<br />
					</div>
					<div class="modal-body">
						<form action="user_add.php" name="modal_popup" enctype="multipart/form-data" method="post">
							
							<div class="form-group">
								<label>Nama</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-male"></i>
										</div>
										<input name="nama" type="text" class="form-control" placeholder="Nama Pengguna"/>
									</div>
							</div>
							<div class="form-group">
								<label>Username</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="username" type="text" class="form-control" placeholder="Username Pengguna"/>
									</div>
							</div>
							<div class="form-group">
								<label>Password</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-lock"></i>
										</div>
										<input name="password" type="text" class="form-control" placeholder="Password Pengguna"/>
									</div>
							</div>
							<div class="form-group">
								<label>Jabatan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-group"></i>
										</div>
										<select name="jabatan" class="form-control">
											<option selected>Pilih Jabatan</option>
											<option value="1">Admin</option>
											<option value="2">Admin Gudang</option>
										</select>
									</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Simpan
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Batal
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal Popup Dosen Edit -->
		<div id="ModalEditUser" class="modal fade" tabindex="-1" role="dialog"></div>
				
		<!-- Modal Popup untuk delete--> 
		<div class="modal fade" id="modal_delete">
			<div class="modal-dialog">
				<div class="modal-content" style="margin-top:100px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" style="text-align:center;">Yakin ingin menghapus informasi ini ?</h4>
					</div>    
					<div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
						<a href="#" class="btn btn-danger" id="delete_link">Hapus aja</a>
						<button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
					</div>
				</div>
			</div>
		</div>
		
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
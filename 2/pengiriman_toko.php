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
 		<?php
        include 'aside.php';
       ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            pengiriman ke toko
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-columns"></i> pengiriman ke toko</li>
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
				<a href="#"><button class="btn btn-success" type="button" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i> Add</button></a>
                  <br></br>
				  <table id="data" class="table table-bordered table-striped table-scalable">
					<thead>
					<tr>
						<th>kode admin</th>
						<th>di kirim dari</th>
						<th>di kirim ke toko</th>
						<th>jenis</th>
						<th>jumlah</th>
						<th>tgl kirim</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$qpnsgdg = mysqli_query ($konek, "SELECT * FROM tb_pengirimantoko WHERE id_admin=".$_SESSION["id_admin"]."");
						if($qpnsgdg == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($respnsgdg = mysqli_fetch_array ($qpnsgdg)){
							
							echo "
								<tr>
									<td>$respnsgdg[id_admin]</td>
									<td>$respnsgdg[nm_gudang]</td>
									<td>$respnsgdg[alamat]</td>
									<td>$respnsgdg[jenis]</td>
									<td>$respnsgdg[jumlah]</td>
									<td>$respnsgdg[tgl]</td>
									<td>
										<a href='#' class='open_modal' id_pgrimgdg='$respnsgdg[id_kirimtoko]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"pengiriman_toko_delete.php?id_kirimtoko=$respnsgdg[id_kirimtoko]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>
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
						<h4 class="modal-title">Tambah pengiriman ke toko</h4>
					</div>
					<div class="modal-body">
						<form action="pengiriman_toko_add.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Tanggal Kirim</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input id="tgl_kirim" name="tgl_kirim" type="text" class="form-control" placeholder="Tanggal kirim" required>
									</div>
							</div>
										<input name="id_pgrimgdg" type="hidden" class="form-control" />
										<input name="id_admin" type="hidden" value="<?php echo "".$_SESSION["id_admin"]."" ?>" class="form-control"/>
							<div class="form-group">
								<label>Di Kirim dari Gudang</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="id_gudang" class="form-control">
										<?php
											
											$querygudang = mysqli_query($konek, "SELECT * FROM tb_gudang");
											if ($querygudang == false){
												die ("Terdapat Kesalahan : ". mysqli_error($konek));
											}
											while ($gudang = mysqli_fetch_array($querygudang)){
												echo "<option value='$gudang[nm_gudang]'>$gudang[nm_gudang]</option>";
											}
										?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Di Kirim ke Alamat Toko</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-unlock"></i>
										</div>
										<textarea name="alamat" type="text" class="form-control" placeholder="Alamat"></textarea>
									</div>
							</div>
							
							<div class="form-group">
								<label>Jenis buah</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="id_jenis" class="form-control" >
										<?php
											
											$queryjenis = mysqli_query($konek, "SELECT * FROM tb_jenis");
											if ($queryjenis == false){
												die ("Terdapat Kesalahan : ". mysqli_error($konek));
											}
											while ($jenis = mysqli_fetch_array($queryjenis)){
												echo "<option value='$jenis[nm_jenis]'>$jenis[nm_jenis]</option>";
											}
										?>
										</select>
									</div>
							</div>
							
							<div class="form-group">
								<label>jumlah</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-columns"></i>
										</div>
										<input name="jumlah" type="number" class="form-control" placeholder="Kg" required/>
									</div>
							</div>

							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Add
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</button>
							</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal Popup Dosen Edit -->
		<div id="ModalEditToko" class="modal fade" tabindex="-1" role="dialog"></div>
		
		<!-- Modal Popup untuk delete--> 
		<div class="modal fade" id="modal_delete">
			<div class="modal-dialog">
				<div class="modal-content" style="margin-top:100px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" style="text-align:center;">Anda yakin menghapus data ini ?</h4>
					</div>    
					<div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
						<a href="#" class="btn btn-danger" id="delete_link">Delete</a>
						<button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
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

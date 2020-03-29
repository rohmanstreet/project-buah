<?php

include "../koneksi.php";

$id_pnsgdg	= $_GET["id_pnsgdg"];

$querypenerimaanstok_gudang = mysqli_query($konek, "SELECT * FROM tbl_penerimaanstokgudang WHERE id_pnsgdg='$id_pnsgdg'");
if($querypenerimaanstok_gudang == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($penerimaanstok_gudang = mysqli_fetch_array($querypenerimaanstok_gudang)){

?>
	<!-- page script -->
<!-- Modal Popup Dosen -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit penerimaanstok_gudang</h4>
					</div>
					<div class="modal-body">
						<form action="penerimaanstok_gudang_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<input name="id_pnsgdg" type="hidden" class="form-control" value="<?php echo $penerimaanstok_gudang["id_pnsgdg"]; ?>">
						 	<div class="form-group">
								<label>Tanggal Terima</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input id="tgl_terima" name="tgl_terimabr" type="text" class="form-control" value="<?php echo $penerimaanstok_gudang["tgl"]; ?>">
									</div>
							</div>
							<div class="form-group">
								<label>Jenis buah</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="id_jenisbr" class="form-control" >
										 
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
								<label>Jenis buah</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="id_gudangbr" class="form-control">
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
								<label>jumlah</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-columns"></i>
										</div>
										<input name="jumlahbr" type="text" class="form-control" placeholder="jumlah" required/>
									</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Save
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			
<?php
			}

?>
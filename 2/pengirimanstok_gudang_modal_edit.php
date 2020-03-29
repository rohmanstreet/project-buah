<?php

include "../koneksi.php";

$id_pgrimgdg	= $_GET["id_pgrimgdg"];

$querypengirimanstok_gudang = mysqli_query($konek, "SELECT * FROM tb_pengirimstokgudang WHERE id_pgrimgdg='$id_pgrimgdg'");
if($querypengirimanstok_gudang == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($pengirimanstok_gudang = mysqli_fetch_array($querypengirimanstok_gudang)){

?>
	<!-- page script -->
<!-- Modal Popup Dosen -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit pengirimanstok_gudang</h4>
					</div>
					<div class="modal-body">
						<form action="pengirimanstok_gudang_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<input name="id_pgrimgdg" type="hidden" class="form-control" value="<?php echo $pengirimanstok_gudang["id_pgrimgdg"]; ?>">
						 	<div class="form-group">
								<label>Tanggal Terima</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input id="tgl_kirim" name="tgl_kirimbr" type="text" class="form-control" value="<?php echo $pengirimanstok_gudang["tgl"]; ?>">
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
										<input name="jumlahbr" type="text" class="form-control" value="<?php echo $pengirimanstok_gudang["jumlah"]; ?>" required/>
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
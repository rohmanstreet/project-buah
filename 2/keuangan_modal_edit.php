<?php

include "../koneksi.php";

$id_biaya	= $_GET["id_biaya"];

$querykeuangan = mysqli_query($konek, "SELECT * FROM tb_biaya WHERE id_biaya='$id_biaya'");
if($querykeuangan == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($keuangan = mysqli_fetch_array($querykeuangan)){

?>
	<!-- page script -->
<!-- Modal Popup Dosen -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit keuangan</h4>
					</div>
					<div class="modal-body">
						<form action="keuangan_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<input name="id_biaya" type="hidden" class="form-control" value="<?php echo $keuangan["id_biaya"]; ?>">
						 	<div class="form-group">
								<label>Tanggal Terima</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input id="tgl_transaksi" name="tgl_transaksibr" type="text" class="form-control" value="<?php echo $keuangan["tgl"]; ?>">
									</div>
							</div>
							<div class="form-group">
								<label>keperluan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="keperluanbr" type="text" class="form-control" value="<?php echo $keuangan["keperluan"]; ?>" required/>
									</div>
							</div>
							<div class="form-group">
								<label>gudang</label>
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
								<label>biaya</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-columns"></i>
										</div>
										<input name="biayabr" type="text" class="form-control" value="<?php echo $keuangan["biaya"]; ?>" required/>
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
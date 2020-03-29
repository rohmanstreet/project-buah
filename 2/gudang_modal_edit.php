<?php

include "../koneksi.php";

$id_gdg	= $_GET["id_gdg"];

$querygudang = mysqli_query($konek, "SELECT * FROM tb_gudang WHERE id_gdg='$id_gdg'");
if($querygudang == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($gudang = mysqli_fetch_array($querygudang)){

?>
	<!-- page script -->
<!-- Modal Popup Dosen -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit gudang</h4>
					</div>
					<div class="modal-body">
						<form action="gudang_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Kode gudang</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-columns"></i>
										</div>
										<input name="id_gdg" type="text" class="form-control" value="<?php echo $gudang["id_gdg"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>gudang</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-columns"></i>
										</div>
										<input name="nm_gudang" type="text" class="form-control" value="<?php echo $gudang["nm_gudang"]; ?>"/>
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
<?php

include "../koneksi.php";

$id_jns	= $_GET["id_jns"];

$queryjenis = mysqli_query($konek, "SELECT * FROM tb_jenis WHERE id_jns='$id_jns'");
if($queryjenis == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($jenis = mysqli_fetch_array($queryjenis)){

?>
	<!-- page script -->
<!-- Modal Popup Dosen -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit jenis</h4>
					</div>
					<div class="modal-body">
						<form action="jenis_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Kode jenis</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-columns"></i>
										</div>
										<input name="id_jns" type="text" class="form-control" value="<?php echo $jenis["id_jns"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>jenis</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-columns"></i>
										</div>
										<input name="nm_jenis" type="text" class="form-control" value="<?php echo $jenis["nm_jenis"]; ?>"/>
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
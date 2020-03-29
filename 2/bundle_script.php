
    <!-- jQuery 2.1.4 -->
    <script src="../aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../aset/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../aset/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../aset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../aset/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../aset/dist/js/app.min.js"></script>
	<!-- Daterange Picker -->
	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="../aset/plugins/select2/select2.full.min.js"></script>
	<script src="../aset/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<!-- page script -->
    <script>
      $(function () {	
		// Daterange Picker
		$('#tgl_terima').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			format: 'YYYY-MM-DD'
		});
		$('#tgl_kirim').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			format: 'YYYY-MM-DD'
		});
		$('#tgl_transaksi').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			format: 'YYYY-MM-DD'
		});
		
		  // Data Table
        $("#data").dataTable({
			scrollX: true
		});		
      });
    </script>
	
	<!-- Date Time Picker -->
	<script>
		$(function (){
			$('#Jam_Mulai').datetimepicker({
				format: 'HH:mm'
			});
			
			$('#Jam_Selesai').datetimepicker({
				format: 'HH:mm'
			});
		});
	</script>
	
	<!-- Javascript Edit--> 
	<script type="text/javascript">
		$(document).ready(function () {
		
		// gudang
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id_gdg");
				$.ajax({
					url: "gudang_modal_edit.php",
					type: "GET",
					data : {id_gdg: m,},
					success: function (ajaxData){
					$("#ModalEditgudang").html(ajaxData);
					$("#ModalEditgudang").modal('show',{backdrop: 'true'});
					}
				});
			});
		// jenis
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id_jns");
				$.ajax({
					url: "jenis_modal_edit.php",
					type: "GET",
					data : {id_jns: m,},
					success: function (ajaxData){
					$("#ModalEditjenis").html(ajaxData);
					$("#ModalEditjenis").modal('show',{backdrop: 'true'});
					}
				});
			});
		//Meditpnsgdg
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id_pnsgdg");
				$.ajax({
					url: "penerimaanstok_gudang_modal_edit.php",
					type: "GET",
					data : {id_pnsgdg: m,},
					success: function (ajaxData){
					$("#Meditpnsgdg").html(ajaxData);
					$("#Meditpnsgdg").modal('show',{backdrop: 'true'});
					}
				});
			});

			//pengirimanstok_gudang_modal_edit.php
			$(".open_modal").click(function(e) {
			var m = $(this).attr("id_pgrimgdg");
				$.ajax({
					url: "pengirimanstok_gudang_modal_edit.php",
					type: "GET",
					data : {id_pgrimgdg: m,},
					success: function (ajaxData){
					$("#Meditpgirim").html(ajaxData);
					$("#Meditpgirim").modal('show',{backdrop: 'true'});
					}
				});
			});

			//Meditkeuangan
			$(".open_modal").click(function(e) {
			var m = $(this).attr("id_biaya");
				$.ajax({
					url: "keuangan_modal_edit.php",
					type: "GET",
					data : {id_biaya: m,},
					success: function (ajaxData){
					$("#Meditkeuangan").html(ajaxData);
					$("#Meditkeuangan").modal('show',{backdrop: 'true'});
					}
				});
			});

		});
	</script>
	
	<!-- Javascript Delete -->
	<script>
		function confirm_delete(delete_url){
			$("#modal_delete").modal('show', {backdrop: 'static'});
			document.getElementById('delete_link').setAttribute('href', delete_url);
		}
	</script>
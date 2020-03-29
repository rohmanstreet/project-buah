				<thead>
					<tr>
						<th>Nama Admin</th>
						<th>Tanggal</th>
						<th>Jenis</th>
						<th>Jumlah</th>
						<th>Di Kirim ke</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$queryuser = mysqli_query ($konek, "SELECT  
						tb_pengirimstokgudang.id_admin,
						tb_pengirimstokgudang.jenis,
						tb_pengirimstokgudang.gudang,
						tb_pengirimstokgudang.jumlah,
						tb_pengirimstokgudang.tgl,
						admin.id_admin,
						admin.nama FROM
						tb_pengirimstokgudang INNER JOIN admin ON
						tb_pengirimstokgudang.id_admin=admin.id_admin");
						if($queryuser == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($user = mysqli_fetch_array ($queryuser)){
							
							echo "
								<tr>
									<td>$user[nama]</td>
									<td>$user[tgl]</td>
									<td>$user[jenis]</td>
									<td>$user[jumlah]</td>
									<td>$user[gudang]</td>
								</tr>";
						}
					?>
				</tbody>
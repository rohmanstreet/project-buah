				<thead>
					<tr>
						<th>Nama Admin</th>
						<th>Tanggal</th>
						<th>Jenis</th>
						<th>Jumlah</th>
						<th>Di Kirim dari</th>
						<th>ke Toko</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$queryuser = mysqli_query ($konek, "SELECT  
						tb_pengirimantoko.id_admin,
						tb_pengirimantoko.jenis,
						tb_pengirimantoko.nm_gudang,
						tb_pengirimantoko.alamat,
						tb_pengirimantoko.jumlah,
						tb_pengirimantoko.tgl,
						admin.id_admin,
						admin.nama FROM
						tb_pengirimantoko INNER JOIN admin ON
						tb_pengirimantoko.id_admin=admin.id_admin");
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
									<td>$user[nm_gudang]</td>
									<td>$user[alamat]</td>
								</tr>";
						}
					?>
				</tbody>
				<thead>
					<tr>
						<th>Nama Admin</th>
						<th>Tanggal</th>
						<th>Jenis</th>
						<th>Jumlah</th>
						<th>Di Terima</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$queryuser = mysqli_query ($konek, "SELECT  
						tbl_penerimaanstokgudang.id_admin,
						tbl_penerimaanstokgudang.nm_jenis,
						tbl_penerimaanstokgudang.nm_gudang,
						tbl_penerimaanstokgudang.jumlah,
						tbl_penerimaanstokgudang.tgl,
						admin.id_admin,
						admin.nama FROM
						tbl_penerimaanstokgudang INNER JOIN admin ON
						tbl_penerimaanstokgudang.id_admin=admin.id_admin");
						if($queryuser == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($user = mysqli_fetch_array ($queryuser)){
							
							echo "
								<tr>
									<td>$user[nama]</td>
									<td>$user[tgl]</td>
									<td>$user[nm_jenis]</td>
									<td>$user[jumlah]</td>
									<td>$user[nm_gudang]</td>
								</tr>";
						}
					?>
				</tbody>
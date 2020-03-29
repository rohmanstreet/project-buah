				<thead>
					<tr>
						<th>Nama Admin</th>
						<th>Tanggal</th>
						<th>Keperluan</th>
						<th>Biaya</th>
						<th>Di Gudang</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$queryuser = mysqli_query ($konek, "SELECT  
						tb_biaya.id_admin,
						tb_biaya.keperluan,
						tb_biaya.nm_gudang,
						tb_biaya.biaya,
						tb_biaya.tgl,
						admin.id_admin,
						admin.nama FROM
						tb_biaya INNER JOIN admin ON
						tb_biaya.id_admin=admin.id_admin");
						if($queryuser == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($user = mysqli_fetch_array ($queryuser)){
							
							echo "
								<tr>
									<td>$user[nama]</td>
									<td>$user[tgl]</td>
									<td>$user[keperluan]</td>
									<td>$user[biaya]</td>
									<td>$user[nm_gudang]</td>
								</tr>";
						}
					?>
				</tbody>
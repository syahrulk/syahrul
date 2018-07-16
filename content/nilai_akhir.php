
		
		<div class="panel panel-header" style="border-bottom:0px #aaa solid;border-top:1px #aaa solid; padding:0px;border-radius:0px;">
		<center></center>
		</div>
            <div class="panel-body">
                <div class="form-group">
					<div class="table">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>NIM</th>
									<th>Nama Mahasiswa</th>
									<th>Nilai Akhir</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$sql = mysql_query("SELECT * FROM mahasiswa,nilai where nilai.id_mahasiswa=mahasiswa.id_mahasiswa order by id_nilai");		 
									$jumlah = mysql_num_rows($sql);
									$no=1;
									while ($r=mysql_fetch_array($sql)){ 
									$nilai_1    = 0.25*$r[nilai_tugas];
									$nilai_2    = 0.35*$r[nilai_mid];
									$nilai_3    = 0.40*$r[nilai_final];
									$nilai_akhir = $nilai_1 + $nilai_2 + $nilai_3 ;
									echo"
								<tr>
									<td>$no</td>
									<td>
										$r[nim]
									</td>	
									<td>
										$r[nama]
									</td>	
									<td>
										$nilai_akhir
									</td>		 
								";								
								$no++; 
								}
								echo"
								
								</tr> 
								";
								?>
							</tbody>
						</table>
					</div>
				</div>
            </div>
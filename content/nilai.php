<div class="container">
	<div style='margin-top:10px;' class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Form Penilaian Siswa</h3>
		</div>
		<div class="panel-body" style="padding-bottom:0px;">
			<form method='post' action='input_nilai' class="form-horizontal">
                    <div class="form-group" style="margin-bottom:4px;">
                        <label for="inputEmail3" class="col-sm-2 control-label">
                            ID Siswa
                        </label>
                        <div class="col-sm-5">
                            <input type="text" name="id_mahasiswa" id="id_mahasiswa" class="form-control" placeholder="ID Siswa" readonly>
                        </div>
                        <div class="col-sm-5">
                            <button type="button" style="margin-left:-25px;" class="btn btn-default" href="#myModal" data-toggle="modal" data-target="#myModal"><b>. . .</b></button>
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom:4px;">
                        <label for="inputEmail3" class="col-sm-2 control-label">
                            kelas
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="" id="nim" class="form-control" placeholder="Kelas" readonly>
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom:4px;">
                        <label for="inputEmail3" class="col-sm-2 control-label">
                            Nama
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="" id="nama" class="form-control" placeholder="Nama Mahasiswa" readonly>
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom:10px;">
                        <label for="inputEmail3" class="col-sm-2 control-label">
                            Nilai Tugas
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="nilai_tugas" id="jumlah" class="form-control" placeholder="Nilai Tugas" value=""> 
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom:10px;">
                        <label for="inputEmail3" class="col-sm-2 control-label">
                            Nilai MID
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="nilai_mid" id="jumlah" class="form-control" placeholder="Nilai MID" value=""> 
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom:10px;">
                        <label for="inputEmail3" class="col-sm-2 control-label">
                            Nilai Final
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="nilai_final" id="jumlah" class="form-control" placeholder="Nilai Final" value=""> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">
                            
                        </label>
                        <div class="col-sm-10">
							<input class='btn btn-primary' type='submit' value='Input' style="float:right; margin-left:4px;" />
							<a style="float:right;" class='btn btn-warning'  href=''>Batal</a>
                        </div>
                    </div>
				</form>
		</div>
		<?php include"nilai_akhir.php"; ?>
	</div>
</div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="width:800px">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <center><h4 class="modal-title" id="myModalLabel">Pilih Mahasiswa</h4></center>
                    </div>
                    <div class="modal-body">
						<table id="example1" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>ID Mahasiswa</th>
									<th>NIM</th>
									<th>Nama</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$sql = mysql_query("SELECT * FROM mahasiswa order by nama asc");		 
									$jumlah = mysql_num_rows($sql);
									while ($r=mysql_fetch_array($sql)){ 
									echo"
								<tr style='cursor:pointer' class='pilih' data-id_mahasiswa=$r[id_mahasiswa] data-nim='$r[nim]' data-nama='$r[nama]'>
									<td>$r[id_mahasiswa]</td>
									<td>$r[nim]</td>
									<td>$r[nama]</td>
								</tr> 
		 
								";
								}
								?>
		 

							</tbody>
						</table>
                    </div>
                </div>
            </div>
        </div>
		
        <script type="text/javascript">
            $(function() {
                $('#example1').dataTable();
            });
        </script>
		
		
        <script type="text/javascript">

//            jika dipilih, nim akan masuk ke input dan modal di tutup
            $(document).on('click', '.pilih', function (e) {
                document.getElementById("id_mahasiswa").value = $(this).attr('data-id_mahasiswa');
                document.getElementById("nim").value = $(this).attr('data-nim');
                document.getElementById("nama").value = $(this).attr('data-nama');
                $('#myModal').modal('hide');
            });
            

//            tabel lookup mahasiswa
            $(function () {
                $("#lookup").dataTable();
            });
        </script>
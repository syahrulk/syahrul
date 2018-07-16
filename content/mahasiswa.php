    <div class="container">
        <div style='margin-top:10px;' class="panel panel-default">
            <div class="panel-heading">
                    <h3 class="panel-title">Data Siswa</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                        <div class="table">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Kelas</th>
                            <th>Nama</th>
                            <th><a href="add_mahasiswa" class="btn btn-default btn-sm">Tambah</a></th>
                        </tr>
               <tbody>
			                      </thead>
<?php 
$tampil = mysql_query("SELECT * FROM mahasiswa");
	while ($r = mysql_fetch_array($tampil)) {
    echo"  
                        <tr>
                            <td>$r[nim]</td>
                            <td>$r[nama]</td>
                            <td>
								<a href='hapus-$r[id_mahasiswa].php' class='btn btn-default btn-sm'>Hapus</a>
							</td>
                        </tr>  
		";}?>                                        
                    </tbody>
                </table>
                        </div><!-- /.box-body -->
                    </div>
            </div>
        </div>
    </div>
        <script type="text/javascript">
            $(function() {
                $('#example1').dataTable();
            });
        </script>
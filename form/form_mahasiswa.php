<div class="container">
        <div style='margin-top:10px;' class="panel panel-default">
            <div class="panel-heading">
                    <h3 class="panel-title">Form Input Data siswa</h3>
            </div>
            <div class="panel-body">
                <form method="post" action="input_mahasiswa" class="form-horizontal">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">
                            KELAS
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="nim" class="form-control" placeholder="Nomor Induk siswa" value=""> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">
                            Nama
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control" placeholder="Nama Mahasiswa" value="">
                        </div>
                    </div>
                    <input type="hidden" name="id_mahasiswa" value="">
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
							<a href="mahasiswa" class="btn btn-default">Batal</a>
                            <button type="submit" class="btn btn-default">Input</button>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php error_reporting(0); ?>
<?php include"config/koneksi.php";?>
<?php include"config/fungsi_rupiah.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tugas akhir UAS</title>
    <link href="assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="assets/admin/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="assets/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/admin/datatables/css/dataTables.bootstrap.css">
</head>
<body>
	<div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
			<ul class="nav navbar-nav">
                <li class="dropdown">
					<li class="dropdown">
						<a href="home" class="dropdown-toggle">Home<b ></b></a>
					</li>
                </li>
            </ul>			
			<ul class="nav navbar-nav">
                <li class="dropdown">
					<li class="dropdown">
						<a href="mahasiswa" class="dropdown-toggle" >Data siswa</a>							
					</li>
                </li>
            </ul>		
			<ul class="nav navbar-nav">
                <li class="dropdown">
					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown">Administrasi<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li>
									<a href='nilai'>Penilaian siswa</a>
								</li>
							</ul>
					</li>
                </li>
            </ul>
        </nav>
	</div>
    <script src="assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="assets/admin/dist/js/sb-admin-2.js"></script>
    <script src="assets/admin/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/admin/datatables/js/dataTables.bootstrap.js"></script>	
      <?php include"content.php";?>              
</body>
<?php include"content/footer.php";?>
</html>

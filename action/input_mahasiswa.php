<?php

function inject($data){
  $filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;
}

$nim = inject($_POST['nim']);
$nama = inject($_POST['nama']);

$sqlSimpan="INSERT INTO mahasiswa (nim,
								nama) 
                            VALUES('$nim',
                                   '$nama')";

mysql_query($sqlSimpan)
or die ("Gagal Perintah SQL".mysql_error());
header('location:mahasiswa');
?>
<?php

function inject($data){
  $filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;
}

$id_mahasiswa = inject($_POST['id_mahasiswa']);
$nilai_tugas = inject($_POST['nilai_tugas']);
$nilai_mid = inject($_POST['nilai_mid']);
$nilai_final = inject($_POST['nilai_final']);

$sqlSimpan="INSERT INTO nilai (id_mahasiswa,
							   nilai_tugas,
							   nilai_mid,
							   nilai_final) 
                            VALUES('$id_mahasiswa',
								   '$nilai_tugas',
								   '$nilai_mid',
								   '$nilai_final')";

mysql_query($sqlSimpan)
or die ("Gagal Perintah SQL".mysql_error());
header('location:nilai');
?>
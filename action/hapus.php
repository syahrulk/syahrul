<?php
mysql_query("DELETE FROM mahasiswa WHERE id_mahasiswa='$_GET[id]'");
header('location:mahasiswa');
?>
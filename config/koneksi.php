<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "mhs";

// Koneksi dan memilih database di server
mysql_connect($host,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
?>

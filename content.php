
<?php 

if ($_GET[module]=='home'){
include"content/gangguan.php";
}
elseif ($_GET[module]=='mahasiswa'){
include"content/mahasiswa.php";
}
elseif ($_GET[module]=='add_mahasiswa'){
include"form/form_mahasiswa.php";
}
elseif ($_GET[module]=='input_mahasiswa'){
include"action/input_mahasiswa.php";
}
elseif ($_GET[module]=='nilai'){
include"content/nilai.php";
}
elseif ($_GET[module]=='input_nilai'){
include"action/input_nilai.php";
}
elseif ($_GET[module]=='hapus'){
include"action/hapus.php";
}
elseif ($_GET[module]=='print_keranjang'){
include"content/print_keranjang.php";
}
elseif ($_GET[module]=='laporan'){
include"content/laporan.php";
}
?>
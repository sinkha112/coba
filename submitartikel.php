<?php

$dbhost ="localhost";
$dbuser ="root";
$dbpassword ="";
$dbname ="postingan";
$koneksi = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
mysqli_select_db($koneksi,$dbname);

$judul = $_POST['judul_artikel'];
$isi = $_POST['isi_artikel'];
$tgl = date('Y-m-d');

$query = mysqli_query($koneksi,"INSERT INTO artikel VALUES ('','$judul','$isi','$tgl')");

if ($query) {

echo 'Artikel Sudah dibuat dengan judul '.$judul ;
}
else
{

echo 'gagal membuat artikel dengan judul '.$judul ;

mysql_close();
}
?>

<div class="buttonarticle1">
  <a href="viewartikel.php" class="btn btn-dua">Kembali</a>
</div>

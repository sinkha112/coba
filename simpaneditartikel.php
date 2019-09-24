<?php
include("koneksiartikel.php");

if( isset($_POST['simpan']) ) {
  $id = $_POST['id'];
  $judulartikel = $_POST['judul_artikel'];
  $isiartikel = $_POST['isi_artikel'];

  $sql = "UPDATE artikel SET judul_artikel='$judulartikel', isi_artikel='$isiartikel' WHERE id=$id";
  $query = mysqli_query($db, $sql);
} else {
  die("Akses dilarang...");
}

if ($query) {
  header('Location: viewartikel.php');
} else {
  die("Gagal menyimpan perubahan...");
}
 ?>

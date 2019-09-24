<?php
include("koneksiartikel.php");

$id = $_GET['id'];
$sql = "SELECT * FROM artikel WHERE id=$id LIMIT 1";
$query = mysqli_query($db, $sql);
$r = mysqli_fetch_array($query);
echo "<h2>".$r['judul_artikel']."</h2>";
echo $r['isi_artikel'];
?>

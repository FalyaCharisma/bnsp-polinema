<?php
include'../koneksi.php'; //menyisipkan/memanggil file koneksi.php untuk koneksi data dengan basis data

$id_surat = $_GET['id'];

mysqli_query($db, "DELETE FROM surat WHERE id_surat ='$id_surat'");

header("location:../pages/surat.php");
?>
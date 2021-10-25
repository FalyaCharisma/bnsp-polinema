<?php
include'../koneksi.php'; //menyisipkan/mamanggil file koneksi.php untuk koneksi dengan database

$id_surat = $_POST['id_surat'];
$nomor_surat = $_POST['nomor_surat'];
$kategori = $_POST['kategori'];
$judul = $_POST['judul'];
$waktu = $_POST['waktu'];

if(isset($_POST['simpan'])){
	extract($_POST);
	$nama_file = $_FILES['file']['name'];

	if(!empty($nama_file)){
		//Baca lokasi file sementara dan nama file dari form (fupload)
		$lokasi_file = $_FILES['file']['tmp_name'];
		$tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
		$file = $nomor_surat.".".$tipe_file;

		$folder = "../files/$file"; //Tentukan folder penyimpanan file
		move_uploaded_file($lokasi_file, "$folder"); //Apabila file berhasil diupload
	}else{
		$file="-";
	}

	$sql = "INSERT INTO surat VALUES('$id_surat', '$nomor_surat', '$kategori', '$judul', '$waktu', '$file')";
	$query = mysqli_query($db, $sql);

	header("location:../pages/surat.php");
}
?>
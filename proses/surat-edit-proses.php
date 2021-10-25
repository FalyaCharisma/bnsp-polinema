<?php
include'../koneksi.php'; 

$id_surat = $_POST['id_surat'];
$nomor_surat = $_POST['nomor_surat'];
$kategori = $_POST['kategori'];
$judul = $_POST['judul'];
$waktu = $_POST['waktu'];

if(isset($_POST['simpan'])){ //cek jika ada form yang disubmit
	extract($_POST);
	$nama_file = $_FILES['file']['name'];

	if(!empty($nama_file)){
		//baca lokasi file sementara dan nama file dari form
		$lokasi_file = $_FILES['file']['tmp_name'];
		$tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
		$file =  $nomor_surat.".".$tipe_file;

		$folder = "../files/$file"; //tentukan folder untuk menyimpan file
		@unlink ("$folder"); //hapus file yang lama, tanda @untuk menyembunyikan warning jika file tidak ditemukan
		move_uploaded_file($lokasi_file, $folder); //apabila file berhasil diupload
	} else {
		$file=$foto;
	}

	mysqli_query($db, "UPDATE surat
						SET nomor_surat='$nomor_surat', kategori='$kategori', judul='$judul', waktu='$waktu', file='$file'
						WHERE id_surat = '$id_surat'");

	header("location:../pages/surat.php");
}
?>
<?php
include'../koneksi.php'; 

$id_surat = $_GET['id'];
$q_tampil_surat = mysqli_query($db, "SELECT * FROM surat WHERE id_surat = '$id_surat'");
$r_tampil_surat= mysqli_fetch_array($q_tampil_surat);

?>
<?php
include'header.php'; 
?>

 <div class="main-panel">
        <div class="content-wrapper">
           <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <div id="label-page"><h3>Arsip Surat >> Lihat</h3></div>
					<div id="content">
						<table id="tabel-input">
							<tr>
								<td class="label-formulir">Nomor Surat : <?php echo $r_tampil_surat['nomor_surat']; ?> </td>
							</tr>
							<tr>
								<td class="label-formulir">Kategori : <?php echo $r_tampil_surat['kategori']; ?> </td>
							</tr>
							<tr>
								<td class="label-formulir">Judul : <?php echo $r_tampil_surat['judul']; ?> </td>
							</tr>
							<tr>
								<td class="label-formulir">Waktu : <?php echo $r_tampil_surat['waktu']; ?></td>
							</tr>
							<tr>
								<td class="isian-formulir">
									<embed type="application/pdf" src="../files/.pdf" width="800" height="600"></embed>
								</td>
							</tr>
						</table>
						 <td>
						 <br>
                             <a href="surat.php" class="btn btn-danger btn-sm"><< Kembali</a>
                             <a href="../proses/surat-unduh.php?id=<?php echo $r_tampil_surat['id_surat'];?>"class="btn btn-warning btn-sm">Unduh</a>
                             <a href="surat-edit.php?id=<?php echo $r_tampil_surat['id_surat'];?>" class="btn btn-info btn-sm">Edit</a>    
                        </td>
					</div>
				</div>
              </div>
            </div>
        <!-- partial:partials/_footer.html -->
 <?php
include'footer.php'; 
?>


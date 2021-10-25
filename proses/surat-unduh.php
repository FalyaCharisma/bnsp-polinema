<?php
include'../koneksi.php'; 
require("../vendor/autoload.php");

$id_surat = $_GET['id'];
$q_tampil_surat = mysqli_query($db, "SELECT * FROM surat WHERE id_surat = '$id_surat'");
$r_tampil_surat= mysqli_fetch_array($q_tampil_surat);
?>

<html>
<body>
	 <div class="main-panel">
        <div class="content-wrapper">
           <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <div id="label-page"><h3>Arsip Surat</h3></div>
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
					</div>
				</div>
              </div>
            </div>
</body>
</html>

<?php 

$html = ob_get_clean(); 
use Dompdf\Dompdf; 
require_once '../vendor/autoload.php'; 
$dompdf = new Dompdf(); 
$dompdf->loadHtml($html); 
$dompdf->setPaper('A4', 'portrait'); 
$dompdf->render(); 
$dompdf->stream(); 
?>
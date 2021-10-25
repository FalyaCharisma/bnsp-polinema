<?php

include'../koneksi.php';

$id_surat = $_GET['id'];
    $q_tampil_surat = mysqli_query($db, "SELECT * FROM surat WHERE id_surat= '$id_surat'");
    $r_tampil_surat = mysqli_fetch_array($q_tampil_surat);

?>

<?php
include'header.php'; 
?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
           <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Arsip Surat >> Edit</h4>
                  <h6>Edit surat yang telah diarsipkan</h6>
                  <h6>Catatan : Gunakan file berformat PDF.</h6><br>
                  <form class="forms-sample"  action="../proses/surat-edit-proses.php" method="post" enctype="multipart/form-data">
                    <table id="tabel-input">
                    <tr>
                        <td class="col-sm-3 col-form-label">Nomor Surat</td>
                        <td class="isian-formulir"><input type="text" name="nomor_surat" value="<?php echo $r_tampil_surat['nomor_surat'];?>" class="isian-formulir isian-formulir-border"></td>
                    </tr>
                    <tr>
                        <td class="col-sm-3 col-form-label">Kategori</td>
                        <td class="isian-formulir">
                         <select name="kategori" class="isian-formulir isian-formulir-borderl">
                          <option value="Pengumuman">Pengumuman</option>
                          <option value="Undangan">Undangan</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                        <td class="col-sm-3 col-form-label">Judul</td>
                        <td class="isian-formulir"><input type="text" name="judul" value="<?php echo $r_tampil_surat['judul'];?>" class="isian-formulir isian-formulir-border"></td>
                    </tr>
                     <tr>
                        <td class="col-sm-3 col-form-label">Waktu</td>
                        <td class="isian-formulir"><input type="date" name="waktu" value="<?php echo $r_tampil_surat['waktu'];?>" class="isian-formulir isian-formulir-border"></td>
                    </tr>
                    <tr>
                        <td class="col-sm-3 col-form-label">File Surat (PDF)</td>
                        <td class="isian-formulir">
                            <input type="file" name="file" class="isian-formulir isian-formulir-border">
                        </td>                
                    </tr>
                  </table>
                  </form>
                   <a href="surat.php" class="btn btn-light"><h7><< Kembali</h7></a>
                    <button type="submit" name="simpan" class="btn btn-primary mr-2">Simpan</button>
                </div>
              </div>
            </div>
        <!-- partial:partials/_footer.html -->
 <?php
include'footer.php'; 
?>

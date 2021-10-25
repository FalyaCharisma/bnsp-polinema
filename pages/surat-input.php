<?php

include'../koneksi.php';

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
                  <h4 class="card-title">Arsip Surat >> Unggah</h4>
                  <h6>Unggah surat yang telah terbit pada form ini untuk diarsipkan</h6>
                  <h6>Catatan : Gunakan file berformat PDF.</h6><br>
                  <form class="forms-sample"  action="../proses/surat-input-proses.php" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Nomor Surat</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="nomor_surat">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Kategori</label>
                      <div class="col-sm-9">
                        <select name="kategori" class="form-control">
                          <option value="Pengumuman">Pengumuman</option>
                          <option value="Undangan">Undangan</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Judul</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="judul">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Tanggal Arsip</label>
                      <div class="col-sm-9">
                      <input type="date" name="waktu" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3">File Surat (PDF)</label>
                      <div class="col-sm-9">
                         <input type="file" name="file" class="form-control" required="required">
                      </div>
                    </div>
                    <button type="submit" name="simpan" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
        <!-- partial:partials/_footer.html -->
 <?php
include'footer.php'; 
?>

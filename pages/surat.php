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
                  <h4 class="card-title">Arsip Surat</h4>
                  <h6>Berikut ini adalah surat-surat yang telah terbit dan diarsipkan. Klik "Lihat" pada kolom aksi untuk menampilkan surat.</h6>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nomor Surat</th>
                          <th>Kategori</th>
                          <th>Judul</th>
                          <th>Waktu Pengarsipan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                          <tbody>
                            <?php
                            $batas=5;
                            extract($_GET);
                            if(empty($hal)){
                              $posisi = 0;
                              $hal = 1;
                              $nomor = 1;
                            } else {
                              $posisi = ($hal-1) * $batas;
                              $nomor = $posisi+1;
                            }

                            if($_SERVER['REQUEST_METHOD'] == "POST"){
                              $pencarian = trim(mysqli_real_escape_string($db, $_POST['pencarian']));
                              if($pencarian != ""){
                                $sql = "SELECT * FROM surat WHERE  judul LIKE '%$pencarian%'";
                                $query = $sql;
                                $queryJml = $sql;

                              } else {
                                $query = "SELECT * FROM surat LIMIT $posisi, $batas";
                                $queryJml = "SELECT * FROM surat";
                                $no = $posisi * 1;
                              }
                            }
                            else{
                              $query = "SELECT * FROM surat LIMIT $posisi, $batas";
                              $queryJml = "SELECT * FROM surat";
                              $no = $posisi * 1;
                            }

                            //select from tbanggota
                            $q_tampil_surat = mysqli_query($db, $query);

                              if(mysqli_num_rows($q_tampil_surat)> 0){

                                  /*looping data anggota sesuai yang ada di database */
                                  while ($r_tampil_surat=mysqli_fetch_array($q_tampil_surat)) {
                                
                                ?>
                                <tr>
                                  <td><?php echo $r_tampil_surat['nomor_surat']; ?></td>
                                  <td><?php echo $r_tampil_surat['kategori']; ?></td>
                                  <td><?php echo $r_tampil_surat['judul']; ?></td>
                                  <td><?php echo $r_tampil_surat['waktu']; ?></td>
                                  <td>
                                    <div class="tombol-opsi-container"><a href="surat-lihat.php?id=<?php echo $r_tampil_surat['id_surat'];?>" class="tombol">Lihat</a>
                                    </div>
                                    <div class="tombol-opsi-container"><a href="../proses/surat-hapus.php?id=<?php echo $r_tampil_surat['id_surat'];?>" onclick = "return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini?')" class="tombol">Hapus</a>
                                    </div>
                                  </td>
                                </tr>
                                <?php 
                                    $nomor++;
                              } //selesai looping while 
                            }
                            else{
                              echo "<tr><td colspan=6>Data Tidak Ditemukan</td></tr>";
                            }
                            ?>
                          </tbody>
                    </table>
                      <?php
                        if(isset($_POST['pencarian'])){
                          if($_POST['pencarian']!=' '){
                            echo "<div style=\"float:left;\">";
                            $jml = mysqli_num_rows(mysqli_query($db, $queryJml));
                            echo "Data Hasil Pencarian: <b>$jml</b>";
                          }
                        } else {
                        ?>
                          <div style="float: left;">
                            <?php
                              $jml = mysqli_num_rows(mysqli_query($db, $queryJml));
                              echo "Jumlah Data : $jml";
                            ?>
                          </div>
                          <div style="float: right;">
                            <br>
                            <?php 
                            $jml_hal = ceil($jml / $batas);
                            for($i = 1; $i <= $jml_hal; $i++){
                              if($i != $hal){
                                echo "<a href=\"?p=pendaftaran&hal=$i\">$i</a>";
                              } else {
                                echo "<a class=\"active\">$i</a>";
                              }
                            }
                            ?>
                          </div>
                        <?php
                        }
                        ?>
                  </div>
                  <a href="surat-input.php" class="card-title"><h6>Arsipkan Surat</h6></a>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- partial:partials/_footer.html -->
<?php
include'footer.php'; 
?>

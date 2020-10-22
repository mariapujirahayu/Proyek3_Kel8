<?php include 'koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'includes/head.php' ?>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="https://github.com/mariapujirahayu" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="./assets/img/cover.jpg">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          SPK MOORA
          <!-- <div class="logo-image-big">
            <img src="./assets/img/oke.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li >
            <a href="./index.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./instansi.php">
              <i class="nc-icon nc-chart-pie-36"></i>
              <p>Data Instansi</p>
            </a>
          </li>
          <li class="active">
            <a href="./datanilai.php">
              <i class="nc-icon nc-user-run"></i>
              <p>Data Mahasiswa</p>
            </a>
          </li>
          <li>
            <a href="./logout.php">
              <i class="nc-icon nc-money-coins"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <?php include 'includes/navbar.php' ?>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Menambahkan Data Nilai Mahasiswa</h4>
              </div>
              <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nama Mahasiswa</label>
                        <input type="text" class="form-control" name="nama" required placeholder="Isi dengan nama mahasiswa...">
                      </div>
                      <div class="form-group">
                        <label>IPK (a1)</label>
                        <input type="number" class="form-control" name="a1" required placeholder="Isi nilai mahasiswa...">
                      </div>
                      <div class="form-group">
                        <label>Kemampuan Dasar (a2)</label>
                        <input type="number" class="form-control" name="a2" required placeholder="Isi nilai mahasiswa...">
                      </div>
                      <div class="form-group">
                        <label>Kemampuan Database (b1)</label>
                        <input type="number" class="form-control" name="b1" required placeholder="Isi nilai mahasiswa...">
                      </div>
                      <div class="form-group">
                        <label>Kemampuan Web (b2)</label>
                        <input type="number" class="form-control" name="b2" required placeholder="Isi nilai mahasiswa...">
                      </div>
                      <div class="form-group">
                        <label>Kemampuan Pemrograman (b3)</label>
                        <input type="number" class="form-control" name="b3" required placeholder="Isi nilai mahasiswa...">
                      </div>
                      <div class="form-group">
                        <label>Kemampuan Jaringan (b4)</label>
                        <input type="number" class="form-control" name="b4" required placeholder="Isi nilai mahasiswa...">
                      </div>
                      <div class="form-group">
                        <label>Kemampuan Desain (b5)</label>
                        <input type="number" class="form-control" name="b5" required placeholder="Isi nilai mahasiswa...">
                      </div>
                      <div class="form-group">
                        <label>Keaktifan (c1)</label>
                        <input type="number" class="form-control" name="c1" required placeholder="Isi nilai mahasiswa...">
                      </div>
                      <div class="form-group">
                        <label>Kedisplinan (c2)</label>
                        <input type="number" class="form-control" name="c2" required placeholder="Isi nilai mahasiswa...">
                      </div>
                      <div class="form-group">
                        <label>Keahlian Pemrograman (d1)</label>
                        <input type="number" class="form-control" name="d1" required placeholder="Isi nilai mahasiswa...">
                      </div>
                      <div class="form-group">
                        <label>Keahlian Jaringan (d2)</label>
                        <input type="number" class="form-control" name="d2" required placeholder="Isi nilai mahasiswa...">
                      </div>
                      <div class="form-group">
                        <label>Keahlian Desain (d3)</label>
                        <input type="number" class="form-control" name="d3" required placeholder="Isi nilai mahasiswa...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button class="btn btn-primary btn-round" name="save">Simpan</button>
                    </div>
                  </div>
                </form>

                <!-- database -->
                <?php
                  if (isset($_POST['save'])) {
                    $koneksi->query("INSERT INTO nilai_mahasiswa(nama_mahasiswa, a1, a2, b1, b2, b3, b4, b5, c1, c2,d1,d2,d3) 
                        VALUES('$_POST[nama]','$_POST[a1]','$_POST[a2]','$_POST[b1]','$_POST[b2]','$_POST[b3]','$_POST[b4]','$_POST[b5]','$_POST[c1]','$_POST[c2]','$_POST[d1]','$_POST[d2]','$_POST[d3]')");
                    echo "<div class='alert alert-info'>Data Tersimpan</div>";
                    echo "<meta http-equiv='refresh' content='1;url=datanilai.php'>";
                }
                ?>

              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include 'includes/footer.php' ?>
    </div>
  </div>
  <?php include 'includes/script.php' ?>
</body>

</html>

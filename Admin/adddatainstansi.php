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
        <a href="index.php" class="simple-text logo-normal">
          PKL
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
          <li class="active">
            <a href="./instansi.php">
              <i class="nc-icon nc-chart-pie-36"></i>
              <p>Data Instansi</p>
            </a>
          </li>
          <li>
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
                <h4 class="card-title">Tambah Data Instansi</h4>
              </div>
              <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nama Instansi</label>
                        <input type="text" class="form-control" name="nama" required placeholder="Isi nama instansi...">
                      </div>
                      <div class="form-group">
                        <label>Foto</label>
                        <input type="file" class="form-control" name="foto" required>
                      </div>
                      <div class="form-group">
                        <label>Telepon</label>
                        <input type="number" class="form-control" name="nomorhp" required placeholder="Harus berupa angka">
                      </div>
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" required placeholder="Isi alamat lengkap...">
                      </div>
                      <div class="form-group">
                        <label>Jobdesk</label>
                        <input type="text" class="form-control" name="jobdesk" required placeholder="Isi jobdesk...">
                      </div>
                      <div class="form-group">
                        <label>IPK (a1)</label>
                        <input type="number" class="form-control" name="ka1" required placeholder="Berisi angka 1-5">
                      </div>
                      <div class="form-group">
                        <label>Kemampuan Dasar (a2)</label>
                        <input type="number" class="form-control" name="ka2" required placeholder="Berisi angka 1-5">
                      </div>
                      <div class="form-group">
                        <label>Kemampuan Database (b1)</label>
                        <input type="number" class="form-control" name="kb1" required placeholder="Berisi angka 1-5">
                      </div>
                      <div class="form-group">
                        <label>Kemampuan Web (b2)</label>
                        <input type="number" class="form-control" name="kb2" required placeholder="Berisi angka 1-5">
                      </div>
                      <div class="form-group">
                        <label>Kemampuan Pemrograman (b3)</label>
                        <input type="number" class="form-control" name="kb3" required placeholder="Berisi angka 1-5">
                      </div>
                      <div class="form-group">
                        <label>Kemampuan Jaringan (b4)</label>
                        <input type="number" class="form-control" name="kb4" required placeholder="Berisi angka 1-5">
                      </div>
                      <div class="form-group">
                        <label>Kemampuan Desain (b5)</label>
                        <input type="number" class="form-control" name="kb5" required placeholder="Berisi angka 1-5">
                      </div>
                      <div class="form-group">
                        <label>Keaktifan (c1)</label>
                        <input type="number" class="form-control" name="kc1" required placeholder="Berisi angka 1-5">
                      </div>
                      <div class="form-group">
                        <label>Kedisplinan (c2)</label>
                        <input type="number" class="form-control" name="kc2" required placeholder="Berisi angka 1-5">
                      </div>
                      <div class="form-group">
                        <label>Keahlian Pemrograman (d1)</label>
                        <input type="number" class="form-control" name="kd1" required placeholder="Berisi angka 1-5">
                      </div>
                      <div class="form-group">
                        <label>Keahlian Jaringan (d2)</label>
                        <input type="number" class="form-control" name="kd2" required placeholder="Berisi angka 1-5">
                      </div>
                      <div class="form-group">
                        <label>Keahlian Desain (d3)</label>
                        <input type="number" class="form-control" name="kd3" required placeholder="Berisi angka 1-5">
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
                    $nama = $_FILES['foto']['name'];
                    $lokasi = $_FILES['foto']['tmp_name'];
                    move_uploaded_file($lokasi, "../foto_instansi/" . $nama);
                    $koneksi->query("INSERT INTO instansi(nama_instansi,nomorhp,alamat,jobdesk,foto,ka1,ka2,kb1,kb2,kb3,kb4,kb5,kc1,kc2,kd1,kd2,kd3) VALUES('$_POST[nama]','$_POST[nomorhp]','$_POST[alamat]','$_POST[jobdesk]','$nama','$_POST[ka1]','$_POST[ka2]','$_POST[kb1]','$_POST[kb2]','$_POST[kb3]','$_POST[kb4]','$_POST[kb5]','$_POST[kc1]','$_POST[kc2]','$_POST[kd1]','$_POST[kd2]','$_POST[kd3]')");
                    echo "<div class='alert alert-info'>Data Tersimpan</div>";
                    echo "<meta http-equiv='refresh' content='1;url=instansi.php'>";
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

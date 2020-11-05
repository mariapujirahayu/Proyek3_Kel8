<?php include 'koneksi.php' ?>

<?php
$ambil = $koneksi->query("SELECT * FROM nilai_mahasiswa JOIN mahasiswa ON nilai_mahasiswa.id_mahasiswa = mahasiswa.id_mahasiswa WHERE id_nilai='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

?>

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
            <img src="../images/LOGOPOLTEK.PNG" width="50px">
          </div>
          <!-- <p>CT</p> -->
        </a>
        
        <a href="index.php" class="simple-text logo-normal">
          Penentuan PKL Tim
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
          <li >
            <a href="./instansi.php">
              <i class="nc-icon nc-user-run"></i>
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
            <a href="./hasil.php">
              <i class="nc-icon nc-box"></i>
              <p>Riwayat Perhitungan</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="./logout.php">
              <i class="nc-icon nc-button-power"></i>
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
                <h4 class="card-title">Ubah Data Nilai Mahasiswa</h4>
              </div>
              <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nama Mahasiswa</label>
                        <input type="text" disabled="" class="form-control" name="nama" required value="<?php echo $pecah['nama']; ?>">
                      </div>
                      <div class="form-group">
                        <label>IPK (a1)</label>
                        <input type="number" class="form-control" name="a1" required value="<?php echo $pecah['a1']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Kemampuan Dasar (a2)</label>
                        <input type="number" class="form-control" name="a2" required value="<?php echo $pecah['a2']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Kemampuan Database (b1)</label>
                        <input type="number" class="form-control" name="b1" required value="<?php echo $pecah['b1']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Kemampuan Web (b2)</label>
                        <input type="number" class="form-control" name="b2" required value="<?php echo $pecah['b2']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Kemampuan Pemrograman (b3)</label>
                        <input type="number" class="form-control" name="b3" required value="<?php echo $pecah['b3']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Kemampuan Jaringan (b4)</label>
                        <input type="number" class="form-control" name="b4" required value="<?php echo $pecah['b4']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Kemampuan Desain (b5)</label>
                        <input type="number" class="form-control" name="b5" required value="<?php echo $pecah['b5']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Keaktifan (c1)</label>
                        <input type="number" class="form-control" name="c1" required value="<?php echo $pecah['c1']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Kedisplinan (c2)</label>
                        <input type="number" class="form-control" name="c2" required value="<?php echo $pecah['c2']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Keahlian Pemrograman (d1)</label>
                        <input type="number" class="form-control" name="d1" required value="<?php echo $pecah['d1']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Keahlian Jaringan (d2)</label>
                        <input type="number" class="form-control" name="d2" required value="<?php echo $pecah['d2']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Keahlian Desain (d3)</label>
                        <input type="number" class="form-control" name="d3" required value="<?php echo $pecah['d3']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button class="btn btn-primary btn-round" name="ubah">Simpan</button>
                    </div>
                  </div>
                </form>

                <!-- database -->
                <?php
                if (isset($_POST['ubah'])) {
                    $koneksi->query("UPDATE nilai_mahasiswa SET a1='$_POST[a1]', a2='$_POST[a2]', b1='$_POST[b1]', b2='$_POST[b2]', b3='$_POST[b3]', b4='$_POST[b4]', b5='$_POST[b5]', c1='$_POST[c1]', c2='$_POST[c2]', d1='$_POST[d1]', d2='$_POST[d2]', d3='$_POST[d3]' WHERE id_nilai='$_GET[id]'");
                    echo "<script>alert('Data Nilai telah berhasil Diubah!');</script>";
                    echo "<script>location='datanilai.php';</script>";
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

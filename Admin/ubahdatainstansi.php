<?php include 'koneksi.php' ?>

<?php
$ambil = $koneksi->query("SELECT * FROM instansi WHERE id_instansi='$_GET[id]'");
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
          <li class="active">
            <a href="./instansi.php">
              <i class="nc-icon nc-chart-pie-36"></i>
              <p>Data Instansi</p>
            </a>
          </li>
          <li>
            <a href="./datanilai.php">
              <i class="nc-icon nc-user-run"></i>
              <p>Data Nilai</p>
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
                <h4 class="card-title">Ubah Data Instansi</h4>
              </div>
              <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nama Instansi</label>
                        <input type="text" class="form-control" name="nama" required value="<?php echo $pecah['nama_instansi']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Foto</label>
                        <input type="file" class="form-control" name="foto" value="<?php echo $pecah['foto']; ?>"><br><img src="../foto_instansi/<?php echo $pecah['foto']; ?>" width="100" height="100">
                      </div>
                      <div class="form-group">
                        <label>Telepon</label>
                        <input type="text" class="form-control" name="nomorhp" required value="<?php echo $pecah['nomorhp']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" required value="<?php echo $pecah['alamat']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Jobdesk</label>
                        <input type="text" class="form-control" name="jobdesk" required value="<?php echo $pecah['jobdesk']; ?>">
                      </div>
                      <div class="form-group">
                        <label>IPK (a1)</label>
                        <input type="number" class="form-control" name="ka1" required value="<?php echo $pecah['ka1']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Kemampuan Dasar (a2)</label>
                        <input type="number" class="form-control" name="ka2" required value="<?php echo $pecah['ka2']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Kemampuan Database (b1)</label>
                        <input type="number" class="form-control" name="kb1" required value="<?php echo $pecah['kb1']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Kemampuan Web (b2)</label>
                        <input type="number" class="form-control" name="kb2" required value="<?php echo $pecah['kb2']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Kemampuan Pemrograman (b3)</label>
                        <input type="number" class="form-control" name="kb3" required value="<?php echo $pecah['kb3']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Kemampuan Jaringan (b4)</label>
                        <input type="number" class="form-control" name="kb4" required value="<?php echo $pecah['kb4']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Kemampuan Desain (b5)</label>
                        <input type="number" class="form-control" name="kb5" required value="<?php echo $pecah['kb5']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Keaktifan (c1)</label>
                        <input type="number" class="form-control" name="kc1" required value="<?php echo $pecah['kc1']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Kedisplinan (c2)</label>
                        <input type="number" class="form-control" name="kc2" required value="<?php echo $pecah['kc2']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Keahlian Pemrograman (d1)</label>
                        <input type="number" class="form-control" name="kd1" required value="<?php echo $pecah['kd1']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Keahlian Jaringan (d2)</label>
                        <input type="number" class="form-control" name="kd2" required value="<?php echo $pecah['kd2']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Keahlian Desain (d3)</label>
                        <input type="number" class="form-control" name="kd3" required value="<?php echo $pecah['kd3']; ?>">
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
                    $namafoto = $_FILES['foto']['name'];
                    $lokasifoto = $_FILES['foto']['tmp_name'];
                    if (!empty($lokasifoto)) {
                        move_uploaded_file($lokasifoto, "../foto_instansi/$namafoto");

                        $koneksi->query("UPDATE instansi SET nama_instansi='$_POST[nama]',nomorhp='$_POST[nomorhp]',alamat='$_POST[alamat]',jobdesk='$_POST[jobdesk]',foto='$namafoto', ka1='$_POST[ka1]', ka2='$_POST[ka2]', kb1='$_POST[kb1]', kb2='$_POST[kb2]', kb3='$_POST[kb3]', kb4='$_POST[kb4]', kb5='$_POST[kb5]', kc1='$_POST[kc1]', kc2='$_POST[kc2]', kd1='$_POST[kd1]', kd2='$_POST[kd2]', kd3='$_POST[kd3]' WHERE id_instansi='$_GET[id]'");
                    } else {
                        $koneksi->query("UPDATE instansi SET nama_instansi='$_POST[nama]',nomorhp='$_POST[nomorhp]',alamat='$_POST[alamat]',jobdesk='$_POST[jobdesk]', ka1='$_POST[ka1]', ka2='$_POST[ka2]', kb1='$_POST[kb1]', kb2='$_POST[kb2]', kb3='$_POST[kb3]', kb4='$_POST[kb4]', kb5='$_POST[kb5]', kc1='$_POST[kc1]', kc2='$_POST[kc2]', kd1='$_POST[kd1]', kd2='$_POST[kd2]', kd3='$_POST[kd3]' WHERE id_instansi='$_GET[id]'");
                    }
                    echo "<script>alert('Data Instansi berhasil Dibuah');</script>";
                    echo "<script>location='instansi.php';</script>";
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

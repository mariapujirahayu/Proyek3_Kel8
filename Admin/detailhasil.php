<?php include 'koneksi2.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/head.php' ?>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../images/LOGOPOLTEK.PNG" width="50px">
          </div>
          <!-- <p>CT</p> -->
        </a>
        
        <a href="index.php" class="simple-text logo-normal">
          Penentuan PKL Tim
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./index.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="">
            <a href="./instansi.php">
              <i class="nc-icon nc-chart-pie-36"></i>
              <p>Data Instansi</p>
            </a>
          </li>
          <li>
            <a href="./datanilai.php">
              <i class="nc-icon nc-user-run"></i>
              <p>Data Nilai Mahasiswa</p>
            </a>
          </li>
          <li class="active">
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
                <h4 class="card-title">Riwayat Perhitungan Mahasiswa</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th class="text-center">Ranking</th>
                      <th class="text-center">Nama Mahasiswa</th>
                      <th class="text-center">Instansi</th>
                      <th class="text-center">Nilai</th>
                    </thead>
                    <tbody>
                      <?php $nomor = 1; ?>
                      <?php $ambil = $koneksi->query("SELECT * FROM mahasiswa JOIN hasilhitung ON mahasiswa.id_mahasiswa=hasilhitung.id_mahasiswa WHERE tanggal = '$_GET[tanggal]' ORDER BY hasil DESC"); ?>
                      <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                      <tr>
                        <td class="text-center"><?php echo $nomor; ?></td>
                        <td class="text-center"><?php echo $pecah['nama']; ?></td>
                        <td class="text-center"><?php echo $pecah['nama_instansi']; ?></td>
                        <td class="text-center"><?php echo $pecah['hasil']; ?></td>
                      <?php $nomor++; ?>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include 'includes/footer.php' ?>
    </div>
  </div>
  <?php include 'includes/script.php' ?>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>

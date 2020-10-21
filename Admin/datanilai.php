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
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
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
            <a href="./kriteria.php">
              <i class="nc-icon nc-chart-pie-36"></i>
              <p>Kriteria</p>
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
            <a href="./hasil.php">
              <i class="nc-icon nc-money-coins"></i>
              <p>Hasil</p>
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
                <h4 class="card-title">Nilai Akademik</h4>
              </div>
              <div class="card-body">
                <div class="col-md-8">
                    <p>Keterangan Singkatan: <br>
                        Kriteria Akademik : A <br>
                        Kriteria Kemampuan Mahasiswa : B <br>
                        Kriteria Kepribadian : C <br>
                        Kriteria Bidang Keahlian : D
                    </p>
                    <div class="update ml-auto mr-auto">
                        <a href="adddatanilai.php"> <button type="submit" class="btn btn-primary btn-round">Tambah Data Mahasiswa</button></a>
                        <a href="hitung.php"> <button nama="save" class="btn btn-success btn-round">Hitung Alternatif</button></a>
                    </div>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th class="text-center">No</th>
                      <th class="text-center">Nama Mahasiswa</th>
                      <th class="text-center">A1</th>
                      <th class="text-center">A2</th>
                      <th class="text-center">B1</th>
                      <th class="text-center">B2</th>
                      <th class="text-center">B3</th>
                      <th class="text-center">B4</th>
                      <th class="text-center">B5</th>
                      <th class="text-center">C1</th>
                      <th class="text-center">C2</th>
                      <th class="text-center">D1</th>
                      <th class="text-center">D2</th>
                      <th class="text-center">D3</th>
                      <th class="text-center">Aksi</th>
                    </thead>
                    <tbody class="text-center">
                        <?php $nomor = 1; ?>
                        <?php $ambil = $koneksi->query("SELECT * FROM nilai_mahasiswa ORDER BY id_nilai ASC"); ?>
                        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo $pecah['nama_mahasiswa']; ?></td>
                            <td><?php echo $pecah['a1']; ?></td>
                            <td><?php echo $pecah['a2']; ?></td>
                            <td><?php echo $pecah['b1']; ?></td>
                            <td><?php echo $pecah['b2']; ?></td>
                            <td><?php echo $pecah['b3']; ?></td>
                            <td><?php echo $pecah['b4']; ?></td>
                            <td><?php echo $pecah['b5']; ?></td>
                            <td><?php echo $pecah['c1']; ?></td>
                            <td><?php echo $pecah['c2']; ?></td>
                            <td><?php echo $pecah['d1']; ?></td>
                            <td><?php echo $pecah['d2']; ?></td>
                            <td><?php echo $pecah['d3']; ?></td>
                            <td><a href="ubahdatanilai.php?id=<?php echo $pecah["id_nilai"] ?>"><button type="submit" class="btn btn-success btn-round"><i class="nc-icon nc-settings"></i></button></a>
                            <a href="hapusdatanilai.php?id=<?php echo $pecah["id_nilai"] ?>"><button type="submit" class="btn btn-danger btn-round"><i class="nc-icon nc-basket"></i></button></a></td>
                        </tr>
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
</body>

</html>
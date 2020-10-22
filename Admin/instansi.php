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
                <h4 class="card-title">Daftar Instansi Beserta Nilai Kriteria</h4>
              </div>
              <div class="card-body">
              <div class="card-body">
                <div class="col-md-8">
                    <div class="update ml-auto mr-auto">
                        <a href="adddatainstansi.php"> <button type="submit" class="btn btn-primary btn-round">Tambah Data Instansi</button></a>
                    </div>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th class="text-center">No</th>
                      <th class="text-center">Foto</th>
                      <th class="text-center">Instansi</th>
                      <th class="text-center">Telepon</th>
                      <th class="text-center">Alamat</th>
                      <th class="text-center">Jobdesk</th>
                      <th class="text-center">ka1</th>
                      <th class="text-center">ka2</th>
                      <th class="text-center">kb1</th>
                      <th class="text-center">kb2</th>
                      <th class="text-center">kb3</th>
                      <th class="text-center">kb4</th>
                      <th class="text-center">kb5</th>
                      <th class="text-center">kc1</th>
                      <th class="text-center">kc2</th>
                      <th class="text-center">kd1</th>
                      <th class="text-center">kd2</th>
                      <th class="text-center">kd3</th>
                      <th class="text-center">Aksi</th>
                    </thead>
                    <tbody class="text-center">
                        <?php $nomor = 1; ?>
                        <?php $ambil = $koneksi->query("SELECT * FROM instansi ORDER BY id_instansi ASC"); ?>
                        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><img src="../foto_instansi/<?php echo $pecah['foto']; ?>" width="60" height="60"></td>
                            <td><?php echo $pecah['nama_instansi']; ?></td>
                            <td><?php echo $pecah['nomorhp']; ?></td>
                            <td><?php echo $pecah['alamat']; ?></td>
                            <td><?php echo $pecah['jobdesk']; ?></td>
                            <td><?php echo $pecah['ka1']; ?></td>
                            <td><?php echo $pecah['ka2']; ?></td>
                            <td><?php echo $pecah['kb1']; ?></td>
                            <td><?php echo $pecah['kb2']; ?></td>
                            <td><?php echo $pecah['kb3']; ?></td>
                            <td><?php echo $pecah['kb4']; ?></td>
                            <td><?php echo $pecah['kb5']; ?></td>
                            <td><?php echo $pecah['kc1']; ?></td>
                            <td><?php echo $pecah['kc2']; ?></td>
                            <td><?php echo $pecah['kd1']; ?></td>
                            <td><?php echo $pecah['kd2']; ?></td>
                            <td><?php echo $pecah['kd3']; ?></td>
                            <td><a href="ubahdatainstansi.php?id=<?php echo $pecah["id_instansi"] ?>"><button type="submit" class="btn btn-success btn-round"><i class="nc-icon nc-settings"></i></button></a>
                            <a href="hapusdatanilai.php?id=<?php echo $pecah["id_instansi"] ?>"><button type="submit" class="btn btn-danger btn-round"><i class="nc-icon nc-basket"></i></button></a></td>
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
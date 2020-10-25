<?php include 'koneksi2.php' ?>

<?php
$ambil = $koneksi->query("SELECT * FROM nilai_mahasiswa JOIN mahasiswa ON nilai_mahasiswa.id_mahasiswa = mahasiswa.id_mahasiswa WHERE id_nilai='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/header.php' ?>
</head>
<body>
<?php include 'includes/navbar.php' ?>
 
 <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <p class="breadcrumbs"><span class="mr-2"><a href="listpkl.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Nilai <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">Nilai</h1>
     </div>
   </div>
 </div>
</section>



<section class="ftco-section ftco-about img">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-12 about-intro">
                <div class="row">
                    <?php $ambil = $koneksi->query("SELECT * FROM nilai_mahasiswa JOIN mahasiswa ON nilai_mahasiswa.id_mahasiswa = mahasiswa.id_mahasiswa WHERE id_nilai='$_GET[id]'"); ?>
                    <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                    <div class="col-md-12 pl-md-5 py-5">
                        <div class="d-flex about-wrap">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <h2 class="mb-4">Nilai Mahasiswa</h2>
                                    <p>Nama Mahasiswa : <?php echo $pecah['nama']; ?></p>
                                    <span class="subheading">Kriteria Akademik</span>
                                    <p>IPK : <?php echo $pecah['a1']; ?></p>
                                    <p>Kemampuan Dasar : <?php echo $pecah['a2']; ?></p>
                                    <span class="subheading">Uji Kriteria Kemampuan</span>
                                    <p>Database : <?php echo $pecah['b1']; ?></p>
                                    <p>Web : <?php echo $pecah['b2']; ?></p>
                                    <p>Pemrograman Mobile : <?php echo $pecah['b3']; ?></p>
                                    <p>Jaringan : <?php echo $pecah['b4']; ?></p>
                                    <p>Desain  : <?php echo $pecah['b5']; ?></p>
                                    <span class="subheading">Kriteria Kepribadian</span>
                                    <p>Keaktifan : <?php echo $pecah['c1']; ?></p>
                                    <p>Kedisplinan : <?php echo $pecah['c2']; ?></p>
                                    <span class="subheading">Bidang Keahlian</span>
                                    <p>Pemrograman  : <?php echo $pecah['d1']; ?></p>
                                    <p>Jaringan : <?php echo $pecah['d2']; ?></p>
                                    <p>Desain : <?php echo $pecah['d3']; ?></p>
                                    <p><a href="hitung.php?id=<?php echo $pecah["id_nilai"] ?>" class="btn btn-primary">Hitung Profile Matching</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php' ?>
<?php include 'includes/loader.php' ?>

</body>
</html>
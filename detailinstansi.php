<?php include 'koneksi2.php' ?>

<?php
$ambil = $koneksi->query("SELECT * FROM instansi WHERE id_instansi='$_GET[id]'");
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
       <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Detail <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">Detail</h1>
     </div>
   </div>
 </div>
</section>



<section class="ftco-section ftco-about img">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-12 about-intro">
                <div class="row">
                    <?php $ambil = $koneksi->query("SELECT * FROM instansi WHERE id_instansi='$_GET[id]'"); ?>
                    <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                    <div class="col-md-6 d-flex">
                        <div class="d-flex about-wrap">
                            <div class="img d-flex align-items-center justify-content-center" style="background-image:url(foto_instansi/<?php echo $pecah['foto']; ?>);">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pl-md-5 py-5">
                        <div class="row justify-content-start pb-3">
                            <div class="col-md-12 heading-section ftco-animate">
                                <span class="subheading">Detail Tempat PKL</span>
                                <h2 class="mb-4"><?php echo $pecah['nama_instansi']; ?></h2>
                                <p>Telepon : <?php echo $pecah['nomorhp']; ?></p>
                                <p>Alamat : <?php echo $pecah['alamat']; ?></p>
                                <p>Jobdesk : <?php echo $pecah['jobdesk']; ?></p>
                                <p><a href="listpkl.php" class="btn btn-primary">Kembali ke List PKL</a></p>
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
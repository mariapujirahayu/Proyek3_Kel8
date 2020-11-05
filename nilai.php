<?php include 'koneksi2.php' ?>

<?php
// $ambil = $koneksi->query("SELECT * FROM nilai_mahasiswa JOIN mahasiswa ON nilai_mahasiswa.id_mahasiswa = mahasiswa.id_mahasiswa WHERE id_nilai='$_GET[id]'");
// $pecah = $ambil->fetch_assoc();

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
<br><br> 
  <?php 
    $id_mahasiswa = $_SESSION["id_mahasiswa"];
    $ambil = $koneksi->query("SELECT * from nilai_mahasiswa,mahasiswa WHERE nilai_mahasiswa.id_mahasiswa='$id_mahasiswa' and mahasiswa.id_mahasiswa='$id_mahasiswa'"); 
  ?>
  <?php while ($pecah = $ambil->fetch_assoc()) { ?>

<div class="row justify-content-center pb-4">
  <div class="col-md-12 heading-section text-center ftco-animate">
    <span class="subheading"></span>
    <h2 class="mb-4">Nilai Mahasiswa</h2>
    <h3 class="mb-4">(<?php echo $pecah['nama']; ?>)</h3>
  </div>
</div>
<div class="row justify-content-center pb-4">
  <p><a href="hitung.php" nama="save" class="btn btn-primary">Hitung Profile Matching</a></p>
</div>      
<br><br> <br><br>           
<br><br> <br><br>
<br><br> <br><br>  
<br><br> <br><br>
<section class="ftco-section">
   <div class="container">
    <div class="row justify-content-center ">
       <div class=" login-wrap p-1 p-md-10 ">
          <div class="col-md-2 col-lg-2">
                <a  class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-1.jpg);">
                   <div class="text w-100 text-center">
                      <h3>Akademik</h3>
                  </div>
              </a>
          </div>
          <div class="col-md-10 ">
            <br>
            <center>
              <p> IPK : <?php echo $pecah['a1']; ?></p>
              <p> Kemampuan Dasar : <?php echo $pecah['a2']; ?></p>
            </center>
          </div>
        </div>
    <div class=" login-wrap p-1 p-md-10 ">
    </div>
    <div class="login-wrap p-1 p-md-6">
      <div class="col-md-1 col-lg-2">
        <a class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-9.jpg);">
           <div class="text w-100 text-center">
              <h3>Kemampuan</h3>
          </div>
      </a>
    </div> 
    <div class="col-md-11 "><center>
          <p>Database : <?php echo $pecah['b1']; ?></p>
          <p>Web : <?php echo $pecah['b2']; ?></p>
          <p>Mobile : <?php echo $pecah['b3']; ?></p>
          <p>Jaringan : <?php echo $pecah['b4']; ?></p>
          <p>Desain  : <?php echo $pecah['b5']; ?></p></center>
      </div>
   </div>
   <div class=" login-wrap p-1 p-md-10 ">
         
    </div>
    <div class=" login-wrap p-1 p-md-6">
        <div class="col-md-1 col-lg-2">
            <a  class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-3.jpg);">
               <div class="text w-100 text-center">
                  <h3>Kepribadian</h3>
              </div>
          </a>
        </div>
         <div class="col-md-11 "><br><br><center>
             <p>Keaktifan : <?php echo $pecah['c1']; ?></p>
             <p>Kedisplinan : <?php echo $pecah['c2']; ?></p></center>
          </div>
  </div>
   <div class=" login-wrap p-1 p-md-10 ">
         
    </div>
       <div class=" login-wrap p-1 p-md-6">
          <div class="col-md-1 col-lg-2">
              <a  class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-5.jpg);">
                 <div class="text w-100 text-center">
                    <h3>Keahlian</h3>
                </div>
            </a>
          </div>
           <div class="col-md-11 "><br><center>
               <p>Pemrograman  : <?php echo $pecah['d1']; ?></p>
                <p>Jaringan : <?php echo $pecah['d2']; ?></p>
                <p>Desain : <?php echo $pecah['d3']; ?></p></center>
            </div>
        </div>
      </div>
    <?php } ?>
    <div class="col-md-12 text-center mt-5">
    <!-- <a href="listpkl.php" class="btn btn-secondary">See All Courses</a> -->
    </div>

    <?php
      if(isset($_POST['save'])){
          date_default_timezone_set('Asia/Jakarta');
          $tanggal = date("Y-m-d h:i");
          
          $ambil = $koneksi->query("SELECT * FROM nilai_mahasiswa");
          $pecah = $ambil->fetch_assoc();

          $koneksi->query("INSERT INTO hasilhitung(id_mahasiswa,nama, nama_instansi,hasil,tanggal) 
            VALUES('$id_mahasiswa','$nama','$nama_instansi','$rank','$tanggal')");

          echo "<div class='alert alert-info'>Data Tersimpan</div>";
          echo "<meta http-equiv='refresh' content='1;url=index.php'>";
      }
    ?>

</div>
</section>

<?php include 'includes/footer.php' ?>
<?php include 'includes/loader.php' ?>

</body>
</html>
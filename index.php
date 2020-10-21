<?php include 'koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'includes/header.php' ?>
</head>
<body>
<?php include 'includes/navbar.php' ?>

<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
      <div class="col-md-7 ftco-animate">
        <span class="subheading">Welcome to Informasi PKL</span>
        <h1 class="mb-4">Sistem Informasi Penentuan Tempat PKL</h1>
        <p class="caps">Input nilai sebelum melakukan perhitungan untuk menentukan tempat PKL</p>
        <p class="mb-0"><a href="listpkl.php" class="btn btn-primary">List PKL</a> <a href="loginuser.php" class="btn btn-white">Login</a></p>
    </div>
</div>
</div>
</div>

<section class="ftco-section ftco-no-pb ftco-no-pt">
   <div class="container">
      <div class="row">
         <div class="col-md-7"></div>
         <div class="col-md-5 order-md-last">
          <div class="login-wrap p-4 p-md-5">
              <h3 class="mb-4">Register Now</h3>
              <form method="post" enctype="multipart/form-data" class="signup-form">
                 <div class="form-group">
                    <label class="label" for="nama">Full Name</label>
                    <input type="text" name="nama" required class="form-control" placeholder="John Doe">
                </div>
                <div class="form-group">
                    <label class="label" for="email">Email Address</label>
                    <input type="text" name="email" required class="form-control" placeholder="johndoe@gmail.com">
                </div>
                <div class="form-group">
                 <label class="label" for="username">Username</label>
                 <input name="username" required type="text" class="form-control" placeholder="Username">
             </div>
             <div class="form-group">
                 <label class="label" for="pass">Password</label>
                 <input name="pass" required type="password" class="form-control" placeholder="Password">
             </div>
             <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button class="btn btn-primary btn-round" name="simpan">Simpan</button>
                    </div>
                  </div>
         </form>
         <!-- database -->
         <?php
                  if (isset($_POST['simpan'])) {
                    $koneksi->query("INSERT INTO mahasiswa(nama, email, username, pass) 
                        VALUES('$_POST[nama]','$_POST[email]','$_POST[username]','$_POST[pass]')");
                    echo "<div class='alert alert-info'>Data Tersimpan</div>";
                    echo "<meta http-equiv='refresh' content='1;url=loginuser.php'>";
                }
                ?>

         <p class="text-center">Already have an account? <a href="loginuser.php">Sign In</a></p>

     </div>
 </div>
</div>
</div>
</section>

<section class="ftco-section">
   <div class="container">
      <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Pilih Tempat PKL</span>
            <h2 class="mb-4">Kriteria Penilaian Berupa Nilai</h2>
        </div>
    </div>
    <div class="row justify-content-center">
     <div class="col-md-3 col-lg-2">
        <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-1.jpg);">
           <div class="text w-100 text-center">
              <h3>Akademik</h3>
          </div>
      </a>
  </div>
  <div class="col-md-3 col-lg-2">
    <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-9.jpg);">
       <div class="text w-100 text-center">
          <h3>Kemampuan</h3>
      </div>
  </a>
</div>
<div class="col-md-3 col-lg-2">
    <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-3.jpg);">
       <div class="text w-100 text-center">
          <h3>Kepribadian</h3>
      </div>
  </a>
</div>
<div class="col-md-3 col-lg-2">
    <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-5.jpg);">
       <div class="text w-100 text-center">
          <h3>Keahlian</h3>
      </div>
  </a>
</div>
<div class="col-md-12 text-center mt-5">
    <a href="listpkl.php" class="btn btn-secondary">See All Courses</a>
</div>
</div>
</div>
</section>

<section class="ftco-section bg-light">
   <div class="container">
      <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">List Tempat PKL</span>
            <h2 class="mb-4">Pilih Tempat PKL</h2>
        </div>
    </div>
    
    <div class="row">
        <?php $ambil = $koneksi->query("SELECT * FROM instansi ORDER BY id_instansi ASC"); ?>
        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
       <div class="col-md-4 ftco-animate">
            <div class="project-wrap" >
                <a href="detailinstansi.php?id=<?php echo $pecah["id_instansi"] ?>" class="img" style="background-image: url(foto_instansi/<?php echo $pecah['foto']; ?>)">
                    <span class="price">PKL</span>
                </a>
                <div class="text p-4">
                    <h3><a href="detailinstansi.php?id=<?php echo $pecah["id_instansi"] ?>"><?php echo $pecah['nama_instansi']; ?></a></h3>
                    <p class="advisor"><?php echo $pecah['alamat']; ?></p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
</div>
</div>
</section>

<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);">
 <div class="overlay"></div>
 <div class="container">
    <div class="row">
       <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
         <div class="block-18 d-flex align-items-center">
            <div class="icon"><span class="flaticon-online"></span></div>
            <div class="text">
             <strong class="number" data-number="400">0</strong>
             <span>Online Courses</span>
         </div>
     </div>
 </div>
 <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
     <div class="block-18 d-flex align-items-center">
        <div class="icon"><span class="flaticon-graduated"></span></div>
        <div class="text">
         <strong class="number" data-number="4500">0</strong>
         <span>Students Enrolled</span>
     </div>
 </div>
</div>
<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
 <div class="block-18 d-flex align-items-center">
    <div class="icon"><span class="flaticon-instructor"></span></div>
    <div class="text">
     <strong class="number" data-number="1200">0</strong>
     <span>Experts Instructors</span>
 </div>
</div>
</div>
<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
 <div class="block-18 d-flex align-items-center">
    <div class="icon"><span class="flaticon-tools"></span></div>
    <div class="text">
     <strong class="number" data-number="300">0</strong>
     <span>Hours Content</span>
 </div>
</div>
</div>
</div>
</div>
</section>

<?php include 'includes/footer.php' ?>
<?php include 'includes/loader.php' ?>
</body>
</html>
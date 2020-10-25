<?php
$koneksi = new mysqli("localhost", "root", "", "profilepkl");
session_start();
?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <a class="navbar-brand" href="index.php"><span>Penentuan</span> PKL</a>

     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">

       <span class="oi oi-menu"></span> Menu
   </button>

   <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">

          <?php if (isset($_SESSION['id_mahasiswa'])) {?>
         <li class="nav-item "><a  class="nav-link"> Halo,<?= $_SESSION['username'] ?></a></li>
          <?php }?>
         <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
         <li class="nav-item"><a href="listpkl.php" class="nav-link">List PKL</a></li>
<<<<<<< HEAD
         <?php if (isset($_SESSION["mahasiswa"])) : ?>
          <li class="nav-item"><a href="inputnilai.php" class="nav-link">Input Nilai</a></li>
          <li class="nav-item"><a href="nilai.php?id=<?php echo $pecah["id_mahasiswa"] ?>" class="nav-link">Lihat Nilai</a></li>
          <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
         <?php else : ?>
          <li class="nav-item"><a href="loginuser.php" class="nav-link">Login</a></li>
=======
          <?php if (isset($_SESSION['id_mahasiswa'])) {?>
          <li class="nav-item"><a href="inputnilai.php" class="nav-link">Input Nilai</a></li>
          <?php }?>
          <?php if (isset($_SESSION['id_mahasiswa'])) {?>
          <li class="nav-item"><a href="nilai.php" class="nav-link">Lihat Nilai</a></li>
         
          <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
           <?php }?>
          <?php if (!isset($_SESSION['id_mahasiswa'])) {?>
>>>>>>> f30dbc62454fb955cc70e473154bcadbe56b9899
          <li class="nav-item"><a href="Admin/index.php" class="nav-link">Admin</a></li>

          <?php }?>
     </ul>
 </div>
</div>
</nav>
<!-- END nav -->

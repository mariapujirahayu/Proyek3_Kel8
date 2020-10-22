<?php
$koneksi = new mysqli("localhost", "root", "", "profilepkl");
?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <a class="navbar-brand" href="listpkl.php"><span>Study</span>Lab</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
   </button>

   <div class="collapse navbar-collapse" id="ftco-nav">
    <?php $ambil = $koneksi->query("SELECT * FROM mahasiswa ORDER BY id_mahasiswa ASC"); ?>
                        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
       <ul class="navbar-nav ml-auto">
         <li class="nav-item active"><a href="listpkl.php" class="nav-link">Home</a></li>
         <li class="nav-item"><a href="listpkl.php" class="nav-link">List PKL</a></li>
         <?php if (isset($_SESSION["user"])) : ?>
          <li class="nav-item"><a href="inputnilai.php?id=<?php echo $pecah["id_mahasiswa"] ?>" class="nav-link">Input Nilai</a></li>
          <li class="nav-item"><a href="nilai.php?id=<?php echo $pecah["id_mahasiswa"] ?>" class="nav-link">Lihat Nilai</a></li>
          <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
         <?php else : ?>
          <li class="nav-item"><a href="Admin/index.php" class="nav-link">Admin</a></li>
        <?php endif ?>
     </ul>
     <?php } ?>
 </div>
</div>
</nav>
<!-- END nav -->
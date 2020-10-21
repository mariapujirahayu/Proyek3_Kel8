<?php
$koneksi = new mysqli("localhost", "root", "", "profilepkl");
?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <a class="navbar-brand" href="index.php"><span>Study</span>Lab</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
   </button>

   <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
         <?php if (isset($_SESSION["user"])) : ?>
          <li class="nav-item"><a href="inputnilai.php" class="nav-link">Input Nilai</a></li>
          <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
         <?php else : ?>
          <li class="nav-item"><a href="Admin/index.php" class="nav-link">Admin</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
         <li class="nav-item"><a href="course.php" class="nav-link">Course</a></li>
         <li class="nav-item"><a href="instructor.php" class="nav-link">Instructor</a></li>
         <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
         <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
        <?php endif ?>
     </ul>
 </div>
</div>
</nav>
<!-- END nav -->
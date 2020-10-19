<?php
// session_start();
include 'process/conSQL.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Penentuan Tempat PKL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">


</head>


<div class="py-1 bg-primary st">
  <div class="container">
    <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
      <div class="col-lg-12 d-block">
        <div class="row d-flex">
          <div class="col-md pr-4 d-flex topper align-items-center">
            <div class="icon mr-2 d-flex justify-content-center align-items-center"></span></div><br>
            <!-- <span class="text">+62 872 627 2817</span> -->
          </div>
          <div class="col-md pr-4 d-flex topper align-items-center">
            <div class="icon mr-2 d-flex justify-content-center align-items-center"></span></div>
            <!-- <span class="text">usmart@gmail.com</span> -->
          </div>
          <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="index.php">Penentuan Tempat PKL</a>
    <h2>|&nbsp&nbsp</h2><img src="images/LOGOPOLTEK.PNG" width="30px">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">or
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
          
        <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item active"><a href="Admin/index.php" class="nav-link">Admin</a></li>
       

        <?php
        if (isset($_SESSION['idLogin'])) {
          ?>
          <li class="nav-item"><a href="penentuan.php" class="nav-link">Penentuan</a></li>
        <?php } ?>

        <?php
        if (!isset($_SESSION['idLogin'])) {
          ?>
          <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
        <?php } ?>
        <?php
        if (isset($_SESSION['idLogin'])) {
          ?>
          <li class="nav-item"><a href="process/userLogout.php" class="nav-link">Logout</a></li>
        <?php } ?>
      </ul>
      <?php
        if (isset($_SESSION['idLogin'])) {
          ?>
       <ul class="navbar-nav ml-auto">
          <li class="nav-item" style="color: green;"><b>Hello <?= $_SESSION['Username'] ?> </b></li>
        <?php } ?>
       </ul>
    </div>
    <!-- <a href="pesan.php" class="btn btn-primary">Pesan</a> -->
  </div>
</nav>
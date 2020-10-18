<head>
  <?php
  include 'process/conSQL.php';
  session_start();
  if (!isset($_SESSION['idLogin'])) {
    header("Location: index.php");
  }

  if (isset($_SESSION['loginLevel'])) {
    if ($_SESSION['loginLevel'] == 2) {
      header("Location: index.php");
    }
  }
  $idInstansi = $_GET['idInstansi'];
  include 'adminHeader.php' ?>

</head>


</head>

<section class="ftco-section ftco-no-pb ftco-no-pt bg-white">
  <div class="container">
    <div class="row">

      <div class="col-md-2 py-5 wrap-about pb-md-5 ftco-animate"></div>
      <div class="col-md-8 py-5 wrap-about pb-md-5 ftco-animate">
        <div class="heading-section-bold mb-4 mt-md-5">
          <div class="ml-md-0">
          </div>
        </div>
        <div class="pb-md-5">

          <?php

          $query = "SELECT * FROM instansi WHERE idInstansi = '$idInstansi'";
          $result = mysqli_query($con, $query);
          $item = mysqli_fetch_assoc($result);
          ?>

          <form action="process/updateInstansi.php" method="POST" enctype="multipart/form-data" class="bg-white p-5 contact-form">
            <h1><b><a href="">Update Product</a></b></h1>
            <input type="hidden" name="idInstansi" value="<?= $idInstansi ?>">
            <div class="form-group">
              <label>Image</label>
              <input type="file" class="form-control" name="file" id="file" value="" placeholder="" required="">
            </div>
            <div class="form-group">
              <label>Nama Instansi</label>
              <input type="Text" name="NamaInstansi" id="NamaInstansi" value="<?php echo $item["NamaInstansi"] ?>" class="form-control" placeholder="" required="">
            </div>
            
            <div class="form-group">
              <label>No Telp</label>
              <input type="number" name="notelpInstansi" id="notelpInstansi" value="<?php echo $item["notelpInstansi"] ?>" class="form-control" placeholder="" required="">
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" name="alamatInstansi" id="alamatInstansi" value="<?php echo $item["alamatInstansi"] ?>" class="form-control" placeholder="" required="">
            </div>
            <div class="form-group">
              <label>Jobdesk</label>
              <input type="text" name="jobdesk" id="jobdesk" value="<?php echo $item["jobdesk"] ?>" class="form-control" placeholder="" required="">
            </div>
            <div class="form-group">
              <a href="adminInstansi.php" class="btn btn-secondary">Cancel</a>
              <button class="btn btn-primary" type="submit" name="submit" value="Update">Update Product</button>
            </div>
          </form>
        </div>
      </div>

      <div class="col-md-2 py-5 wrap-about pb-md-5 ftco-animate"></div>
    </div>
  </div>
</section>

<head>
  <?php include 'footer.php' ?>
</head>
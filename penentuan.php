
<head>
  <?php
  // error_reporting(0);
  include 'process/conSQL.php';
  include 'header.php';
  if (!isset($_SESSION['idLogin'])) {
    header("Location: index.php");
  }

  if (isset($_SESSION['loginLevel'])) {
    if ($_SESSION['loginLevel'] == 1) {
      header("Location: adminHome.php");
    }
  }

  if (isset($_SESSION['idMahasiswa'])) {
    $userid = $_SESSION['idMahasiswa'];
  }
  ?>
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

        <?php
        $message = '';
        if (isset($_GET["error"])) {
          $message = $_GET["error"];
          echo "
                <p style='color:red; font-style:italic'>$message</p>
                ";
        }
        ?>

        <div class="pb-md-5">
          <form action="process/addPenentuan.php" method="POST" enctype="multipart/form-data">
            <h1><b><a href="">Penentuan</a></b></h1>
            
            <div class="form-group">
              <label>Nilai Pemrograman</label>
              <input type="Text" class="form-control" placeholder="" name="nilaiPemrograman" id="nilaiPemrograman" required>
            </div>

            <div class="form-group">
              <label>Nilai Jaringan</label>
              <input type="number" class="form-control" placeholder="" name="nilaiJaringan" id="nilaiJaringan" required>
            </div>
            <div class="form-group">
              <label>Nilai IOT</label>
              <input type="number" class="form-control" placeholder="" name="nilaiIOT" id="nilaiIOT" required>
            </div>
            <div class="form-group">
              <label>Nilai Multimedia</label>
              <input type="number" class="form-control" placeholder="" name="nilaiMultimedia" id="nilaiMultimedia" required>
            </div>
            <div class="form-group">
              <label>IPK</label>
              <input type="text" class="form-control" placeholder="" name="IPK" id="IPK" required>
            </div>
            <div class="form-group">
              <input type="hidden" class="form-control" placeholder="" name="idMahasiswa" id="idMahasiswa" required>
            </div>
            <div class="form-group">
              <a href="adminProduct.php" class="btn btn-secondary">Cancel</a>


              <button class="btn btn-primary" type="submit" name="submit"> Tentukan</button>
            </div>
          </form>
        </div>
      </div>

      <div class="col-md-2 py-5 wrap-about pb-md-5 ftco-animate"></div>
    </div>
  </div>

  <script>
    function clearForm() {
      $('nilaiPemrograman').val('');
      $('nilaiJaringan').val('');
      $('nilaiMultimedia').val('');
      $('nilaiIOT').val('');
      $('IPK').val('');
    }
  </script>

</section>

<head>
  <?php include 'footer.php' ?>
</head>
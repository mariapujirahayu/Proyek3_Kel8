  
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
  ?>
</head>

    <section class="ftco-section">
        <div class="container">
            <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Hasil Penentuan Tempat PKL</h2>
        </div>
            <div class="row">

                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="images/product-1.jpg" class="image-popup"><img src="images/product-1.jpg" class="img-fluid" alt="Colorlib Template"></a>
                </div>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <h3>*Nama Instansi*</h3>
                    <div class="rating d-flex">
                            <p class="text-left mr-12">
                                <span style="color: #bbb;">*Contact Person*</span>
                            </p>
                           
                        </div>
                    <p class="price"><span>*Alamat*</span></p>
                    <p>*Jobsdesk* A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until.
                        </p>
                       
            <!-- <p><a href="cart.html" class="btn btn-black py-3 px-5">Add to Cart</a></p> -->
                </div>
            </div>
        </div>
    </section>

    <head>
  <?php include 'footer.php' ?>
</head>
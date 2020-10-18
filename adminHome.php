
<?php 
include 'process/conSQL.php' ;
session_start();

if (!isset($_SESSION['idLogin'])) {
    header("Location: index.php");
}

if (isset($_SESSION['loginLevel'])) {
    if ($_SESSION['loginLevel'] == 2) {
        header("Location: index.php");
    }
}


include 'adminHeader.php' ;
?>
	
    <!-- END nav -->



  <section id="home" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url(images/Banner02.jpg);">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<span class="subheading"><BR></span>
				<span class="subheading"><BR></span>
				<span class="subheading"><BR></span>
				<h2 class="mb-4">HELLO, ADMIN</h2></br>
			</div>
	      </div>

	      <div class="slider-item" style="background-image: url(images/Banner01.jpg);">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<span class="subheading"><BR></span>
				<span class="subheading"><BR></span>
				<span class="subheading"><BR></span>
				<h2 class="mb-4">HELLO, ADMIN</h2></br>
			</div>
	      </div>
	    </div>
    </section>

 <head>
<?php include 'footer.php' ?>
</head>
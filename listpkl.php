<?php include 'koneksi.php' ?>

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
					<p class="breadcrumbs"><span class="mr-2"><a href="listpkl.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Daftar Tempat PKL <i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-0 bread">Daftar Tempat PKL</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row">
			
					

				<div class="col-lg-12">
					<div class="row">
						<?php $ambil = $koneksi->query("SELECT * FROM instansi ORDER BY id_instansi ASC"); ?>
        				<?php while ($pecah = $ambil->fetch_assoc()) { ?>
						<div class="col-md-6 d-flex align-items-stretch ftco-animate">
							<div class="project-wrap">
								<a href="detailinstansi.php?id=<?php echo $pecah["id_instansi"] ?>" class="img" style="background-image: url(foto_instansi/<?php echo $pecah['foto']; ?>);">
									<span class="price">Tempat PKL</span>
								</a>
								<div class="text p-4">
									<h3><a href="detailinstansi.php?id=<?php echo $pecah["id_instansi"] ?>"><?php echo $pecah['nama_instansi']; ?></a></h3>
									<ul class="d-flex justify-content-between">
										<li><span class="flaticon-shower"></span><?php echo $pecah['alamat']; ?></li>
									</ul>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
					<!-- <div class="row mt-5">
						<div class="col">
							<div class="block-27">
								<ul>
									<li><a href="#">&lt;</a></li>
									<li class="active"><span>1</span></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">&gt;</a></li>
								</ul>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</section>
        <?php include 'includes/footer.php' ?>
        <?php include 'includes/loader.php' ?>
			
		</body>
		</html>
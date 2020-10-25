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
			
					

<<<<<<< HEAD
					<div class="sidebar-box bg-white p-4 ftco-animate">
						<h3 class="heading-sidebar">Software</h3>
						<form action="#" class="browse-form">
							<label for="option-software-1"><input type="checkbox" id="option-software-1" name="vehicle" value="" checked> Adobe Photoshop</label><br>
							<label for="option-software-2"><input type="checkbox" id="option-software-2" name="vehicle" value=""> Adobe Illustrator</label><br>
							<label for="option-software-3"><input type="checkbox" id="option-software-3" name="vehicle" value=""> Sketch</label><br>
							<label for="option-software-4"><input type="checkbox" id="option-software-4" name="vehicle" value=""> WordPress</label><br>
							<label for="option-software-5"><input type="checkbox" id="option-software-5" name="vehicle" value=""> HTML &amp; CSS</label><br>
						</form>
					</div>
				</div>
				<div class="col-lg-9">
					<!-- <div class="col-md-12 text-center">
						<?php $ambil = $koneksi->query("SELECT * FROM mahasiswa"); ?>
						<?php while ($pecah = $ambil->fetch_assoc()) { ?>
						<a href="inputnilai.php?id=<?php echo $pecah["id_mahasiswa"] ?>" class="btn btn-secondary">Input Nilai</a><?php } ?>
						<a href="nilai.php?id=<?php echo $pecah["id_mahasiswa"] ?>" class="btn btn-secondary">Lihat Nilai</a>
						
					</div><br> -->
=======
				<div class="col-lg-12">
>>>>>>> f30dbc62454fb955cc70e473154bcadbe56b9899
					<div class="row">
						<?php $ambil = $koneksi->query("SELECT * FROM instansi,mahasiswa ORDER BY id_instansi ASC"); ?>
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
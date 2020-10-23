<?php include 'koneksi.php' 


?>

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
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact us <i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-0 bread">Input Nilai</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<!-- database -->
									<?php
									if (isset($_POST['submit'])) {
										
										$id_mahasiswa = $_SESSION["id_mahasiswa"];

										$ambil = $koneksi->query("SELECT * FROM nilai_mahasiswa WHERE id_mahasiswa='$id_mahasiswa'");
										$pecah = $ambil->fetch_assoc();
										
										if($pecah> 0){
											echo "<div class='alert alert-info'>Anda sudah input nilai</div> ";
											
										}
										else{
										$id_mahasiswa = $_SESSION["id_mahasiswa"];
											$koneksi->query("INSERT INTO nilai_mahasiswa(id_mahasiswa, a1, a2, b1, b2, b3, b4, b5, c1, c2,d1,d2,d3) 
												VALUES('$id_mahasiswa','$_POST[a1]','$_POST[a2]','$_POST[b1]','$_POST[b2]','$_POST[b3]','$_POST[b4]','$_POST[b5]','$_POST[c1]','$_POST[c2]','$_POST[d1]','$_POST[d2]','$_POST[d3]')");
											
											echo "<div class='alert alert-info'>Data Tersimpan</div>";
											echo "<meta http-equiv='refresh' content='1;url=listpkl.php'>";
										}
									}
									?>
							<div class="col-lg-12 col-md-12 order-md-last d-flex align-items-stretch">

								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-12">Masukkan Nilai</h3>
									<form method="POST" >
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="a1">IPK</label>
													<input type="number" class="form-control" name="a1" id="a1" required placeholder="Berupa angka 1 - 5">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="a2">Kemampuan Dasar</label>
													<input type="number" class="form-control" name="a2" id="a2" required placeholder="Berupa angka 1 - 5">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="b1">Kemampuan Database</label>
													<input type="number" class="form-control" name="b1" id="b1" required placeholder="Berupa angka 1 - 5">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="b2">Kemampuan Web</label>
													<input type="number" class="form-control" name="b2" id="b2" required placeholder="Berupa angka 1 - 5">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="b3">Kemampuan Pemrograman Mobile</label>
													<input type="number" class="form-control" name="b3" id="b3" required placeholder="Berupa angka 1 - 5">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="b4">Kemampuan Jaringan</label>
													<input type="number" class="form-control" name="b4" id="b4" required placeholder="Berupa angka 1 - 5">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="b5">Kemampuan Desain</label>
													<input type="number" class="form-control" name="b5" id="b5" required placeholder="Berupa angka 1 - 5">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="c1">Keaktifan</label>
													<input type="number" class="form-control" name="c1" id="c1" required placeholder="Berupa angka 1 - 5">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="c2">Kedisiplinan</label>
													<input type="number" class="form-control" name="c2" id="c2" required placeholder="Berupa angka 1 - 5">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="d1">Keahlian Pemrograman</label>
													<input type="number" class="form-control" name="d1" id="d1" required placeholder="Berupa angka 1 - 5">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="d2">Keahlian Jaringan</label>
													<input type="number" class="form-control" name="d2" id="d2" required placeholder="Berupa angka 1 - 5">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="d3">Keahlian Desain</label>
													<input type="number" class="form-control" name="d3" id="d3" required placeholder="Berupa angka 1 - 5">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													
  													<input type="checkbox" name="keterangan" value="keterangan" required> Data yang sudah terisi tidak bisa di ubah<br>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Simpan" class="btn btn-primary" name="submit" href="listpkl.php">
													<div class="submitting"></div>
												</div>
											</div>

										</div>
									</form>

									

								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
    </section>
    <?php include 'includes/footer.php' ?>
    <?php include 'includes/loader.php' ?>
	</body>
	</html>
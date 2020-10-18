<?php

include 'process/conSQL.php';
include 'header.php';
if (!isset($_SESSION['idLogin'])) {
	// header("Location: index.php");
}

// $katid = $_GET['kat'];
?>
<!-- END nav -->

<style type="text/css">
	.float {
		width: 100px;
		height: 200px;
		position: fixed;
		top: 400px;
		right: 50px;
		z-index: 999;

	}
</style>



<section id="home" class="hero">
	<div class="home-slider owl-carousel">
		<div class="slider-item" style="background-image: url(images/Banner01.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

					<div class="col-md-12 ftco-animate text-center">
					</div>

				</div>
			</div>
		</div>

		<div class="slider-item" style="background-image: url(images/Banner02.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

					<div class="col-sm-12 ftco-animate text-center">
					</div>

				</div>
			</div>
		</div>
	</div>
</section>



<section class="ftco-section ftco-cart">
	<div class="container">
		<div class="col-md-12 heading-section text-center ftco-animate">
			<h2 class="mb-4">List Tempat PKL</h2></br>
		</div>

		<div class="row">
			<div class="col-md-12 ftco-animate">
				<div class="cart-list">
					<!-- <p><a href="adminAddProduct.php" class="btn btn-primary py-3 px-4">Add Instansi</a></p> -->
					<table id="barang" class="table table-strped">
						<thead class="thead-primary">
							<tr class="text-center">
								<th>Image</th>
								<th>Nama Instansi</th>
								<th>No Telp </th>
								<th>Alamat</th>
								<th>Jobdesk</th>
							</tr>
						</thead>

						<tbody>

							<?php
							$query = "SELECT * FROM instansi order by idInstansi desc";
							$result = mysqli_query($con, $query);

							if (mysqli_num_rows($result) > 0) {
								$index = 1;
								while ($row = mysqli_fetch_assoc($result)) {
									$idBarang = $row["idInstansi"];
									echo "
									<tr>
										<td>" . "<img src='process/imgBarang/" . $row["foto"] . "' width=\"150\"   alt=\"gambar\">" . "</td>
										<td>" . $row["NamaInstansi"] . "</td>
										<td>" . $row["notelpInstansi"] . "</td>
										<td>" . $row["alamatInstansi"] . "</td>
										<td>" . $row["jobdesk"] . "</td>
										
									</tr>
									";
								}
							}
							mysqli_close($con);
							?>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
$message = '';
if (isset($_GET["error"])) {
	$message = $_GET["error"];
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>


<head>
	<?php include 'footer.php' ?>

</head>
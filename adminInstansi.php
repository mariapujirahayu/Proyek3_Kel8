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
	include 'adminHeader.php' ?>

</head>

<section class="ftco-section ftco-cart">
	<div class="container">
		<div class="col-md-12 heading-section text-center ftco-animate">
			<span class="subheading">Admin</span>
			<h2 class="mb-4">List Tempat PKL</h2></br>
		</div>

		<div class="row">
			<div class="col-md-12 ftco-animate">
				<div class="cart-list">
					<p><a href="adminAddInstansi.php" class="btn btn-primary py-3 px-4">Add Instansi</a></p>
					<table id="barang" class="table table-strped">
						<thead class="thead-primary">
							<tr class="text-center">
								<th>Image</th>
								<th>Nama Instansi</th>
								<th>No Telp</th>
								<th>Alamat</th>
								<th>Jobdesk</th>
								<th>Update</th>
								<th>Delete</th>
							</tr>
						</thead>

						<tbody>

							<?php
							$query = "SELECT * FROM instansi order by idInstansi desc";
							$result = mysqli_query($con, $query);

							if (mysqli_num_rows($result) > 0) {
								$index = 1;
								while ($row = mysqli_fetch_assoc($result)) {
									$idInstansi = $row["idInstansi"];
									echo "
									<tr>
										<td>" . "<img src='process/imgBarang/" . $row["foto"] . "' width=\"150\"   alt=\"gambar\">" . "</td>
										<td>" . $row["NamaInstansi"] . "</td>
										<td>" . $row["notelpInstansi"] . "</td>
										<td>" . $row["alamatInstansi"] . "</td>
										<td>" . $row["jobdesk"] . "</td>
										<td>
											<a href='adminUpdateInstansi.php?idInstansi=$idInstansi'  class='btn btn-warning'>Update</a>
										</td>
										<td> <a href='process/deleteInstansi.php?idInstansi=$idInstansi' class='btn btn-danger'>Delete</a> </td>

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
<head>
	<?php include 'footer.php' ?>
</head>
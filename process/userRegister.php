<?php
// Include DB connection file
include 'conSQL.php';

// // Get the form value
$NamaMahasiswa = $_POST["NamaMahasiswa"];
$NoTelpMahasiswa = $_POST["NoTelpMahasiswa"];
$EmailMahasiswa = $_POST["EmailMahasiswa"];
$Username = $_POST['Username'];
$Password = $_POST['Password'];


         $cek = mysqli_num_rows(mysqli_query($con,"SELECT * FROM login WHERE Username='$Username'"));

        
         if ($cek > 0){
		    $error = urldecode("username sudah di gunakan, mohon ganti username lain");
            header("Location:../register.php?pesan=$error");
		 }else {
		     $query1= "INSERT into login (Username,Password,loginLevel) values ('$Username','$Password','2')";//resep= user
         		if (mysqli_query($con, $query1)) {
			  		 $idLogin = "select idLogin from login where Username = '$Username'";
					  if (mysqli_query($con, $idLogin)) {
					  	$result_select = mysqli_query($con, $idLogin);

						$row = mysqli_fetch_assoc($result_select);

						$idLogin = $row['idLogin'] ;
						// echo $id_user;
						$query = "INSERT INTO mahasiswa (idLogin,NamaMahasiswa, NoTelpMahasiswa,EmailMahasiswa) VALUES ($idLogin,'$NamaMahasiswa','$NoTelpMahasiswa','$EmailMahasiswa')";

					  	mysqli_query($con, $query);
					    header("Location:../registerSuccess.php");
			 		   }
			    } else {
			        $error = urldecode("Data tidak berhasil ditambahakan");
			        header("Location:../register.php?pesan=$error");
			    }

		 }

  
   
  	
 

	

// close mysql connection
mysqli_close($con);

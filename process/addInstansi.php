<?php
include 'conSQL.php';

$NamaInstansi = $_POST["NamaInstansi"];
$notelpInstansi = $_POST["notelpInstansi"];
$alamatInstansi = $_POST["alamatInstansi"];
$jobdesk = $_POST["jobdesk"];


$code = $_FILES['file']['error'];
if ($code === 0) {

    $destination_path = getcwd(); 

    $error = "";
    $nama_folder = "imgBarang";
    $tmp = $_FILES['file']['tmp_name'];
    $nama_file = $_FILES['file']['name'];
    $path = $destination_path . "\\$nama_folder\\$nama_file";

    if (file_exists($path)) {
        $error = urldecode("File dengan nama yang sama sudah tersimpan, coba lagi");
        header("Location:../daftarBarangAdmin.php?error=$error");
    }


    $tipe_file = array('image/jpeg', 'image/gif', 'image/png');
    if (!in_array($_FILES['file']['type'], $tipe_file)) {
        $error = urldecode("Cek Kembali Ekstensi File Anda (*jpeg, *jpg, *gif, *png)");
        header("Location:../adminAddProduct.php?error=$error");
    }

    if (move_uploaded_file($tmp, $path)) {
        $query = "INSERT INTO instansi(NamaInstansi, notelpInstansi, alamatInstansi, jobdesk,foto) VALUE ('$NamaInstansi', '$notelpInstansi', '$alamatInstansi','$jobdesk','$nama_file')";

        if (mysqli_query($con, $query)) {
            header("Location:../adminInstansi.php");
        } else {
            $error = urldecode("Data tidak berhasil ditambahkan");
            header("Location:../adminAddInstansi.php?error=$error");
        }
    }
} else {
    $error = urldecode("Foto tidak berhasil terupload");
    header("Location:../adminAddInstansi.php?error=$error");
}



mysqli_close($con);

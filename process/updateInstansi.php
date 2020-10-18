<?php
include 'conSQL.php';

$idInstansi = $_POST["idInstansi"];
$NamaInstansi = $_POST["NamaInstansi"];
$notelpInstansi = $_POST["notelpInstansi"];
$alamatInstansi = $_POST["alamatInstansi"];
$idKategori = $_POST["idKategori"];
$jobdesk = $_POST["jobdesk"];

$code = $_FILES['file']['error'];
if ($code === 0) {

    $destination_path = getcwd();

    $error = "";
    $tmp = $_FILES['file']['tmp_name'];
    $nama_folder = "imgBarang";
    $nama_file = $_FILES['file']['name'];
    $path = $destination_path . "\\$nama_folder\\$nama_file";

    if (file_exists($path)) {
        $error = urldecode("File dengan nama yang sama sudah tersimpan, coba lagi");
        header("Location:../daftarBarangAdmin.php?error=$error");
    }


    $tipe_file = array('image/jpeg', 'image/gif', 'image/png');
    if (!in_array($_FILES['file']['type'], $tipe_file)) {
        $error = urldecode("Cek Kembali Ekstensi File Anda (*jpeg, *jpg, *gif, *png)");
        header("Location:../adminAddInstansi.php?error=$error");
    }

    if (move_uploaded_file($tmp, $path)) {
        $query = "UPDATE instansi SET NamaInstansi = '$NamaInstansi',notelpInstansi ='$notelpInstansi',alamatInstansi = '$alamatInstansi',jobdesk='$jobdesk',foto='$nama_file' where idInstansi ='$idInstansi'";


        if (mysqli_query($con, $query)) {
            header("Location:../adminInstansi.php");
        } else {
            $error = urldecode("Data tidak berhasil ditambahkan");
            header("Location:../adminUpdateInstansi.php?error=$error");
        }
    }
} else {
    $error = urldecode("Foto tidak berhasil terupload");
    header("Location:../adminUpdateInstansi.php?error=$error");
}



mysqli_close($con);

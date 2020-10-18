<?php
include 'conSQL.php';
session_start();
if (isset($_SESSION['idMahasiswa'])) {
	$userid = $_SESSION['idMahasiswa'];
}

$nilaiPemrograman = $_POST["nilaiPemrograman"];
$nilaiJaringan = $_POST["nilaiJaringan"];
$nilaiIOT = $_POST["nilaiIOT"];
$nilaiMultimedia = $_POST["nilaiMultimedia"];
$IPK = $_POST["IPK"];
$idMahasiswa =$_POST["idMahasiswa"];

        $query = "INSERT INTO matching(nilaiPemrograman, nilaiJaringan, nilaiIOT, nilaiMultimedia,IPK,idMahasiswa) VALUE ('$nilaiPemrograman', '$nilaiJaringan', '$nilaiIOT', '$nilaiMultimedia','$IPK','$userid')";
var_dump($query);
        if (mysqli_query($con, $query)) {
            header("Location:../hasilPenentuan.php");
        } else {
            $error = urldecode("Data tidak berhasil ditambahkan");
            header("Location:../penentuan.php?error=$error");
        }


mysqli_close($con);

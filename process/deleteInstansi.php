<?php
session_start();

include 'conSQL.php';

$idInstansi = $_GET['idInstansi'];

$query = "DELETE FROM instansi WHERE idInstansi = $idInstansi";

if (mysqli_query($con, $query)) {
    header("Location: ../adminInstansi.php");
} else {
    header("Location: ../adminInstansi.php?error=Tidak berhasil");
}

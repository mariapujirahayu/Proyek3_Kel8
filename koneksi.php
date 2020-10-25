<?php
$koneksi = new mysqli("localhost", "root", "", "profilepkl");

session_start();
if (!isset($_SESSION["mahasiswa"])) {
    header('Location:loginuser.php?first=true');
}
?>
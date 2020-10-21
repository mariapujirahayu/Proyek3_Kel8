<?php
include('koneksi.php');
$sql = "DELETE FROM instansi WHERE id_instansi='$_GET[id]'";
if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('HAPUS berhasil');window.location='instansi.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>
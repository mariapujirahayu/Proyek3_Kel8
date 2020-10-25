<<<<<<< HEAD
<?php include 'koneksi2.php' ?>

<?php
$ambil = $koneksi->query("SELECT * FROM nilai_mahasiswa JOIN mahasiswa ON nilai_mahasiswa.id_mahasiswa = mahasiswa.id_mahasiswa WHERE id_nilai='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
=======
<?php include 'koneksi.php' ;
>>>>>>> f30dbc62454fb955cc70e473154bcadbe56b9899

  if (isset($_SESSION['user'])) {
$id_mahasiswa = $_SESSION["id_mahasiswa"];
$ambil = $koneksi->query("SELECT * from nilai_mahasiswa,mahasiswa WHERE nilai_mahasiswa.id_mahasiswa='$id_mahasiswa' and mahasiswa.id_mahasiswa='$id_mahasiswa'");
}
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
       <p class="breadcrumbs"><span class="mr-2"><a href="listpkl.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Hitung Profile Matching <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">Proses Profile Matching</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section bg-light">
   <div class="container">
      <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Proses Perhitungan</span>
            <h2 class="mb-4">Data Nilai Mahasiswa</h2>
        </div>
    </div>
    
    <div class="row">
        <div class="table-responsive">
            <table class="table">
                <p style="border:2px solid Tomato;" class="breadcrumbs text-center">Nilai Mahasiswa</p>
                <thead class=" text-primary">
                    <th class="text-center">No</th>
                    <th class="text-center">Instansi</th>
                    <th class="text-center">A1</th>
                    <th class="text-center">A2</th>
                    <th class="text-center">B1</th>
                    <th class="text-center">B2</th>
                    <th class="text-center">B3</th>
                    <th class="text-center">B4</th>
                    <th class="text-center">B5</th>
                    <th class="text-center">C1</th>
                    <th class="text-center">C2</th>
                    <th class="text-center">D1</th>
                    <th class="text-center">D2</th>
                    <th class="text-center">D3</th>
                </thead>
                <tbody class="text-center">
                    <?php $nomor = 1; ?>
                    <?php $ambil = $koneksi->query("SELECT * FROM instansi ORDER BY id_instansi ASC"); ?>
                    <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $pecah['nama_instansi']; ?></td>
                        <td><?php echo $pecah['ka1']; ?></td>
                        <td><?php echo $pecah['ka2']; ?></td>
                        <td><?php echo $pecah['kb1']; ?></td>
                        <td><?php echo $pecah['kb2']; ?></td>
                        <td><?php echo $pecah['kb3']; ?></td>
                        <td><?php echo $pecah['kb4']; ?></td>
                        <td><?php echo $pecah['kb5']; ?></td>
                        <td><?php echo $pecah['kc1']; ?></td>
                        <td><?php echo $pecah['kc2']; ?></td>
                        <td><?php echo $pecah['kd1']; ?></td>
                        <td><?php echo $pecah['kd2']; ?></td>
                        <td><?php echo $pecah['kd3']; ?></td>
                    </tr>
                    <?php $nomor++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="table-responsive">
            <table class="table">
                <p style="border:2px solid Tomato;" class="breadcrumbs text-center">Mencari GAP</p>
                <thead class=" text-primary">
                    <th class="text-center">No</th>
                    <th class="text-center">Instansi</th>
                    <th class="text-center">A1</th>
                    <th class="text-center">A2</th>
                    <th class="text-center">B1</th>
                    <th class="text-center">B2</th>
                    <th class="text-center">B3</th>
                    <th class="text-center">B4</th>
                    <th class="text-center">B5</th>
                    <th class="text-center">C1</th>
                    <th class="text-center">C2</th>
                    <th class="text-center">D1</th>
                    <th class="text-center">D2</th>
                    <th class="text-center">D3</th>
                </thead>
                <tbody class="text-center">

                    <?php $nomor = 1; ?>
                    <?php
                    $id_mahasiswa = $_SESSION["id_mahasiswa"];
                     $ambil = $koneksi->query("SELECT * FROM instansi, nilai_mahasiswa WHERE id_mahasiswa='$id_mahasiswa' ORDER BY id_instansi ASC"); 
                        $gapa1 = 0;
                        $gapa2 = 0;
                        $gapb1 = 0;
                        $gapb2 = 0;
                        $gapb3 = 0;
                        $gapb4 = 0;
                        $gapb5 = 0;
                        $gapc1 = 0;
                        $gapc2 = 0;
                        $gapd1 = 0;
                        $gapd2 = 0;
                        $gapd3 = 0;
                    ?>
                    <?php while ($pecah = $ambil->fetch_assoc()) { 
                        $gapa1 = ($pecah['ka1']-$pecah['a1']);
                        $gapa2 = ($pecah['ka2']-$pecah['a2']);
                        $gapb1 = $pecah['kb1']-$pecah['b1'];
                        $gapb2 = $pecah['kb2']-$pecah['b2'];
                        $gapb3 = $pecah['kb3']-$pecah['b3'];
                        $gapb4 = $pecah['kb4']-$pecah['b4'];
                        $gapb5 = $pecah['kb5']-$pecah['b5'];
                        $gapc1 = $pecah['kc1']-$pecah['c1'];
                        $gapc2 = $pecah['kc2']-$pecah['c2'];
                        $gapd1 = $pecah['kd1']-$pecah['d1'];
                        $gapd2 = $pecah['kd2']-$pecah['d2'];
                        $gapd3 = $pecah['kd3']-$pecah['d3'];
                    ?>
                    <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $pecah['nama_instansi']; ?></td>
                        <td><?php echo $gapa1; ?></td>
                        <td><?php echo $gapa2; ?></td>
                        <td><?php echo $gapb1; ?></td>
                        <td><?php echo $gapb2; ?></td>
                        <td><?php echo $gapb3; ?></td>
                        <td><?php echo $gapb4; ?></td>
                        <td><?php echo $gapb5; ?></td>
                        <td><?php echo $gapc1; ?></td>
                        <td><?php echo $gapc2; ?></td>
                        <td><?php echo $gapd1; ?></td>
                        <td><?php echo $gapd2; ?></td>
                        <td><?php echo $gapd3; ?></td>
                    </tr>
                    <?php $nomor++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="table-responsive">
            <table class="table">
                <p style="border:2px solid Tomato;" class="breadcrumbs text-center">Mencari Nilai Bobot</p>
                <thead class=" text-primary">
                    <th class="text-center">No</th>
                    <th class="text-center">Instansi</th>
                    <th class="text-center">A1</th>
                    <th class="text-center">A2</th>
                    <th class="text-center">B1</th>
                    <th class="text-center">B2</th>
                    <th class="text-center">B3</th>
                    <th class="text-center">B4</th>
                    <th class="text-center">B5</th>
                    <th class="text-center">C1</th>
                    <th class="text-center">C2</th>
                    <th class="text-center">D1</th>
                    <th class="text-center">D2</th>
                    <th class="text-center">D3</th>
                </thead>
                <tbody class="text-center">
                    <?php $nomor = 1; ?>
                    <?php 

                    $id_mahasiswa = $_SESSION["id_mahasiswa"];
                    $ambil = $koneksi->query("SELECT * FROM instansi, nilai_mahasiswa  WHERE id_mahasiswa='$id_mahasiswa' ORDER BY id_instansi ASC"); 
                      $gapa1 = 0;
                      $gapa2 = 0;
                      $gapb1 = 0;
                      $gapb2 = 0;
                      $gapb3 = 0;
                      $gapb4 = 0;
                      $gapb5 = 0;
                      $gapc1 = 0;
                      $gapc2 = 0;
                      $gapd1 = 0;
                      $gapd2 = 0;
                      $gapd3 = 0;
                      $bobota1 = 0;
                      $bobota2 = 0;
                      $bobotb1 = 0;
                      $bobotb2 = 0;
                      $bobotb3 = 0;
                      $bobotb4 = 0;
                      $bobotb5 = 0;
                      $bobotc1 = 0;
                      $bobotc2 = 0;
                      $bobotd1 = 0;
                      $bobotd2 = 0;
                      $bobotd3 = 0;
                      
                    ?>
                    <?php while ($pecah = $ambil->fetch_assoc()) { 
                      $gapa1 = ($pecah['ka1']-$pecah['a1']);
                      $gapa2 = ($pecah['ka2']-$pecah['a2']);
                      $gapb1 = $pecah['kb1']-$pecah['b1'];
                      $gapb2 = $pecah['kb2']-$pecah['b2'];
                      $gapb3 = $pecah['kb3']-$pecah['b3'];
                      $gapb4 = $pecah['kb4']-$pecah['b4'];
                      $gapb5 = $pecah['kb5']-$pecah['b5'];
                      $gapc1 = $pecah['kc1']-$pecah['c1'];
                      $gapc2 = $pecah['kc2']-$pecah['c2'];
                      $gapd1 = $pecah['kd1']-$pecah['d1'];
                      $gapd2 = $pecah['kd2']-$pecah['d2'];
                      $gapd3 = $pecah['kd3']-$pecah['d3'];
                      //bobot a1
                      if($gapa1 == '0'){
                        $bobota1 = 5;
                      }
                      elseif($gapa1 == '1'){
                        $bobota1 = 4.5;
                      }
                      elseif ($gapa1 =='-1') {
                        $bobota1 = 4;
                      }
                      elseif ($gapa1 == '2') {
                        $bobota1 = 3.5;
                      }
                      elseif($gapa1 == '-2'){
                        $bobota1 = 3;
                      }
                      elseif ($gapa1 =='3') {
                        $bobota1 = 2.5;
                      }
                      elseif ($gapa1 == '-3') {
                        $bobota1 = 2;
                      }
                      elseif ($gapa1 == '4') {
                        $bobota1 = 1.5;
                      }
                      elseif ($gapa1 == '-4') {
                        $bobota1 = 1;
                      }
                      else {
                        $bobota1 = "input nilai salah";
                      }
                      //bobot a2
                      if($gapa2 == '0'){
                        $bobota2 = 5;
                      }
                      elseif($gapa2 == '1'){
                        $bobota2 = 4.5;
                      }
                      elseif ($gapa2 =='-1') {
                        $bobota2 = 4;
                      }
                      elseif ($gapa2 == '2') {
                        $bobota2 = 3.5;
                      }
                      elseif($gapa2 == '-2'){
                        $bobota2 = 3;
                      }
                      elseif ($gapa2 =='3') {
                        $bobota2 = 2.5;
                      }
                      elseif ($gapa2 == '-3') {
                        $bobota2 = 2;
                      }
                      elseif ($gapa2 == '4') {
                        $bobota2 = 1.5;
                      }
                      elseif ($gapa2 == '-4') {
                        $bobota2 = 1;
                      }
                      else {
                        $bobota2 = "input nilai salah";
                      }
                      //bobot b1
                      if($gapb1 == '0'){
                        $bobotb1 = 5;
                      }
                      elseif($gapb1 == '1'){
                        $bobotb1 = 4.5;
                      }
                      elseif ($gapb1 =='-1') {
                        $bobotb1 = 4;
                      }
                      elseif ($gapb1 == '2') {
                        $bobotb1 = 3.5;
                      }
                      elseif($gapb1 == '-2'){
                        $bobotb1 = 3;
                      }
                      elseif ($gapb1 =='3') {
                        $bobotb1 = 2.5;
                      }
                      elseif ($gapb1 == '-3') {
                        $bobotb1 = 2;
                      }
                      elseif ($gapb1 == '4') {
                        $bobotb1 = 1.5;
                      }
                      elseif ($gapb1 == '-4') {
                        $bobotb1 = 1;
                      }
                      else {
                        $bobotb1 = "input nilai salah";
                      }
                      //bobot b2
                      if($gapb2 == '0'){
                        $bobotb2 = 5;
                      }
                      elseif($gapb2 == '1'){
                        $bobotb2 = 4.5;
                      }
                      elseif ($gapb2 =='-1') {
                        $bobotb2 = 4;
                      }
                      elseif ($gapb2 == '2') {
                        $bobotb2 = 3.5;
                      }
                      elseif($gapb2 == '-2'){
                        $bobotb2 = 3;
                      }
                      elseif ($gapb2 =='3') {
                        $bobotb2 = 2.5;
                      }
                      elseif ($gapb2 == '-3') {
                        $bobotb2 = 2;
                      }
                      elseif ($gapb2 == '4') {
                        $bobotb2 = 1.5;
                      }
                      elseif ($gapb2 == '-4') {
                        $bobotb2 = 1;
                      }
                      else {
                        $bobotb2 = "input nilai salah";
                      }
                      //bobot b3
                      if($gapb3 == '0'){
                        $bobotb3 = 5;
                      }
                      elseif($gapb3 == '1'){
                        $bobotb3 = 4.5;
                      }
                      elseif ($gapb3 =='-1') {
                        $bobotb3 = 4;
                      }
                      elseif ($gapb3 == '2') {
                        $bobotb3 = 3.5;
                      }
                      elseif($gapb3 == '-2'){
                        $bobotb3 = 3;
                      }
                      elseif ($gapb3 =='3') {
                        $bobotb3 = 2.5;
                      }
                      elseif ($gapb3 == '-3') {
                        $bobotb3 = 2;
                      }
                      elseif ($gapb3 == '4') {
                        $bobotb3 = 1.5;
                      }
                      elseif ($gapb3 == '-4') {
                        $bobotb3 = 1;
                      }
                      else {
                        $bobotb3 = "input nilai salah";
                      }//bobot b4
                      if($gapb4 == '0'){
                        $bobotb4 = 5;
                      }
                      elseif($gapb4 == '1'){
                        $bobotb4 = 4.5;
                      }
                      elseif ($gapb4 =='-1') {
                        $bobotb4 = 4;
                      }
                      elseif ($gapb4 == '2') {
                        $bobotb4 = 3.5;
                      }
                      elseif($gapb4 == '-2'){
                        $bobotb4 = 3;
                      }
                      elseif ($gapb4 =='3') {
                        $bobotb4 = 2.5;
                      }
                      elseif ($gapb4 == '-3') {
                        $bobotb4 = 2;
                      }
                      elseif ($gapb4 == '4') {
                        $bobotb4 = 1.5;
                      }
                      elseif ($gapb4 == '-4') {
                        $bobotb4 = 1;
                      }
                      else {
                        $bobotb4 = "input nilai salah";
                      }
                      //bobot b5
                      if($gapb5 == '0'){
                        $bobotb5 = 5;
                      }
                      elseif($gapb5 == '1'){
                        $bobotb5 = 4.5;
                      }
                      elseif ($gapb5 =='-1') {
                        $bobotb5 = 4;
                      }
                      elseif ($gapb5 == '2') {
                        $bobotb5 = 3.5;
                      }
                      elseif($gapb5 == '-2'){
                        $bobotb5 = 3;
                      }
                      elseif ($gapb5 =='3') {
                        $bobotb5 = 2.5;
                      }
                      elseif ($gapb5 == '-3') {
                        $bobotb5 = 2;
                      }
                      elseif ($gapb5 == '4') {
                        $bobotb5 = 1.5;
                      }
                      elseif ($gapb5 == '-4') {
                        $bobotb5 = 1;
                      }
                      else {
                        $bobotb5 = "input nilai salah";
                      }
                      //bobot c1
                      if($gapc1 == '0'){
                        $bobotc1 = 5;
                      }
                      elseif($gapc1 == '1'){
                        $bobotc1 = 4.5;
                      }
                      elseif ($gapc1 =='-1') {
                        $bobotc1 = 4;
                      }
                      elseif ($gapc1 == '2') {
                        $bobotc1 = 3.5;
                      }
                      elseif($gapc1 == '-2'){
                        $bobotc1 = 3;
                      }
                      elseif ($gapc1 =='3') {
                        $bobotc1 = 2.5;
                      }
                      elseif ($gapc1 == '-3') {
                        $bobotc1 = 2;
                      }
                      elseif ($gapc1 == '4') {
                        $bobotc1 = 1.5;
                      }
                      elseif ($gapc1 == '-4') {
                        $bobotc1 = 1;
                      }
                      else {
                        $bobotc1 = "input nilai salah";
                      }
                      //bobot c2
                      if($gapc2 == '0'){
                        $bobotc2 = 5;
                      }
                      elseif($gapc2 == '1'){
                        $bobotc2 = 4.5;
                      }
                      elseif ($gapc2 =='-1') {
                        $bobotc2 = 4;
                      }
                      elseif ($gapc2 == '2') {
                        $bobotc2 = 3.5;
                      }
                      elseif($gapc2 == '-2'){
                        $bobotc2 = 3;
                      }
                      elseif ($gapc2 =='3') {
                        $bobotc2 = 2.5;
                      }
                      elseif ($gapc2 == '-3') {
                        $bobotc2 = 2;
                      }
                      elseif ($gapc2 == '4') {
                        $bobotc2 = 1.5;
                      }
                      elseif ($gapc2 == '-4') {
                        $bobotc2 = 1;
                      }
                      else {
                        $bobotc2 = "input nilai salah";
                      }
                      //bobot d1
                      if($gapd1 == '0'){
                        $bobotd1 = 5;
                      }
                      elseif($gapd1 == '1'){
                        $bobotd1 = 4.5;
                      }
                      elseif ($gapd1 =='-1') {
                        $bobotd1 = 4;
                      }
                      elseif ($gapd1 == '2') {
                        $bobotd1 = 3.5;
                      }
                      elseif($gapd1 == '-2'){
                        $bobotd1 = 3;
                      }
                      elseif ($gapd1 =='3') {
                        $bobotd1 = 2.5;
                      }
                      elseif ($gapd1 == '-3') {
                        $bobotd1 = 2;
                      }
                      elseif ($gapd1 == '4') {
                        $bobotd1 = 1.5;
                      }
                      elseif ($gapd1 == '-4') {
                        $bobotd1 = 1;
                      }
                      else {
                        $bobotd1 = "input nilai salah";
                      }
                      //bobot d2
                      if($gapd2 == '0'){
                        $bobotd2 = 5;
                      }
                      elseif($gapd2 == '1'){
                        $bobotd2 = 4.5;
                      }
                      elseif ($gapd2 =='-1') {
                        $bobotd2 = 4;
                      }
                      elseif ($gapd2 == '2') {
                        $bobotd2 = 3.5;
                      }
                      elseif($gapd2 == '-2'){
                        $bobotd2 = 3;
                      }
                      elseif ($gapd2 =='3') {
                        $bobotd2 = 2.5;
                      }
                      elseif ($gapd2 == '-3') {
                        $bobotd2 = 2;
                      }
                      elseif ($gapd2 == '4') {
                        $bobotd2 = 1.5;
                      }
                      elseif ($gapd2 == '-4') {
                        $bobotd2 = 1;
                      }
                      else {
                        $bobotd2 = "input nilai salah";
                      }
                      //bobot d3
                      if($gapd3 == '0'){
                        $bobotd3 = 5;
                      }
                      elseif($gapd3 == '1'){
                        $bobotd3 = 4.5;
                      }
                      elseif ($gapd3 =='-1') {
                        $bobotd3 = 4;
                      }
                      elseif ($gapd3 == '2') {
                        $bobotd3 = 3.5;
                      }
                      elseif($gapd3 == '-2'){
                        $bobotd3 = 3;
                      }
                      elseif ($gapd3 =='3') {
                        $bobotd3 = 2.5;
                      }
                      elseif ($gapd3 == '-3') {
                        $bobotd3 = 2;
                      }
                      elseif ($gapd3 == '4') {
                        $bobotd3 = 1.5;
                      }
                      elseif ($gapd3 == '-4') {
                        $bobotd3 = 1;
                      }
                      else {
                        $bobotd3 = "input nilai salah";
                      }
                    ?>
                    <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $pecah['nama_instansi']; ?></td>
                        <td><?php echo $bobota1; ?></td>
                        <td><?php echo $bobota2; ?></td>
                        <td><?php echo $bobotb1; ?></td>
                        <td><?php echo $bobotb2; ?></td>
                        <td><?php echo $bobotb3; ?></td>
                        <td><?php echo $bobotb4; ?></td>
                        <td><?php echo $bobotb5; ?></td>
                        <td><?php echo $bobotc1; ?></td>
                        <td><?php echo $bobotc2; ?></td>
                        <td><?php echo $bobotd1; ?></td>
                        <td><?php echo $bobotd2; ?></td>
                        <td><?php echo $bobotd3; ?></td>
                    </tr>
                    <?php $nomor++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="table-responsive">
            <table class="table">
                <p style="border:2px solid Tomato;" class="breadcrumbs text-center">Mencari Core Factor, Secondary Factor dan N</p>
                <thead class=" text-primary">
                    <th class="text-center">Nomor</th>
                    <th class="text-center">Instansi</th>
                    <th class="text-center">Hasil Akhir</th>
                    <th class="text-center">N Kriteria Kemampuan</th>
                    <th class="text-center">N Kriteria Kepribadian</th>
                    <th class="text-center">N Kriteria Keahlian</th>
                </thead>
                <tbody class="text-center">
                    <?php $nomor = 1; ?>
                    <?php $ambil = $koneksi->query("SELECT * FROM instansi, nilai_mahasiswa WHERE id_mahasiswa='$id_mahasiswa' ORDER BY id_instansi ASC"); 
                      $gapa1 = 0;
                      $gapa2 = 0;
                      $gapb1 = 0;
                      $gapb2 = 0;
                      $gapb3 = 0;
                      $gapb4 = 0;
                      $gapb5 = 0;
                      $gapc1 = 0;
                      $gapc2 = 0;
                      $gapd1 = 0;
                      $gapd2 = 0;
                      $gapd3 = 0;
                      $bobota1 = 0;
                      $bobota2 = 0;
                      $bobotb1 = 0;
                      $bobotb2 = 0;
                      $bobotb3 = 0;
                      $bobotb4 = 0;
                      $bobotb5 = 0;
                      $bobotc1 = 0;
                      $bobotc2 = 0;
                      $bobotd1 = 0;
                      $bobotd2 = 0;
                      $bobotd3 = 0;
                      $cf1 = 0; $sf1 = 0; $n1=0;
                      $cf2 = 0; $sf2 = 0; $n2=0;
                      $cf3 = 0; $sf3 = 0; $n3=0;
                      $cf4 = 0; $sf3 = 0; $n4=0;
                    ?>
                    <?php while ($pecah = $ambil->fetch_assoc()) { 
                      $gapa1 = ($pecah['ka1']-$pecah['a1']);
                      $gapa2 = ($pecah['ka2']-$pecah['a2']);
                      $gapb1 = $pecah['kb1']-$pecah['b1'];
                      $gapb2 = $pecah['kb2']-$pecah['b2'];
                      $gapb3 = $pecah['kb3']-$pecah['b3'];
                      $gapb4 = $pecah['kb4']-$pecah['b4'];
                      $gapb5 = $pecah['kb5']-$pecah['b5'];
                      $gapc1 = $pecah['kc1']-$pecah['c1'];
                      $gapc2 = $pecah['kc2']-$pecah['c2'];
                      $gapd1 = $pecah['kd1']-$pecah['d1'];
                      $gapd2 = $pecah['kd2']-$pecah['d2'];
                      $gapd3 = $pecah['kd3']-$pecah['d3'];
                      //bobot a1
                      if($gapa1 == '0'){
                        $bobota1 = 5;
                      }
                      elseif($gapa1 == '1'){
                        $bobota1 = 4.5;
                      }
                      elseif ($gapa1 =='-1') {
                        $bobota1 = 4;
                      }
                      elseif ($gapa1 == '2') {
                        $bobota1 = 3.5;
                      }
                      elseif($gapa1 == '-2'){
                        $bobota1 = 3;
                      }
                      elseif ($gapa1 =='3') {
                        $bobota1 = 2.5;
                      }
                      elseif ($gapa1 == '-3') {
                        $bobota1 = 2;
                      }
                      elseif ($gapa1 == '4') {
                        $bobota1 = 1.5;
                      }
                      elseif ($gapa1 == '-4') {
                        $bobota1 = 1;
                      }
                      else {
                        $bobota1 = "input nilai salah";
                      }
                      //bobot a2
                      if($gapa2 == '0'){
                        $bobota2 = 5;
                      }
                      elseif($gapa2 == '1'){
                        $bobota2 = 4.5;
                      }
                      elseif ($gapa2 =='-1') {
                        $bobota2 = 4;
                      }
                      elseif ($gapa2 == '2') {
                        $bobota2 = 3.5;
                      }
                      elseif($gapa2 == '-2'){
                        $bobota2 = 3;
                      }
                      elseif ($gapa2 =='3') {
                        $bobota2 = 2.5;
                      }
                      elseif ($gapa2 == '-3') {
                        $bobota2 = 2;
                      }
                      elseif ($gapa2 == '4') {
                        $bobota2 = 1.5;
                      }
                      elseif ($gapa2 == '-4') {
                        $bobota2 = 1;
                      }
                      else {
                        $bobota2 = "input nilai salah";
                      }
                      //bobot b1
                      if($gapb1 == '0'){
                        $bobotb1 = 5;
                      }
                      elseif($gapb1 == '1'){
                        $bobotb1 = 4.5;
                      }
                      elseif ($gapb1 =='-1') {
                        $bobotb1 = 4;
                      }
                      elseif ($gapb1 == '2') {
                        $bobotb1 = 3.5;
                      }
                      elseif($gapb1 == '-2'){
                        $bobotb1 = 3;
                      }
                      elseif ($gapb1 =='3') {
                        $bobotb1 = 2.5;
                      }
                      elseif ($gapb1 == '-3') {
                        $bobotb1 = 2;
                      }
                      elseif ($gapb1 == '4') {
                        $bobotb1 = 1.5;
                      }
                      elseif ($gapb1 == '-4') {
                        $bobotb1 = 1;
                      }
                      else {
                        $bobotb1 = "input nilai salah";
                      }
                      //bobot b2
                      if($gapb2 == '0'){
                        $bobotb2 = 5;
                      }
                      elseif($gapb2 == '1'){
                        $bobotb2 = 4.5;
                      }
                      elseif ($gapb2 =='-1') {
                        $bobotb2 = 4;
                      }
                      elseif ($gapb2 == '2') {
                        $bobotb2 = 3.5;
                      }
                      elseif($gapb2 == '-2'){
                        $bobotb2 = 3;
                      }
                      elseif ($gapb2 =='3') {
                        $bobotb2 = 2.5;
                      }
                      elseif ($gapb2 == '-3') {
                        $bobotb2 = 2;
                      }
                      elseif ($gapb2 == '4') {
                        $bobotb2 = 1.5;
                      }
                      elseif ($gapb2 == '-4') {
                        $bobotb2 = 1;
                      }
                      else {
                        $bobotb2 = "input nilai salah";
                      }
                      //bobot b3
                      if($gapb3 == '0'){
                        $bobotb3 = 5;
                      }
                      elseif($gapb3 == '1'){
                        $bobotb3 = 4.5;
                      }
                      elseif ($gapb3 =='-1') {
                        $bobotb3 = 4;
                      }
                      elseif ($gapb3 == '2') {
                        $bobotb3 = 3.5;
                      }
                      elseif($gapb3 == '-2'){
                        $bobotb3 = 3;
                      }
                      elseif ($gapb3 =='3') {
                        $bobotb3 = 2.5;
                      }
                      elseif ($gapb3 == '-3') {
                        $bobotb3 = 2;
                      }
                      elseif ($gapb3 == '4') {
                        $bobotb3 = 1.5;
                      }
                      elseif ($gapb3 == '-4') {
                        $bobotb3 = 1;
                      }
                      else {
                        $bobotb3 = "input nilai salah";
                      }//bobot b4
                      if($gapb4 == '0'){
                        $bobotb4 = 5;
                      }
                      elseif($gapb4 == '1'){
                        $bobotb4 = 4.5;
                      }
                      elseif ($gapb4 =='-1') {
                        $bobotb4 = 4;
                      }
                      elseif ($gapb4 == '2') {
                        $bobotb4 = 3.5;
                      }
                      elseif($gapb4 == '-2'){
                        $bobotb4 = 3;
                      }
                      elseif ($gapb4 =='3') {
                        $bobotb4 = 2.5;
                      }
                      elseif ($gapb4 == '-3') {
                        $bobotb4 = 2;
                      }
                      elseif ($gapb4 == '4') {
                        $bobotb4 = 1.5;
                      }
                      elseif ($gapb4 == '-4') {
                        $bobotb4 = 1;
                      }
                      else {
                        $bobotb4 = "input nilai salah";
                      }
                      //bobot b5
                      if($gapb5 == '0'){
                        $bobotb5 = 5;
                      }
                      elseif($gapb5 == '1'){
                        $bobotb5 = 4.5;
                      }
                      elseif ($gapb5 =='-1') {
                        $bobotb5 = 4;
                      }
                      elseif ($gapb5 == '2') {
                        $bobotb5 = 3.5;
                      }
                      elseif($gapb5 == '-2'){
                        $bobotb5 = 3;
                      }
                      elseif ($gapb5 =='3') {
                        $bobotb5 = 2.5;
                      }
                      elseif ($gapb5 == '-3') {
                        $bobotb5 = 2;
                      }
                      elseif ($gapb5 == '4') {
                        $bobotb5 = 1.5;
                      }
                      elseif ($gapb5 == '-4') {
                        $bobotb5 = 1;
                      }
                      else {
                        $bobotb5 = "input nilai salah";
                      }
                      //bobot c1
                      if($gapc1 == '0'){
                        $bobotc1 = 5;
                      }
                      elseif($gapc1 == '1'){
                        $bobotc1 = 4.5;
                      }
                      elseif ($gapc1 =='-1') {
                        $bobotc1 = 4;
                      }
                      elseif ($gapc1 == '2') {
                        $bobotc1 = 3.5;
                      }
                      elseif($gapc1 == '-2'){
                        $bobotc1 = 3;
                      }
                      elseif ($gapc1 =='3') {
                        $bobotc1 = 2.5;
                      }
                      elseif ($gapc1 == '-3') {
                        $bobotc1 = 2;
                      }
                      elseif ($gapc1 == '4') {
                        $bobotc1 = 1.5;
                      }
                      elseif ($gapc1 == '-4') {
                        $bobotc1 = 1;
                      }
                      else {
                        $bobotc1 = "input nilai salah";
                      }
                      //bobot c2
                      if($gapc2 == '0'){
                        $bobotc2 = 5;
                      }
                      elseif($gapc2 == '1'){
                        $bobotc2 = 4.5;
                      }
                      elseif ($gapc2 =='-1') {
                        $bobotc2 = 4;
                      }
                      elseif ($gapc2 == '2') {
                        $bobotc2 = 3.5;
                      }
                      elseif($gapc2 == '-2'){
                        $bobotc2 = 3;
                      }
                      elseif ($gapc2 =='3') {
                        $bobotc2 = 2.5;
                      }
                      elseif ($gapc2 == '-3') {
                        $bobotc2 = 2;
                      }
                      elseif ($gapc2 == '4') {
                        $bobotc2 = 1.5;
                      }
                      elseif ($gapc2 == '-4') {
                        $bobotc2 = 1;
                      }
                      else {
                        $bobotc2 = "input nilai salah";
                      }
                      //bobot d1
                      if($gapd1 == '0'){
                        $bobotd1 = 5;
                      }
                      elseif($gapd1 == '1'){
                        $bobotd1 = 4.5;
                      }
                      elseif ($gapd1 =='-1') {
                        $bobotd1 = 4;
                      }
                      elseif ($gapd1 == '2') {
                        $bobotd1 = 3.5;
                      }
                      elseif($gapd1 == '-2'){
                        $bobotd1 = 3;
                      }
                      elseif ($gapd1 =='3') {
                        $bobotd1 = 2.5;
                      }
                      elseif ($gapd1 == '-3') {
                        $bobotd1 = 2;
                      }
                      elseif ($gapd1 == '4') {
                        $bobotd1 = 1.5;
                      }
                      elseif ($gapd1 == '-4') {
                        $bobotd1 = 1;
                      }
                      else {
                        $bobotd1 = "input nilai salah";
                      }
                      //bobot d2
                      if($gapd2 == '0'){
                        $bobotd2 = 5;
                      }
                      elseif($gapd2 == '1'){
                        $bobotd2 = 4.5;
                      }
                      elseif ($gapd2 =='-1') {
                        $bobotd2 = 4;
                      }
                      elseif ($gapd2 == '2') {
                        $bobotd2 = 3.5;
                      }
                      elseif($gapd2 == '-2'){
                        $bobotd2 = 3;
                      }
                      elseif ($gapd2 =='3') {
                        $bobotd2 = 2.5;
                      }
                      elseif ($gapd2 == '-3') {
                        $bobotd2 = 2;
                      }
                      elseif ($gapd2 == '4') {
                        $bobotd2 = 1.5;
                      }
                      elseif ($gapd2 == '-4') {
                        $bobotd2 = 1;
                      }
                      else {
                        $bobotd2 = "input nilai salah";
                      }
                      //bobot d3
                      if($gapd3 == '0'){
                        $bobotd3 = 5;
                      }
                      elseif($gapd3 == '1'){
                        $bobotd3 = 4.5;
                      }
                      elseif ($gapd3 =='-1') {
                        $bobotd3 = 4;
                      }
                      elseif ($gapd3 == '2') {
                        $bobotd3 = 3.5;
                      }
                      elseif($gapd3 == '-2'){
                        $bobotd3 = 3;
                      }
                      elseif ($gapd3 =='3') {
                        $bobotd3 = 2.5;
                      }
                      elseif ($gapd3 == '-3') {
                        $bobotd3 = 2;
                      }
                      elseif ($gapd3 == '4') {
                        $bobotd3 = 1.5;
                      }
                      elseif ($gapd3 == '-4') {
                        $bobotd3 = 1;
                      }
                      else {
                        $bobotd3 = "input nilai salah";
                      }
                      //core factor
                      $cf1 = $bobota1/1;
                      $cf2 = ($bobotb1+$bobotb2+$bobotb3)/3;
                      $cf3 = $bobotc1/1;
                      $cf4 = ($bobotd1+$bobotd2)/2;
                      //secondary factor
                      $sf1 = $bobota2/1;
                      $sf2 = ($bobotb4+$bobotb5)/2;
                      $sf3 = $bobotc2/1;
                      $sf4 = $bobotd3/1;
                      //nilai N
                      $n1 = ($cf1*0.6)+($sf1*0.4);
                      $n2 = ($cf2*0.6)+($sf2*0.4);
                      $n3 = ($cf3*0.6)+($sf3*0.4);
                      $n4 = ($cf4*0.6)+($sf4*0.4);
                    ?>
                    <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $pecah['nama_instansi']; ?></td>
                        <td><?php echo $n1; ?></td>
                        <td><?php echo $n2; ?></td>
                        <td><?php echo $n3; ?></td>
                        <td><?php echo $n4; ?></td>
                    </tr>
                    <?php $nomor++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="table-responsive">
            <table class="table">
                <p style="border:2px solid Tomato;" class="breadcrumbs text-center">Hasil Perankingan</p>
                <thead class=" text-primary">
                    <th class="text-center">No</th>
                    <th class="text-center">Instansi</th>
                    <th class="text-center">Hasil Akhir</th>
                </thead>
                <tbody class="text-center">
                    <?php $nomor = 1; ?>
                    <?php $ambil = $koneksi->query("SELECT * FROM instansi, nilai_mahasiswa  WHERE id_mahasiswa='$id_mahasiswa' ORDER BY id_instansi ASC"); 
                      $gapa1 = 0;
                      $gapa2 = 0;
                      $gapb1 = 0;
                      $gapb2 = 0;
                      $gapb3 = 0;
                      $gapb4 = 0;
                      $gapb5 = 0;
                      $gapc1 = 0;
                      $gapc2 = 0;
                      $gapd1 = 0;
                      $gapd2 = 0;
                      $gapd3 = 0;
                      $bobota1 = 0;
                      $bobota2 = 0;
                      $bobotb1 = 0;
                      $bobotb2 = 0;
                      $bobotb3 = 0;
                      $bobotb4 = 0;
                      $bobotb5 = 0;
                      $bobotc1 = 0;
                      $bobotc2 = 0;
                      $bobotd1 = 0;
                      $bobotd2 = 0;
                      $bobotd3 = 0;
                      $cf1 = 0; $sf1 = 0; $n1=0;
                      $cf2 = 0; $sf2 = 0; $n2=0;
                      $cf3 = 0; $sf3 = 0; $n3=0;
                      $cf4 = 0; $sf3 = 0; $n4=0;
                      $rank1 = 0;
                    ?>
                    <?php while ($pecah = $ambil->fetch_assoc()) { 
                      $gapa1 = ($pecah['ka1']-$pecah['a1']);
                      $gapa2 = ($pecah['ka2']-$pecah['a2']);
                      $gapb1 = $pecah['kb1']-$pecah['b1'];
                      $gapb2 = $pecah['kb2']-$pecah['b2'];
                      $gapb3 = $pecah['kb3']-$pecah['b3'];
                      $gapb4 = $pecah['kb4']-$pecah['b4'];
                      $gapb5 = $pecah['kb5']-$pecah['b5'];
                      $gapc1 = $pecah['kc1']-$pecah['c1'];
                      $gapc2 = $pecah['kc2']-$pecah['c2'];
                      $gapd1 = $pecah['kd1']-$pecah['d1'];
                      $gapd2 = $pecah['kd2']-$pecah['d2'];
                      $gapd3 = $pecah['kd3']-$pecah['d3'];
                      //bobot a1
                      if($gapa1 == '0'){
                        $bobota1 = 5;
                      }
                      elseif($gapa1 == '1'){
                        $bobota1 = 4.5;
                      }
                      elseif ($gapa1 =='-1') {
                        $bobota1 = 4;
                      }
                      elseif ($gapa1 == '2') {
                        $bobota1 = 3.5;
                      }
                      elseif($gapa1 == '-2'){
                        $bobota1 = 3;
                      }
                      elseif ($gapa1 =='3') {
                        $bobota1 = 2.5;
                      }
                      elseif ($gapa1 == '-3') {
                        $bobota1 = 2;
                      }
                      elseif ($gapa1 == '4') {
                        $bobota1 = 1.5;
                      }
                      elseif ($gapa1 == '-4') {
                        $bobota1 = 1;
                      }
                      else {
                        $bobota1 = "input nilai salah";
                      }
                      //bobot a2
                      if($gapa2 == '0'){
                        $bobota2 = 5;
                      }
                      elseif($gapa2 == '1'){
                        $bobota2 = 4.5;
                      }
                      elseif ($gapa2 =='-1') {
                        $bobota2 = 4;
                      }
                      elseif ($gapa2 == '2') {
                        $bobota2 = 3.5;
                      }
                      elseif($gapa2 == '-2'){
                        $bobota2 = 3;
                      }
                      elseif ($gapa2 =='3') {
                        $bobota2 = 2.5;
                      }
                      elseif ($gapa2 == '-3') {
                        $bobota2 = 2;
                      }
                      elseif ($gapa2 == '4') {
                        $bobota2 = 1.5;
                      }
                      elseif ($gapa2 == '-4') {
                        $bobota2 = 1;
                      }
                      else {
                        $bobota2 = "input nilai salah";
                      }
                      //bobot b1
                      if($gapb1 == '0'){
                        $bobotb1 = 5;
                      }
                      elseif($gapb1 == '1'){
                        $bobotb1 = 4.5;
                      }
                      elseif ($gapb1 =='-1') {
                        $bobotb1 = 4;
                      }
                      elseif ($gapb1 == '2') {
                        $bobotb1 = 3.5;
                      }
                      elseif($gapb1 == '-2'){
                        $bobotb1 = 3;
                      }
                      elseif ($gapb1 =='3') {
                        $bobotb1 = 2.5;
                      }
                      elseif ($gapb1 == '-3') {
                        $bobotb1 = 2;
                      }
                      elseif ($gapb1 == '4') {
                        $bobotb1 = 1.5;
                      }
                      elseif ($gapb1 == '-4') {
                        $bobotb1 = 1;
                      }
                      else {
                        $bobotb1 = "input nilai salah";
                      }
                      //bobot b2
                      if($gapb2 == '0'){
                        $bobotb2 = 5;
                      }
                      elseif($gapb2 == '1'){
                        $bobotb2 = 4.5;
                      }
                      elseif ($gapb2 =='-1') {
                        $bobotb2 = 4;
                      }
                      elseif ($gapb2 == '2') {
                        $bobotb2 = 3.5;
                      }
                      elseif($gapb2 == '-2'){
                        $bobotb2 = 3;
                      }
                      elseif ($gapb2 =='3') {
                        $bobotb2 = 2.5;
                      }
                      elseif ($gapb2 == '-3') {
                        $bobotb2 = 2;
                      }
                      elseif ($gapb2 == '4') {
                        $bobotb2 = 1.5;
                      }
                      elseif ($gapb2 == '-4') {
                        $bobotb2 = 1;
                      }
                      else {
                        $bobotb2 = "input nilai salah";
                      }
                      //bobot b3
                      if($gapb3 == '0'){
                        $bobotb3 = 5;
                      }
                      elseif($gapb3 == '1'){
                        $bobotb3 = 4.5;
                      }
                      elseif ($gapb3 =='-1') {
                        $bobotb3 = 4;
                      }
                      elseif ($gapb3 == '2') {
                        $bobotb3 = 3.5;
                      }
                      elseif($gapb3 == '-2'){
                        $bobotb3 = 3;
                      }
                      elseif ($gapb3 =='3') {
                        $bobotb3 = 2.5;
                      }
                      elseif ($gapb3 == '-3') {
                        $bobotb3 = 2;
                      }
                      elseif ($gapb3 == '4') {
                        $bobotb3 = 1.5;
                      }
                      elseif ($gapb3 == '-4') {
                        $bobotb3 = 1;
                      }
                      else {
                        $bobotb3 = "input nilai salah";
                      }//bobot b4
                      if($gapb4 == '0'){
                        $bobotb4 = 5;
                      }
                      elseif($gapb4 == '1'){
                        $bobotb4 = 4.5;
                      }
                      elseif ($gapb4 =='-1') {
                        $bobotb4 = 4;
                      }
                      elseif ($gapb4 == '2') {
                        $bobotb4 = 3.5;
                      }
                      elseif($gapb4 == '-2'){
                        $bobotb4 = 3;
                      }
                      elseif ($gapb4 =='3') {
                        $bobotb4 = 2.5;
                      }
                      elseif ($gapb4 == '-3') {
                        $bobotb4 = 2;
                      }
                      elseif ($gapb4 == '4') {
                        $bobotb4 = 1.5;
                      }
                      elseif ($gapb4 == '-4') {
                        $bobotb4 = 1;
                      }
                      else {
                        $bobotb4 = "input nilai salah";
                      }
                      //bobot b5
                      if($gapb5 == '0'){
                        $bobotb5 = 5;
                      }
                      elseif($gapb5 == '1'){
                        $bobotb5 = 4.5;
                      }
                      elseif ($gapb5 =='-1') {
                        $bobotb5 = 4;
                      }
                      elseif ($gapb5 == '2') {
                        $bobotb5 = 3.5;
                      }
                      elseif($gapb5 == '-2'){
                        $bobotb5 = 3;
                      }
                      elseif ($gapb5 =='3') {
                        $bobotb5 = 2.5;
                      }
                      elseif ($gapb5 == '-3') {
                        $bobotb5 = 2;
                      }
                      elseif ($gapb5 == '4') {
                        $bobotb5 = 1.5;
                      }
                      elseif ($gapb5 == '-4') {
                        $bobotb5 = 1;
                      }
                      else {
                        $bobotb5 = "input nilai salah";
                      }
                      //bobot c1
                      if($gapc1 == '0'){
                        $bobotc1 = 5;
                      }
                      elseif($gapc1 == '1'){
                        $bobotc1 = 4.5;
                      }
                      elseif ($gapc1 =='-1') {
                        $bobotc1 = 4;
                      }
                      elseif ($gapc1 == '2') {
                        $bobotc1 = 3.5;
                      }
                      elseif($gapc1 == '-2'){
                        $bobotc1 = 3;
                      }
                      elseif ($gapc1 =='3') {
                        $bobotc1 = 2.5;
                      }
                      elseif ($gapc1 == '-3') {
                        $bobotc1 = 2;
                      }
                      elseif ($gapc1 == '4') {
                        $bobotc1 = 1.5;
                      }
                      elseif ($gapc1 == '-4') {
                        $bobotc1 = 1;
                      }
                      else {
                        $bobotc1 = "input nilai salah";
                      }
                      //bobot c2
                      if($gapc2 == '0'){
                        $bobotc2 = 5;
                      }
                      elseif($gapc2 == '1'){
                        $bobotc2 = 4.5;
                      }
                      elseif ($gapc2 =='-1') {
                        $bobotc2 = 4;
                      }
                      elseif ($gapc2 == '2') {
                        $bobotc2 = 3.5;
                      }
                      elseif($gapc2 == '-2'){
                        $bobotc2 = 3;
                      }
                      elseif ($gapc2 =='3') {
                        $bobotc2 = 2.5;
                      }
                      elseif ($gapc2 == '-3') {
                        $bobotc2 = 2;
                      }
                      elseif ($gapc2 == '4') {
                        $bobotc2 = 1.5;
                      }
                      elseif ($gapc2 == '-4') {
                        $bobotc2 = 1;
                      }
                      else {
                        $bobotc2 = "input nilai salah";
                      }
                      //bobot d1
                      if($gapd1 == '0'){
                        $bobotd1 = 5;
                      }
                      elseif($gapd1 == '1'){
                        $bobotd1 = 4.5;
                      }
                      elseif ($gapd1 =='-1') {
                        $bobotd1 = 4;
                      }
                      elseif ($gapd1 == '2') {
                        $bobotd1 = 3.5;
                      }
                      elseif($gapd1 == '-2'){
                        $bobotd1 = 3;
                      }
                      elseif ($gapd1 =='3') {
                        $bobotd1 = 2.5;
                      }
                      elseif ($gapd1 == '-3') {
                        $bobotd1 = 2;
                      }
                      elseif ($gapd1 == '4') {
                        $bobotd1 = 1.5;
                      }
                      elseif ($gapd1 == '-4') {
                        $bobotd1 = 1;
                      }
                      else {
                        $bobotd1 = "input nilai salah";
                      }
                      //bobot d2
                      if($gapd2 == '0'){
                        $bobotd2 = 5;
                      }
                      elseif($gapd2 == '1'){
                        $bobotd2 = 4.5;
                      }
                      elseif ($gapd2 =='-1') {
                        $bobotd2 = 4;
                      }
                      elseif ($gapd2 == '2') {
                        $bobotd2 = 3.5;
                      }
                      elseif($gapd2 == '-2'){
                        $bobotd2 = 3;
                      }
                      elseif ($gapd2 =='3') {
                        $bobotd2 = 2.5;
                      }
                      elseif ($gapd2 == '-3') {
                        $bobotd2 = 2;
                      }
                      elseif ($gapd2 == '4') {
                        $bobotd2 = 1.5;
                      }
                      elseif ($gapd2 == '-4') {
                        $bobotd2 = 1;
                      }
                      else {
                        $bobotd2 = "input nilai salah";
                      }
                      //bobot d3
                      if($gapd3 == '0'){
                        $bobotd3 = 5;
                      }
                      elseif($gapd3 == '1'){
                        $bobotd3 = 4.5;
                      }
                      elseif ($gapd3 =='-1') {
                        $bobotd3 = 4;
                      }
                      elseif ($gapd3 == '2') {
                        $bobotd3 = 3.5;
                      }
                      elseif($gapd3 == '-2'){
                        $bobotd3 = 3;
                      }
                      elseif ($gapd3 =='3') {
                        $bobotd3 = 2.5;
                      }
                      elseif ($gapd3 == '-3') {
                        $bobotd3 = 2;
                      }
                      elseif ($gapd3 == '4') {
                        $bobotd3 = 1.5;
                      }
                      elseif ($gapd3 == '-4') {
                        $bobotd3 = 1;
                      }
                      else {
                        $bobotd3 = "input nilai salah";
                      }
                      //core factor
                      $cf1 = $bobota1/1;
                      $cf2 = ($bobotb1+$bobotb2+$bobotb3)/3;
                      $cf3 = $bobotc1/1;
                      $cf4 = ($bobotd1+$bobotd2)/2;
                      //secondary factor
                      $sf1 = $bobota2/1;
                      $sf2 = ($bobotb4+$bobotb5)/2;
                      $sf3 = $bobotc2/1;
                      $sf4 = $bobotd3/1;
                      //nilai N
                      $n1 = ($cf1*0.6)+($sf1*0.4);
                      $n2 = ($cf2*0.6)+($sf2*0.4);
                      $n3 = ($cf3*0.6)+($sf3*0.4);
                      $n4 = ($cf4*0.6)+($sf4*0.4);
                      //ranking
                      $rank = ($n1*0.3)+($n2*0.2)+($n3*0.2)+($n4*0.3);
                    ?>
                    <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $pecah['nama_instansi']; ?></td>
                        <td><?php echo $rank; ?></td>
                    </tr>
                    <?php $nomor++; ?>
                    <?php } ?>
                    
                </tbody>
            </table>
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
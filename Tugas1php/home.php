<?php

$deskrip = "Nama saya Ahmad Jazim Irsyaduddin Mahasiswa S1 Sistem Informasi di universitas Dinamika Surabaya Semester 6 angkatan 2021.
Saya menganggap diri saya orang yang bertanggung jawab dan tertib terhadap segala sesatu yang saya kerjakan.
Saya Memiliki pengalaman project selama kuliah dalam pengembangan website maupun mobile dengan menggunakan bahasa pemrograman Java, HTML, PHP, JavaScript, library jQuery 
dan SQL. Serta memiliki ketertarikan terhadap Design User Interface/Experience dan Pemrograman WEB. 
saya memiliki keinginan menjadi seorang web developer.";
$agama = "Islam";
$ttl = "Surabaya / 26 april 2001";
$alamat = "Asrama JL Gresik 39 Surabaya";
$hobbies = array("Olahraga", "Menulis", "Membaca", "Ngoding");
$foods = array("Nasi Goreng", "Tumpang Pecel", "Soto Ayam");
$drinks = array("Es teh", "Lemon Tea", "Kopi rempah");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    h1 {
      color: burlywood;
    }

    li {
      color: darkorange;
    }
  </style>
</head>

<!-- align dan lainnya itu atribute -->

<body class="bg">
  <!-- h1 contoh tag -->
  <h1 align="center">
    <!-- <marquee behavior="" direction="Right" scrolldelay="50"> -->
    <!-- ini adalah element -->
    Welcome To My Profile
    <!-- </marquee> -->
  </h1>
  <p align="justify">
    <img src="img/WhatsApp Image 2022-10-14 at 07.54.11.jpeg" alt="" width="10%" align="left" hspace="20" />
    <?php
    echo $deskrip;
    ?>
    <br />
  </p>

  <fieldset>
    <legend>
      <font size="4" color="white" face="calibri"> Tentang saya </font>
    </legend>
    <ol type="I">
      <li>Data diri</li>
      <ul type="disc">
        <li>Agama</li>
        <li type="none">
          <?php
          echo $agama;
          ?>
        </li>
        <li>Tempat tanggal Lahir</li>
        <li type="none">
          <?php
          echo $ttl;
          ?>
        </li>
        <li>Alamat</li>
        <li type="none">
          <?php
          echo $alamat;
          ?>
        </li>
      </ul>
      <li>pendidikan</li>
      <ul type="disc">
        <li>Univeristas Dinamika</li>
        <li type="none">Strata-1 Sistem Informasi 2021</li>
        <li>SMA Negeri 8 Surabaya</li>
        <li type="none">2016-2019</li>
      </ul>
      <br />
      <!-- <li>Hobby</li>
      <ul type="disc">
        <li>Olahraga</li>
        <li>Menulis</li>
        <li>Membaca</li>
        <li>Ngoding</li>
      </ul>
      <br />
      <li>Menu Favorite</li>
      <ul type="disc">
        <li>Makanan</li>
        <ul>
          <li>Nasi Goreng</li>
          <li>Tumpang Pecel</li>
          <li>Soto Ayam</li>
        </ul>
        <li>Minuman</li>
        <ul>
          <li>Es teh</li>
          <li>Lemon Tea</li>
          <li>Kopi rempah</li>
        </ul> -->

      <li>Hobby</li>
      <ul type="disc">
        <?php foreach ($hobbies as $hobby): ?>
          <li>
            <?php echo $hobby; ?>
          </li>
        <?php endforeach; ?>
      </ul>
      <br />
      <li>Menu Favorite</li>
      <ul type="disc">
        <li>Makanan</li>
        <ul>
          <?php foreach ($foods as $food): ?>
            <li>
              <?php echo $food; ?>
            </li>
          <?php endforeach; ?>
        </ul>
        <li>Minuman</li>
        <ul>
          <?php foreach ($drinks as $drink): ?>
            <li>
              <?php echo $drink; ?>
            </li>
          <?php endforeach; ?>
        </ul>



      </ul>
    </ol>
  </fieldset>
</body>

</html>
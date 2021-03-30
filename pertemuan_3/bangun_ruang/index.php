<?php 
    require 'bangun_ruang.php';

    $rusuk = 9;
    $kubus = new Kubus($rusuk);
    $luas_kubus = $kubus->luas();
    $volume_kubus = $kubus->volume();

    $r = 5;
    $bola = new Bola($r);
    $luas_bola = $bola->luas();
    $volume_bola = $bola->volume();

    $panjang = 16;
    $lebar = 15;
    $tinggi = 12;
    $balok = new Balok($panjang,$lebar,$tinggi);
    $luas_balok = $balok->luas();
    $volume_balok = $balok->volume();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>192410101071 Mohammad Syafiq</title>
    <style>
        *{
            margin: 0;
            padding :0;
        }
        body{
            background-color: #00ffff;
        }
        ul  {
            background-size: auto;
            background-color: #ccc595;
        }
        ul li {
            font-size: 20px;
            padding :20;
            background-size: auto;
            background-color: #ccc638;
        }
        h1{
            background-color: #acc899;
            text-decoration: none;
        }
        h2{
            color: black;
            background-color: #dcb185;
        }
    </style>
</head>
<body>
    <center><h1> Nama : Mohammad Syafiq </h1></center>
    <center><h1> NIM : 192410101071 </h1></center> 
    <center><h1> Kelas : Pemrograman Web (B) </h1></center> <br>
    <center><h2> Bangun Ruang : Kubus </h2></center>
    <ul>
        <center><li>Panjang Sisi : <?= '<strong>'.$rusuk.'</strong> cm <br>';?></li></center>
        <center><li>Kubus : <?= '<strong>'.$luas_kubus.'</strong> cm^2';?></li></center>
        <center><li>Volume Kubus : <?= '<strong>'.$volume_kubus.'</strong> cm^3';?> </li></center>
    </ul>
    <br>
    <center><h2> Bangun Ruang : Balok </h2></center>
    <ul>
        <center><li>Panjang Balok  : <?= '<strong>'.$panjang.'</strong> cm <br>';?> </li></center>
        <center><li>Lebar Balok  : <?= '<strong>'.$lebar.'</strong> cm <br>';?> </li></center>
        <center><li>Tinggi Balok  : <?= '<strong>'.$tinggi.'</strong> cm <br>';?> </li></center>
        <center><li>Luas Balok : <?= '<strong>'.$luas_balok.'</strong> cm^2';?> </li></center>
        <center><li>Volume Balok : <?= '<strong>'.$volume_balok.'</strong> cm^3';?> </li></center>
    </ul>
    <br>
    <center><h2> Bangun Ruang : Bola </h2></center>
    <ul>
        <center><li>Panjang Jari-Jari : <?= '<strong>'.$r.'</strong> cm <br>';?> </li></center>
        <center><li>Luas Bola : <?= '<strong>'.$luas_bola.'</strong> cm^2';?> </li></center>
        <center><li>Volume Bola : <?= '<strong>'.$volume_bola.'</strong> cm^3';?> </li></center>
    </ul>
</body>
</html>

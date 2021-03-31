<?php
    #untuk menampilkan yang nama
    $_POST['nama'] ='Mohammad Syafiq';

    #untuk mengecek type yaitu array
    var_dump($_POST);
    var_dump($_GET);

    #untuk mengecek yang post pada buttonnya
    if (isset($_POST['btn_submit'])) {
        if (strlen($_POST['diameter']) > 0){
            echo "login !";
        }
        else {
            echo "harus isi terlebih dahulu";
        }
    }

    #cek server apa fungsi post nya
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        echo "login" ;
    }

    #cek untuk yang inputan diameter rumus Luas
    $luas = 0;
    $volume = 0;
    if (isset($_POST['isi_diameter'])) {
        $diameter1 = $_POST['diameter1'];
        $tinggi = $_POST['tinggi'];
        $r = $diameter1 / 2;

        $luas = 3.14 * $diameter1 * $tinggi;
        $volume = 3.14 ** $r * $tinggi;

        echo "Diameter $diameter1 <br/>";
        echo "Tinggi $tinggi <br/>";

    }

    #untuk file pengecekan yang di Tabung.php
    require 'Tabung.php';
    $tabung = new Tabung;
    if (isset($_POST('ini_button'))) {
        $tabung->setDiameter($_POST['diameter1']);
        $tabung->setTinggi($_POST['tinggi']);
        $tabung->hitungLuas();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 4</title>
</head>

<body>
    <!-- #yang dari url -->
    <h1> Nama <?= isset($_GET['nama']) ? $_GET['nama']  : 'Undefined'; ?></h1>
    <br>
    <!-- #yang pertama buat  -->
    <form action="" method="POST">
        <input type="text" name='diameter' value="7">
        <button>Submit</button>
    </form> <br> <br>

   <!-- #yang kedua buat Button  -->
   <form action="" method="POST">
        <input type="text" name='diameter'>
        <button name="btn_submit">Submit</button>
    </form> <br> <br>   


    <!-- #yang luas dan volume -->
    <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter1"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name="ini_button">Hitung</button>

    </form>
    
    <hr>
    <ul>
        <li>Luas Selimut Yang codingan awal : <?= $luas; ?> </li>
        <li>Luas Selimut Yang codingan pisah : <?= $tabung->getLuasSelimut(); ?> </li>
        <li>Volume : <?= $volume; ?></li>
    </ul>

</body>
</html>
<?php

// echo "Sabil",
// echo "vish",
echo true,
print "Nugraha",
var_dump("Sabil nugraha");

?>

<?php
//variabel
// aturan variabel :
// - tidak boleh diawali angka tapi boleh mengandung angka
$nama = "Sabil";
$variabel = "Ini variable";

//operator
//aritmatika
//contoh :
$x = 10;
$y = 5;
$sum = $x + $y;

//concat(operator penggabung string)
//contoh :
$namadepan = "Sabil";
$namabelakang = "Nugraha";
$namalengkap = $namadepan . " " . $namabelakang;

//operator assignment
// =, +=, -=, *=, /=, %=, .=
//contoh
$a = 1;
$a = 5;
//maka varibel atas ditimpa dengan variabel bawah
$c = 1;
$c += 2;
//maka varibel atas ditambah variabel bawah, begitupula -

//contoh dalam string :
$name = "Sabil";
$name .= " ";
$name .= "Nugraha";

//operator perbandingan
//contoh
var_dump(1 < 5);
var_dump(1 > 5);
var_dump(1 == 5);
//nb : perbandingan ini tidak mengecek tipe data
//contoh
var_dump(1 == "1");

//kalau cek tipe data, maka memakai operator identitas
// memakai ===, !==
//contoh
var_dump( 1 === "1");

//operator logika
// ada 3 : &&, ||, !
//untuk pengkondisian
//contoh
$e = 10;
var_dump($e < 20 && $e % 2 == 0);
$f = 30;
var_dump($f < 20 || $f % 2 == 0)





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- // php dlm html -->
    <h1>Halo, perkenalkan saya <?php echo "$nama" ?></h1>
    <p><?php echo  $variabel; ?></p>
    <p>ini hasil operator <?php echo $sum ?></p>
    <p>ini hasil concat <?php echo $namalengkap ?></p>
    <p>output operator assignment : <?php echo $a?> <?php echo $c ?> <?php echo $name ?> </p>

    <!-- html dalam php -->
    <?php
    echo "<h1>
    ini html dalam php
    </h1>"
    ?>

</body>

</html>
<?php
// definisikan varible konstanta
define('PHI', 3.14);

// soal 1 : Hitunglah Luas Lingkaran dengan jari-jari 8
// soal 2 : Hitunglah Keliling Lingkaran dengan jari-jari 8

// definisikan variable jari-jari
$jari = 8;
$luas = PHI * $jari * $jari;
$keliling = 2 * PHI * $jari;

echo "Luas Lingkaran dengan jari-jari $jari adalah $luas cm2";
echo "<br>Keliling Lingkaran dengan jari-jari $jari adalah $keliling cm";

?> 
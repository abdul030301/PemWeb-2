<?php
// definisikan konstansta
define('PHI',3.14);
define('DBNAME','db_mahasiswa');
define('DBSERVER','localhost');
define('DBUSER','root');
define('DBPASS','rombel ti 13');

//deklarasi variable
$jari = 7;
$luas = PHI * $jari * $jari;
$kll = 2 * PHI * $jari;

//menampilkan hasil
echo 'Luas Lingkaran : '.$luas. '<br>';
echo 'Keliling Lingkaran : '.$kll;

echo '<hr>';

//menampilkan konstanta
echo 'Nama databasenya : '.DBNAME. '<br>';
echo 'Lokasi databasenya ada di : '.DBSERVER. '<br>';
echo 'Nama User databasenya : '.DBUSER. '<br>';
echo 'Password databasenya : '.DBPASS. '<br>';

?>
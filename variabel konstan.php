<?php
// definisikan konstanta
// dalam pemrograman komputer, konstanta merupakan identifier yang terkait nilai tidak biasanya di ubah oleh program selama pelaksanaannya 
define('PHI' ,3.14);
define('DBNAME','inventori');
define('DBSERVER','localhost');

$jari = 8;
$luas = PHI * $jari * $jari;
$kll = 2 * PHI * $jari;

echo 'luas lingkaran dengan jari '.$jari.' : '.$luas;
echo '<br/>kelilingnya : '.$kll;
?>
<hr/>
<?php
echo 'nama databasenya : '.DBNAME;
echo '<br/>lokasi databasenya ada di '.DBSERVER;
?>
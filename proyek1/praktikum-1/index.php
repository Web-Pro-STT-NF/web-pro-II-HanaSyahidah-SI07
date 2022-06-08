<?php
// variable user
$name = "Hana Syahidah";
$umur = 18;
$berat = 44;

// tampilan variable yang udah dibuat


echo "Nama : " . $name ."</h1>";
echo "<br/>Umur : $umur";
echo "<br/>Berat : $berat";

// menampilkan variable sistem
echo "<br/>Dokumen root : " . $_SERVER['DOCUMENT_ROOT'];
echo "<br/>Nama File : " . $_SERVER['PHP_SELF'];

// membuat variable const
// define('namavariable', nilaivariable)
Define('PHI', 3.14);
$r = 10;
$luas = PHI * $r * $r;
echo "<br/>Luas Lingkaran : $luas";
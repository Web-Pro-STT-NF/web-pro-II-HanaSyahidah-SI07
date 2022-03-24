<?php
include_once "kucing.php";
//membuat objek / instance objek kucing
$garfield = new kucing("Garfield", 5, "Oren");
$ucup = new kucing("Ucup", 10, "Belang Hitam");

echo $garfield->nama, "<br>";

echo $garfield->makan(), "<br>";
echo $garfield->tidur(), "<br>";
echo $garfield->lari(), "<br>";

echo $ucup->makan(), "<br>";
echo $ucup->tidur(), "<br>";
echo $ucup->lari();
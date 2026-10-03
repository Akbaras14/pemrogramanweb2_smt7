<?php
/*
 * Judul Materi : Latihan 1 - Count dan Sizeof
 * Nama         : Akbar Aditiya Sugianto
 * NIM          : 231011403729
 * Kelas        : 07 TPLM 004
 * Universitas  : Universitas Pamulang
 */

$a[0] = 1;
$a[1] = 3;
$a[2] = 5;

$jumlah = count($a);

print "Jumlah array a = $jumlah <br>";

$b["buah"] = "semangka";
$b["sayur"] = "wortel";
$b["daging"] = "ayam";
$b["utama"] = "nasi";

$jumlah = sizeof($b);

print "Jumlah array b = $jumlah <br>";

?>
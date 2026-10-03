<?php
/*
 * Judul Materi : Latihan 3 - Konstanta
 * Nama         : Akbar Aditiya Sugianto
 * NIM          : 231011403729
 * Kelas        : 07 TPLM 004
 * Universitas  : Universitas Pamulang
 */

define("judul", "Menghitung luas lingkaran");
define("phi", 3.14);

$r = 5;

$luas = phi * $r * $r;

echo judul;
echo "<br>";
echo "Luas = $luas";

?>
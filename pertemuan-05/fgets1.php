<?php
/*
 * Judul Materi : Latihan 2 - Membaca Satu Baris Berkas
 * Nama         : Akbar Aditiya Sugianto
 * NIM          : 231011403729
 * Kelas        : 07 TPLM 004
 * Universitas  : Universitas Pamulang
 */

$file = fopen("test1.txt", "r");

echo fgets($file);

fclose($file);
?>
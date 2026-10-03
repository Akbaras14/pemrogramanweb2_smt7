<?php
/*
 * Judul Materi : Latihan 3 - Membaca Seluruh Isi Berkas
 * Nama         : Akbar Aditiya Sugianto
 * NIM          : 231011403729
 * Kelas        : 07 TPLM 004
 * Universitas  : Universitas Pamulang
 */

$file = fopen("test1.txt", "r");

while (!feof($file)) {

    echo fgets($file) . "<br />";
}

fclose($file);
?>
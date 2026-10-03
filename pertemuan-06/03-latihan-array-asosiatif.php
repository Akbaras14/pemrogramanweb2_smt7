<?php
/*
 * Judul Materi : Latihan 3 - Array Asosiatif
 * Nama         : Akbar Aditiya Sugianto
 * NIM          : 231011403729
 * Kelas        : 07 TPLM 004
 * Universitas  : Universitas Pamulang
 */

$UsiaKaryawan["Lisa"] = "28";
$UsiaKaryawan["Jack"] = "16";
$UsiaKaryawan["Ryan"] = "35";
$UsiaKaryawan["Rachel"] = "46";
$UsiaKaryawan["Grace"] = "34";

foreach ($UsiaKaryawan as $Nama => $umur)
{
    echo "Nama Karyawan: $Nama, Usia: $umur" . " th <br>";
}
?>
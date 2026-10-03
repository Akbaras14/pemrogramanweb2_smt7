<?php
/*
 * Judul Materi : Latihan 2 - Do While
 * Nama         : Akbar Aditiya Sugianto
 * NIM          : 231011403729
 * Kelas        : 07 TPLM 004
 * Universitas  : Universitas Pamulang
 */

$i = 0;

echo 'This code will run at least once because i default value is 0.<br>';

do {

    echo 'i value is ' . $i . ', so code block will run. <br>';

    ++$i;

} while ($i < 10);

?>
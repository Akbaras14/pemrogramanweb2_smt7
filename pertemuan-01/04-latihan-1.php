<?php
/*
 * Judul Materi : Latihan 1 - Local dan Global Variable
 * Nama         : Akbar Aditiya Sugianto
 * NIM          : 231011403729
 * Kelas        : 07 TPLM 004
 * Universitas  : Universitas Pamulang
 */

$A = 123; // variable global
function Test()
{
    $A = "Test"; // variable local
    echo "Nilai A dalam fungsi = $A \n";
}
Test();
echo "Nilai A luar fungsi = $A \n";
?>
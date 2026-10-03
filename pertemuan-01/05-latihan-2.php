<?php
/*
 * Judul Materi : Latihan 2 - Global Variable
 * Nama         : Akbar Aditiya Sugianto
 * NIM          : 231011403729
 * Kelas        : 07 TPLM 004
 * Universitas  : Universitas Pamulang
 */

$A = 123; // variable global

function Test()
{
    global $A;

    echo "Nilai A dalam fungsi = $A \n";
}

Test();

echo "Nilai A luar fungsi = $A \n";

?>
<?php
/*
 * Judul Materi : Latihan 4 - Continue
 * Nama         : Akbar Aditiya Sugianto
 * NIM          : 231011403729
 * Kelas        : 07 TPLM 004
 * Universitas  : Universitas Pamulang
 */

for ($i = 1; $i < 11; $i++) {

    if ($i % 2 == 0) {
        continue;
    } else {
        echo $i;
    }
}

?>
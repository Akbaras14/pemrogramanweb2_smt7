<?php
/*
 * Judul Materi : Latihan 3 - Function dengan Parameter Default
 * Nama         : Akbar Aditiya Sugianto
 * NIM          : 231011403729
 * Kelas        : 07 TPLM 004
 * Universitas  : Universitas Pamulang
 */

function repeat($text, $num = 10)
{
    echo "<ol>\r\n";
    for ($i = 0; $i < $num; $i++) {
        echo "<li>$text </li>\r\n";
    }
    echo '</ol>';
}

repeat("I'm the best", 15);
repeat("You're the man");
?>

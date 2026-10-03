<?php
/*
 * Judul Materi : Latihan - Tabel Perkalian Menggunakan Looping
 * Nama         : Akbar Aditiya Sugianto
 * NIM          : 231011403729
 * Kelas        : 07 TPLM 004
 * Universitas  : Universitas Pamulang
 */
?>

<!DOCTYPE html>

<html>

<head>
    <title>Tabel Perkalian</title>
</head>

<body>

    <h2>Tabel Perkalian</h2>

    <table border="1" cellspacing="0" cellpadding="5">

        <tr>
            <th>Perkalian</th>

            <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<th>$i</th>";
        }
        ?>

        </tr>

        <?php

    for ($i = 1; $i <= 10; $i++) {

        echo "<tr>";

        echo "<th>$i</th>";

        for ($j = 1; $j <= 10; $j++) {

            $hasil = $i * $j;

            echo "<td>$hasil</td>";
        }

        echo "</tr>";
    }

    ?>

    </table>

</body>

</html>
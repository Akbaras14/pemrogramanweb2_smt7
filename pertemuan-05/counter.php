<?php
/*
 * Judul Materi : Latihan 4 - Counter Pengunjung
 * Nama         : Akbar Aditiya Sugianto
 * NIM          : 231011403729
 * Kelas        : 07 TPLM 004
 * Universitas  : Universitas Pamulang
 */

$nama_file = "counter.dat";

if (file_exists($nama_file)) {
    $berkas = fopen($nama_file, "r");
    $pencacah = (integer) trim(fgets($berkas, 255));
    fclose($berkas);
    $pencacah++;

} else {
    $pencacah = 1;
}
$berkas = fopen($nama_file, "w");
fputs($berkas, $pencacah);
fclose($berkas);
?>
<html>

<head>
    <title>Contoh Counter</title>
</head>

<body>
    <?php

print("Anda pengunjung ke-$pencacah <br>\n");
?>

</body>

</html>
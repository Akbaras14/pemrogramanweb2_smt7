<HTML>

<HEAD>
    <TITLE> Penggunaan In Array dengan Type Data </TITLE>
</HEAD>

<BODY>
    <?php
/*
 * Judul Materi : Latihan 10 - Penggunaan In Array dengan Type Data
 * Nama         : Akbar Aditiya Sugianto
 * NIM          : 231011403729
 * Kelas        : 07 TPLM 004
 * Universitas  : Universitas Pamulang
 */

$tipe = array('1.10', 5.0, 1.13);
if (in_array('5.0', $tipe, TRUE)) {
    echo "String \"5.0\" ada di dalam array";
} else {
    echo "String \"5.0\" tidak ada di dalam array";
}
echo "<br />";
if (in_array(1.13, $tipe, TRUE)) {
    echo "Bilangan 1.13 ada di dalam array";
} else {
    echo "Bilangan 1.13 tidak ada di dalam array";
}
?>
</BODY>

</HTML>
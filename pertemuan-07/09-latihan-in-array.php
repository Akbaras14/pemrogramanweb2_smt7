<HTML>

<HEAD>
    <TITLE> Penggunaan In Array </TITLE>
</HEAD>

<BODY>
    <?php
/*
 * Judul Materi : Latihan 9 - Penggunaan In Array
 * Nama         : Akbar Aditiya Sugianto
 * NIM          : 231011403729
 * Kelas        : 07 TPLM 004
 * Universitas  : Universitas Pamulang
 */

$program = array("HTML", "PHP", "CSS", "JavaScript");
print_r($program);
$cari = "HTML";
if (in_array($cari, $program)) {
    echo "Program Basis Web $cari ada di dalam array";
} else {
    echo "Program Basis Web $cari tidak ada di dalam array";
}
?>
</BODY>

</HTML>
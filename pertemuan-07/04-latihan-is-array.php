<HTML>

<HEAD>
    <TITLE> Penggunaan Is Array </TITLE>
</HEAD>

<BODY>
    <?php
/*
 * Judul Materi : Latihan 4 - Penggunaan Is Array
 * Nama         : Akbar Aditiya Sugianto
 * NIM          : 231011403729
 * Kelas        : 07 TPLM 004
 * Universitas  : Universitas Pamulang
 */

$var = array(1,2,3,4,5,6,7);
$scan = is_array($var);
if ($scan == false) {
    $status = "bukan";
} else {
$status = "";
}
echo "\$var = array(1,2,3,4,5,6,7)";
echo "<br>";
echo "Variabel \$var $status merupakan array";
?>
</BODY>

</HTML>
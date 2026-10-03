<HTML>

<HEAD>
    <TITLE> Penggunaan List </TITLE>
</HEAD>

<BODY>
    <?php
/*
 * Judul Materi : Latihan 5 - Penggunaan List
 * Nama         : Akbar Aditiya Sugianto
 * NIM          : 231011403729
 * Kelas        : 07 TPLM 004
 * Universitas  : Universitas Pamulang
 */

$program = array('Bobo','Doraemon','Spiderman');
list($Majalah, $Komik, $Film) = $program;
echo "Jenis Buku & Hiburan :";
echo "<br />";
echo "Cerpen : $Majalah";
echo "<br />";
echo "Cerita Bergambar : $Komik";
echo "<br />";
echo "Bioskop : $Film";
?>
</BODY>

</HTML>
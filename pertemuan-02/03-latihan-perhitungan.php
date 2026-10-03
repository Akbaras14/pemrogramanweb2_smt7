<?php
/*
 * Judul Materi : Latihan 3 - Perhitungan
 * Nama         : Akbar Aditiya Sugianto
 * NIM          : 231011403729
 * Kelas        : 07 TPLM 004
 * Universitas  : Universitas Pamulang
 */

$nilai1 = "";
$nilai2 = "";

$penjumlahan = null;
$pengurangan = null;
$perkalian = null;
$pembagian = null;
$modulus = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nilai1 = $_POST["nilai1"];
    $nilai2 = $_POST["nilai2"];

    $penjumlahan = $nilai1 + $nilai2;
    $pengurangan = $nilai1 - $nilai2;
    $perkalian = $nilai1 * $nilai2;

    if ($nilai2 != 0) {
        $pembagian = $nilai1 / $nilai2;
        $modulus = $nilai1 % $nilai2;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Latihan Perhitungan PHP</title>
</head>

<body>

    <h2>Latihan Perhitungan PHP</h2>

    <form method="POST" action="">

        <table>
            <tr>
                <td>Nilai Pertama</td>
                <td>:</td>
                <td>
                    <input type="number" name="nilai1" value="<?php echo $nilai1; ?>" required>
                </td>
            </tr>

            <tr>
                <td>Nilai Kedua</td>
                <td>:</td>
                <td>
                    <input type="number" name="nilai2" value="<?php echo $nilai2; ?>" required>
                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td>
                    <button type="submit">Hitung</button>
                </td>
            </tr>
        </table>

    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>

    <h3>Hasil Perhitungan</h3>

    <table border="1" cellspacing="0" cellpadding="5">

        <tr>
            <th>Operasi</th>
            <th>Perhitungan</th>
            <th>Hasil</th>
        </tr>

        <tr>
            <td>Penjumlahan</td>
            <td>
                <?php echo "$nilai1 + $nilai2"; ?>
            </td>
            <td>
                <?php echo $penjumlahan; ?>
            </td>
        </tr>

        <tr>
            <td>Pengurangan</td>
            <td>
                <?php echo "$nilai1 - $nilai2"; ?>
            </td>
            <td>
                <?php echo $pengurangan; ?>
            </td>
        </tr>

        <tr>
            <td>Perkalian</td>
            <td>
                <?php echo "$nilai1 x $nilai2"; ?>
            </td>
            <td>
                <?php echo $perkalian; ?>
            </td>
        </tr>

        <tr>
            <td>Pembagian</td>
            <td>
                <?php echo "$nilai1 / $nilai2"; ?>
            </td>
            <td>
                <?php
                    if ($nilai2 != 0) {
                        echo $pembagian;
                    } else {
                        echo "Tidak dapat dibagi dengan 0";
                    }
                    ?>
            </td>
        </tr>

        <tr>
            <td>Modulus</td>
            <td>
                <?php echo "$nilai1 % $nilai2"; ?>
            </td>
            <td>
                <?php
                    if ($nilai2 != 0) {
                        echo $modulus;
                    } else {
                        echo "Tidak dapat dihitung";
                    }
                    ?>
            </td>
        </tr>

    </table>

    <?php } ?>

</body>

</html>
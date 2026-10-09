<?php
/*
 * Judul Materi : Latihan 2 - Penggunaan UDF Aritmatika
 * Nama         : Akbar Aditiya Sugianto
 * NIM          : 231011403729
 * Kelas        : 07 TPLM 004
 * Universitas  : Universitas Pamulang
 */

function jumlah($A, $B)
{
    return $A + $B;
}

function kurang($A, $B)
{
    return $A - $B;
}

function kali($A, $B)
{
    return $A * $B;
}

function bagi($A, $B)
{
    return $B == 0 ? null : $A / $B;
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Contoh Penggunaan UDF</title>
</head>

<body>
    <form method="POST" action="">
        <label for="A">Masukkan Bilangan Pertama:</label><br>
        <input type="number" id="A" name="A" step="any" required><br>
        <label for="B">Masukkan Bilangan Kedua:</label><br>
        <input type="number" id="B" name="B" step="any" required><br>
        <input type="submit" value="hitung">
    </form>

    <?php
    if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST') {
        $A = filter_input(INPUT_POST, 'A', FILTER_VALIDATE_FLOAT);
        $B = filter_input(INPUT_POST, 'B', FILTER_VALIDATE_FLOAT);

        if ($A === false || $A === null || $B === false || $B === null
            || !is_finite($A) || !is_finite($B)) {
            echo '<p>Masukkan dua bilangan yang valid.</p>';
        } else {
            echo "<br>Bilangan Pertama : $A<br>Bilangan Kedua : $B<br><br>";
            echo 'Hasil Penjumlahan 2 buah bilangan<br>';
            printf('Penjumlahan antara : %s + %s = %s<br><br>', $A, $B, jumlah($A, $B));
            echo 'Hasil Pengurangan 2 buah bilangan<br>';
            printf('Pengurangan antara : %s - %s = %s<br><br>', $A, $B, kurang($A, $B));
            echo 'Hasil Perkalian 2 buah bilangan<br>';
            printf('Perkalian antara : %s * %s = %s<br><br>', $A, $B, kali($A, $B));
            echo 'Hasil Pembagian 2 buah bilangan<br>';
            $bagibil = bagi($A, $B);
            if ($bagibil === null) {
                echo 'Pembagian dengan nol tidak dapat dilakukan.<br><br>';
            } else {
                printf('Pembagian antara : %s / %s = %s<br><br>', $A, $B, $bagibil);
            }
        }
    }
    ?>
</body>

</html>

<?php
include 'koneksi.php';

$jumlah_data = $_POST['jumlah_data'];
$kode_pendf = $_POST['kode_pendf'];
$nama_pendf = $_POST['nama_pendf'];
$jns_kel = $_POST['jns_kel'];
$ttl = $_POST['ttl'];
$asal_sekolah = $_POST['asal_sekolah'];
$pekerjaan_ortu = $_POST['pekerjaan_ortu'];
$mat = $_POST['mat'];
$b_ingr = $_POST['b_ingr'];
$umum = $_POST['umum'];

for ($i = 0; $i < $jumlah_data; $i++) {
    $k_pendf = $kode_pendf[$i];
    $nama    = $nama_pendf[$i];
    $jk      = $jns_kel[$i];
    $tgl     = $ttl[$i];
    $sekolah = $asal_sekolah[$i];
    $pek     = $pekerjaan_ortu[$i];
    $m       = $mat[$i];
    $bi      = $b_ingr[$i];
    $um      = $umum[$i];

    $rata = ($m + $bi + $um) / 3;

    if ($rata >= 70) {
        $keterangan = "Lulus";
    } elseif ($rata >= 60 && $rata < 70) {
        $keterangan = "Cadangan";
    } else {
        $keterangan = "Tidak Lulus";
    }

    $stmt = mysqli_prepare($koneksi, "INSERT INTO pendaftaran (kode_pendf, nama_pendf, jns_kel, ttl, asal_sekolah, pekerjaan_ortu, mat, b_ingr, umum, rata_rata, keterangan) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "ssssssiiids", $k_pendf, $nama, $jk, $tgl, $sekolah, $pek, $m, $bi, $um, $rata, $keterangan);
    mysqli_stmt_execute($stmt);
}

$query_tampil = mysqli_query($koneksi, "SELECT * FROM pendaftaran");
$jumlah_pendaftar = mysqli_num_rows($query_tampil);
$jumlah_lulus = 0;
$jumlah_cadangan = 0;
$jumlah_tidak_lulus = 0;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>YAYASAN SASMITA JAYA</h2>
    <h2>UNIVERSITAS PAMULANG</h2>
    <h3>FAKULTAS ILMU KOMPUTER - TEKNIK INFORMATIKA S-1</h3>
    <hr>

    <h4 style="color: green;">DATA BERHASIL DISIMPAN KE DATABASE!</h4>
    <h4>TABEL DATA PENDAFTARAN MAHASISWA BARU</h4>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Kode</th>
                <th>Kode Pendf.</th>
                <th>Nama Pendft.</th>
                <th>Jns Kel</th>
                <th>TTL</th>
                <th>Asal Sekolah</th>
                <th>Pek. Ortu</th>
                <th>Mat</th>
                <th>B. Ingr</th>
                <th>Umum</th>
                <th>Rata-Rata</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($row = mysqli_fetch_assoc($query_tampil)) {
                $k_pendf = $row['kode_pendf'];
                $char1 = strtoupper(substr($k_pendf, 0, 1));
                $char2 = substr($k_pendf, 1, 1);
                $kode_tampil = $char1 . " - Gel. " . $char2;

                if ($row['keterangan'] == "Lulus") {
                    $jumlah_lulus++;
                } elseif ($row['keterangan'] == "Cadangan") {
                    $jumlah_cadangan++;
                } else {
                    $jumlah_tidak_lulus++;
                }

                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . $kode_tampil . "</td>";
                echo "<td>" . htmlspecialchars($row['kode_pendf']) . "</td>";
                echo "<td>" . htmlspecialchars($row['nama_pendf']) . "</td>";
                echo "<td>" . htmlspecialchars($row['jns_kel']) . "</td>";
                echo "<td>" . htmlspecialchars($row['ttl']) . "</td>";
                echo "<td>" . htmlspecialchars($row['asal_sekolah']) . "</td>";
                echo "<td>" . htmlspecialchars($row['pekerjaan_ortu']) . "</td>";
                echo "<td>" . $row['mat'] . "</td>";
                echo "<td>" . $row['b_ingr'] . "</td>";
                echo "<td>" . $row['umum'] . "</td>";
                echo "<td>" . number_format($row['rata_rata'], 2) . "</td>";
                echo "<td><b>" . $row['keterangan'] . "</b></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <div class="clearfix">
        <table class="summary-table">
            <tr>
                <th colspan="2">REKAPITULASI PENDAFTARAN</th>
            </tr>
            <tr>
                <td>JUMLAH PENDAFTAR</td>
                <td><b><?php echo $jumlah_pendaftar; ?></b></td>
            </tr>
            <tr>
                <td>JUMLAH PESERTA LULUS</td>
                <td><b><?php echo $jumlah_lulus; ?></b></td>
            </tr>
            <tr>
                <td>JUMLAH PESERTA CADANGAN</td>
                <td><b><?php echo $jumlah_cadangan; ?></b></td>
            </tr>
            <tr>
                <td>JUMLAH TIDAK LULUS</td>
                <td><b><?php echo $jumlah_tidak_lulus; ?></b></td>
            </tr>
        </table>
    </div>

    <br>
    <div style="text-align: center;">
        <a href="index.php" class="btn">INPUT DATA KEMBALI</a>
    </div>
</div>
</body>
</html>
<?php 
include 'koneksi.php';
$jumlah_data = isset($_POST['jumlah_data']) ? $_POST['jumlah_data'] : 1;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Detail Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>YAYASAN SASMITA JAYA</h2>
    <h2>UNIVERSITAS PAMULANG</h2>
    <h3>FAKULTAS ILMU KOMPUTER - TEKNIK INFORMATIKA S-1</h3>
    <hr>

    <h4>FORM INPUT DATA PENDAFTARAN MAHASISWA BARU</h4>
    <form method="POST" action="proses.php">
        <input type="hidden" name="jumlah_data" value="<?php echo $jumlah_data; ?>">

        <?php for ($i = 1; $i <= $jumlah_data; $i++): ?>
            <div class="student-box">
                <h4>Data Pendaftar ke-<?php echo $i; ?></h4>
                <div class="form-group">
                    <label>KODE PENDAFTARAN</label>
                    <input type="text" name="kode_pendf[]" placeholder="Contoh: A2-101-9" required>
                </div>
                <div class="form-group">
                    <label>NAMA PENDAFTAR</label>
                    <input type="text" name="nama_pendf[]" required>
                </div>
                <div class="form-group">
                    <label>JENIS KELAMIN</label>
                    <input type="radio" name="jns_kel[<?php echo $i-1; ?>]" value="Laki-laki" required> Laki-laki
                    <input type="radio" name="jns_kel[<?php echo $i-1; ?>]" value="Perempuan" required> Perempuan
                </div>
                <div class="form-group">
                    <label>TTL</label>
                    <input type="text" name="ttl[]" placeholder="Kota, Tanggal-Bulan-Tahun" required>
                </div>
                <div class="form-group">
                    <label>ASAL SEKOLAH</label>
                    <input type="text" name="asal_sekolah[]" required>
                </div>
                <div class="form-group">
                    <label>PEKERJAAN ORTU</label>
                    <input type="text" name="pekerjaan_ortu[]" required>
                </div>
                <div class="form-group">
                    <label>NILAI MATEMATIKA</label>
                    <input type="number" name="mat[]" min="0" max="100" required>
                </div>
                <div class="form-group">
                    <label>NILAI BAHASA INGGRIS</label>
                    <input type="number" name="b_ingr[]" min="0" max="100" required>
                </div>
                <div class="form-group">
                    <label>NILAI UMUM</label>
                    <input type="number" name="umum[]" min="0" max="100" required>
                </div>
            </div>
        <?php endfor; ?>

        <div class="form-group">
            <input type="submit" value="SIMPAN KE DATABASE">
            <a href="index.php" class="btn">BATAL</a>
        </div>
    </form>
</div>
</body>
</html>
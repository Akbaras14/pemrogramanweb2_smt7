<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>UTS Pemrograman WEB II - Universitas Pamulang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>YAYASAN SASMITA JAYA</h2>
    <h2>UNIVERSITAS PAMULANG</h2>
    <h3>FAKULTAS ILMU KOMPUTER - TEKNIK INFORMATIKA S-1</h3>
    <p style="text-align: center; font-size: 13px; color: #666;">Jl. Surya Kencana No. 1, Pamulang Barat - Tangerang Selatan, Banten</p>
    <hr>

    <h4>FORM INPUT JUMLAH PENDAFTARAN</h4>
    <form method="POST" action="form_detail.php">
        <div class="form-group">
            <label>JUMLAH DATA</label>
            <input type="number" name="jumlah_data" min="1" required>
        </div>
        <div class="form-group" style="margin-left: 200px;">
            <input type="submit" value="SUBMIT">
            <input type="reset" value="BATAL">
        </div>
    </form>
</div>
</body>
</html>
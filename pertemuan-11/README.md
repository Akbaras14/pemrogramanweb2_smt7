<h1 align="center">Pertemuan 11 — Database Lanjutan</h1>
<p align="center">
  <img src="../assets/logo-unpam.jpg" width="180" alt="Logo Universitas Pamulang">
</p>

<p align="center">
  <strong>Akbar Aditiya Sugianto</strong><br>
  NIM 231011403729<br>
  Kelas 07 TPLM 004<br>
  Universitas Pamulang
</p>

<p align="center">
  Mata Kuliah Pemrograman Web 2<br>
  Program Studi Teknik Informatika<br>
  Universitas Pamulang
</p>


## Source Code dari PPT

Latihan 1 sampai 7, `form.php`, dan `insert3.php` mengikuti contoh pada PPT Pertemuan 11, termasuk fungsi `mysql_*` dan koneksi pada masing-masing file. Identitas dan penamaan file mengikuti pertemuan lainnya.

Tag pembuka diseragamkan menjadi `<?php`; tanda kutip yang rusak dan sintaks indeks array pada PPT diperbaiki agar kode dapat diparse. Tidak ditambahkan koneksi bersama, validasi, prepared statement, atau implementasi soal buku tamu.

## Menjalankan

Gunakan lingkungan PHP lama yang masih menyediakan ekstensi `mysql` (misalnya PHP 5.6). Kode ini tidak berjalan pada PHP 7/8 karena fungsi `mysql_*` sudah dihapus.

Jalankan latihan 02 dan 03 terlebih dahulu untuk membuat database `lat_dbase` dan tabel `tbl_mhs`, kemudian latihan 04 sampai 07 atau `form.php`. Koneksi sesuai PPT menggunakan `localhost`, user `root`, dan password kosong.

Contoh input dari PPT memasukkan data POST langsung ke SQL; gunakan sebagai latihan lokal, bukan untuk aplikasi publik.

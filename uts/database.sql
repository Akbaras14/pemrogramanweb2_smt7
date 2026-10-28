CREATE DATABASE IF NOT EXISTS calon_mhs;
USE calon_mhs;

CREATE TABLE IF NOT EXISTS pendaftaran (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kode_pendf VARCHAR(20) NOT NULL,
    nama_pendf VARCHAR(100) NOT NULL,
    jns_kel VARCHAR(15) NOT NULL,
    ttl VARCHAR(100) NOT NULL,
    asal_sekolah VARCHAR(100) NOT NULL,
    pekerjaan_ortu VARCHAR(100) NOT NULL,
    mat INT NOT NULL,
    b_ingr INT NOT NULL,
    umum INT NOT NULL,
    rata_rata DECIMAL(5,2) NOT NULL,
    keterangan VARCHAR(20) NOT NULL,
    tanggal_input TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
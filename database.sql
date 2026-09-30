CREATE DATABASE IF NOT EXISTS tokoku;
USE tokoku;

CREATE TABLE menu (
    idMenu INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    kategori VARCHAR(50),
    harga INT,
    stok INT
);

CREATE TABLE transaksi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    idMenu INT,
    jumlah INT,
    total INT,
    tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO menu (nama, kategori, harga, stok) VALUES
('Buku Tulis', 'Alat Tulis', 5000, 100),
('Buku Gambar', 'Alat Tulis', 7000, 50),
('Pulpen', 'Alat Tulis', 3000, 70),
('Pensil', 'Alat Tulis', 2000, 80),
('Penghapus', 'Alat Tulis', 1500, 60);

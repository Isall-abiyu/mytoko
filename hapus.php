<?php
include 'db.php';

$id = $_GET['id'];
// Cek apakah transaksi valid
$cek = $koneksi->query("SELECT * FROM transaksi WHERE id = $id")->fetch_assoc();

if ($cek) {
  // Kembalikan stok
  $koneksi->query("UPDATE menu SET stok = stok + {$cek['jumlah']} WHERE idMenu = {$cek['idMenu']}");
  // Hapus transaksi
  $koneksi->query("DELETE FROM transaksi WHERE id = $id");
}

header("Location: laporan_penjualan.php");
?>

<?php
include 'db.php';

$id = $_POST['idMenu'];
$jumlah = $_POST['jumlah'];

$barang = $koneksi->query("SELECT * FROM menu WHERE idMenu = $id")->fetch_assoc();

if ($barang && $barang['stok'] >= $jumlah) {
    $total = $jumlah * $barang['harga'];
    $koneksi->query("INSERT INTO transaksi (idMenu, jumlah, total) VALUES ($id, $jumlah, $total)");
    $koneksi->query("UPDATE menu SET stok = stok - $jumlah WHERE idMenu = $id");
    header("Location: index.php?sukses=1");
} else {
    echo "Stok tidak cukup!";
}
?>

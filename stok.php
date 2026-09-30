<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stok Barang</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<script>document.body.classList.add('fade-in');</script>

<nav>
  <a href="index.php">🛒 Form Pembelian</a>
  <a href="laporan_penjualan.php">📊 Laporan</a>
  <a href="stok.php">📦 Stok Barang</a>
</nav>

<h1>📦 Laporan Stok Barang</h1>
<button onclick="window.print()">🖨 Cetak</button>

<div class="table-wrapper">
<table>
  <tr><th>ID</th><th>Nama Barang</th><th>Kategori</th><th>Harga (Rp)</th><th>Stok</th></tr>
  <?php
    $result = $koneksi->query("SELECT * FROM menu");
    while ($row = $result->fetch_assoc()) {
      echo "<tr>
              <td>{$row['idMenu']}</td>
              <td>{$row['nama']}</td>
              <td>{$row['kategori']}</td>
              <td>" . number_format($row['harga']) . "</td>
              <td>{$row['stok']}</td>
            </tr>";
    }
  ?>
</table>
</div>

</body>
</html>

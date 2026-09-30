<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan Penjualan</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<script>document.body.classList.add('fade-in');</script>

<nav>
  <a href="index.php">🛒 Form Pembelian</a>
  <a href="laporan_penjualan.php">📊 Laporan</a>
  <a href="stok.php">📦 Stok Barang</a>
</nav>

<h1>📊 Laporan Penjualan</h1>
<button onclick="window.print()">🖨 Cetak</button>

<div class="table-wrapper">
<table>
  <tr>
    <th>Tanggal</th><th>Barang</th><th>Jumlah</th><th>Total (Rp)</th><th>Aksi</th>
  </tr>
  <?php
    $result = $koneksi->query("SELECT t.*, m.nama FROM transaksi t JOIN menu m ON t.idMenu = m.idMenu ORDER BY t.tanggal DESC");
    while ($row = $result->fetch_assoc()) {
      echo "<tr>
              <td>{$row['tanggal']}</td>
              <td>{$row['nama']}</td>
              <td>{$row['jumlah']}</td>
              <td>" . number_format($row['total']) . "</td>
              <td>
                <a href='hapus.php?id={$row['id']}' onclick='return confirm(\"Yakin ingin hapus?\")'>🗑 Hapus</a>
              </td>
            </tr>";
    }
  ?>
</table>
</div>

</body>
</html>

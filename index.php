<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transaksi Pembelian</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<script>document.body.classList.add('fade-in');</script>

<nav>
  <a href="index.php">🛒 Form Pembelian</a>
  <a href="laporan_penjualan.php">📊 Laporan</a>
  <a href="stok.php">📦 Stok Barang</a>
</nav>

<h1>🛒 Pembelian Barang</h1>
<?php if (isset($_GET['sukses'])) echo "<p class='sukses'>✅ Transaksi berhasil!</p>"; ?>

<form action="proses.php" method="post" class="form-box">
  <label for="barang">Pilih Barang:</label>
  <select name="idMenu" required>
    <option value="">--Pilih--</option>
    <?php
      $result = $koneksi->query("SELECT * FROM menu");
      while ($row = $result->fetch_assoc()) {
        echo '<option value="' . $row['idMenu'] . '">' .
             $row['nama'] . ' - Rp' . number_format($row['harga']) .
             ' (Stok: ' . $row['stok'] . ')' . '</option>';
      }
    ?>
  </select>
  <label>Jumlah:</label>
  <input type="number" name="jumlah" min="1" required>
  <button type="submit">Beli</button>
</form>

</body>
</html>

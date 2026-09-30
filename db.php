<?php
$koneksi = new mysqli("sql206.infinityfree.com", "if0_42256022", "Isal730037i", "if0_42256022_mytoko");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
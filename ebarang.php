<?php
include "koneksi.php";
$id_barang = $_GET['id_barang'];
$nama_barang = $_POST['nama_barang'];
$link = $_POST['link'];
$harga_beli = $_POST['harga_beli'];
$jumlah_beli = $_POST['jumlah_beli'];
$harga_jual = $_POST['harga_jual'];
$stock_terjual = $_POST['stock_terjual'];

mysqli_query($koneksi, "UPDATE barang SET nama_barang='$nama_barang', link='$link', harga_beli='$harga_beli', jumlah_beli='$jumlah_beli', harga_jual='$harga_jual', stock_terjual='$stock_terjual' WHERE id_barang='$id_barang' ");

header("location:index.php?pesan=update");
?>
<?php
    include 'koneksi.php';

    //menangkap sebuah data dari form
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $link = $_POST['link'];
    $harga_beli = $_POST['harga_beli'];
    $jumlah_beli = $_POST['jumlah_beli'];
    $harga_jual = $_POST['harga_jual'];
    $stock_terjual = $_POST['stock_terjual'];

    mysqli_query($koneksi, "insert into barang value('$id_barang','$nama_barang', '$link', '$harga_beli','$jumlah_beli', '$harga_jual', '$stock_terjual')");

    header("location:index.php");
?>
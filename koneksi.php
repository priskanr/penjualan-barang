<?php
   $koneksi = mysqli_connect("localhost", "root", "", "penjualanjava");

   //cek koneksi
   if(mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_errno();
   }


   function tampilData($query) {
      global $koneksi;
      $row = [];
      $query_db = mysqli_query($koneksi, $query);
      while ($rows = mysqli_fetch_assoc($query_db)) {
         $row[] = $rows;
      }

      return $row;
   }
   
?>
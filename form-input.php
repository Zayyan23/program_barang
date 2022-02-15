<?php
include 'koneksi.php';
    if(isset($_POST['proses'])){
        mysqli_query($koneksi, "INSERT INTO produk set
        id = '$_POST[id]',
        nama_produk = '$_POST[nama_produk]',
        harga_produk = '$_POST[harga_produk]',
        jumlah_produk = '$_POST[jumlah_produk]'");
        
        echo "data barang baru telah tersimpan";
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Input Data</title>
</head>
<body>
    <h2>Input Data Produk</h2>
    <a href="index.php" style="padding:0.4% 0.8%;background-color:blue;color:white;border-radius:2px;text-decoration:none">Data Produk</a><br><br>
   <form action="" methode="POST">
       <table>
           <tr>
              <td>id</td>
              <td>:</td>
              <td><Input type="text" name="id" placeholder="id" required></td>
           </tr>
           <tr>
              <td>Nama produk</td>
              <td>:</td>
              <td><Input type="text" name="nama_produk" placeholder="nama_produk" required></td>
           </tr>
           <tr>
              <td>Harga produk</td>
              <td>:</td>
              <td><Input type="text" name="harga_produk" placeholder="harga-produk" required></td>
           </tr>
           <tr>
              <td>Jumlah produk</td>
              <td>:</td>
              <td><Input type="jumlah_produk" name="jumlah_produk" placeholder="jumlah_produk" required></td>
           </tr>
           <tr>
               <td></td>
               <td></td>
              <td><Input type="submit" value="simpan" name="proses"></td>
           </tr>
        </table>
   </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman produk</title>
</head>
<body>
    <h2>Data Produk</h2>
    <a href="form-input.php" style="padding:0.4% 0.8%;background-color:blue;color:white;border-radius:2px;text-decoration:none">Tambah Data Produk</a><br><br>
    <table border="1" cellspacing"0" width="50%">
    <tr style="text-align:center;font-weight:bold;background-color:yellow">
        <td>No</td>
        <td>id</td>
        <td>Nama produk</td>
        <td>Harga produk</td>
        <td>Jumlah produk</td>
        <td>Opsi</td>
    </tr>
    <?php
    include 'koneksi.php';
    $no = 1;
    $select = mysqli_query($conn,"SELECT * FROM tb_produk");
    if(mysqli_num_rows($select) > 0){
    while($hasil = mysqli_fetch_array($select)){
    ?>
    <tr style="text-align:center;">
        <td><?php echo $no++ ?></td>
        <td><?php echo $hasil['id'] ?></td>
        <td><?php echo $hasil['nama_produk'] ?></td>
        <td><?php echo $hasil['harga_produk'] ?></td>
        <td><?php echo $hasil['jumlah_produk'] ?></td>
        <td>
            <a href="form_edit.php?nis=<?php echo $hasil['id'] ?>">Edit</a> ||
            <a href="delete.php?nis=<?php echo $hasil['id'] ?>">Hapus</a>
        </td>
    </tr>
    <?php }}else{ ?>
    <tr>
        <td colspan="7" align="center">Data Kosong</td>
    </tr>
    <?php } ?>
    </table>
</body>
</html>
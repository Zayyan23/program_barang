<?php
include 'koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM tb_produk WHERE id = '".$_GET['id']."'");
$result = mysqli_fetch_array($data_edit);
?>
<?php
    include 'koneksi.php';
    if(isset($_POST['edit'])){
        $update = mysqli_query($conn, "UPDATE tb_produk SET nama_produk = '".$_POST['nama']."',
             harga produk = '".$_POST['harga']."', jumlah_produk = '".$_POST['jumlah']."',
             WHERE id = '".$_GET['id']."'");
        if($update){
            echo 'berhasil edit';
        }else{
            echo 'gagal edit';
        }               
    }                            
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Data</title>
</head>
<body>
    <h2>Edit Data Produk</h2>
    <a href="index.php" style="padding:0.4% 0.8%;background-color:blue;color:white;border-radius:2px;text-decoration:none">Data Produk</a><br><br>
   <form action="edit.php" methode="POST">
       <table>
           <tr>
              <td>id</td>
              <td>:</td>
              <td><Input type="text" name="id" value="<?php echo $result['id'] ?>" required></td>
           </tr>
           <tr>
              <td>Nama produk</td>
              <td>:</td>
              <td><Input type="text" name="nama_produk" value="<?php echo $result['nama_produk'] ?>" required></td>
           </tr>
           <tr>
              <td>Harga produk</td>
              <td>:</td>
              <td><Input type="text" name="harga_produk" value="<?php echo $result['harga_produk'] ?>" required></td>
           </tr>
           <tr>
              <td>Jumlah produk</td>
              <td>:</td>
              <td><Input type="text" name="jumlah_produk" value="<?php echo $result['jumlah_produk'] ?>" required></td>
           </tr>
           <tr>
              <td></td>
              <td></td>
              <td><Input type="submit" name="edit" value="simpan" required></td>
           </tr>
        </table>
    </form>
</body>
</html>
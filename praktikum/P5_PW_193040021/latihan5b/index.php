<?php
    require 'php/functions.php';

    $barang = query("SELECT * FROM elektronik");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan5c</title>
    <style>
        table{
            border: 1px solid black;
        }
        td, h2{
            text-align: center;
        }
        img{
            height: 190px;
        }
    </style>
</head>
<body>
    <h1>ELECTRONIC BERKAH</h1>
    <table border="1" cellpadding="3" cellspacing="0">
    <link rel="stylesheet" href="assets/css/style.css">
        <tr>
          <th>No.</th>
          <th>Foto Barang</th>
          <th>Nama Barang</th>
          <th>Warna</th>
          <th>Stok Tersedia</th>
          <th>Harga (Rp.)</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach($barang as $e) :?>
         <tr>
             <td align="center"><?=$i; ?></td>
             <td align="center"><img src="assets/img/<?=$e["foto"]; ?>"></td>
             <td align="center"><?=$e["nama"]; ?></td>
             <td align="center"><?=$e["warna"]; ?></td>
             <td align="center"><?=$e["stok"]; ?></td>
             <td align="center"><?=$e["harga"]; ?></td>
         </tr>
         <?php $i++;?>
        <?php endforeach; ?>
    </table>
</body>
</html>
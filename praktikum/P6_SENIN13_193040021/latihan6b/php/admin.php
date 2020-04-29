<?php
require 'functions.php';

$barang = query("SELECT * FROM elektronik");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <style>
    body {
      background: linear-gradient(to right, #f05053 30%, #e1eec3);
    }

    img {
      height: 130px;

    }

    table {
      text-align: center;
    }

    button {
      background: red;
      color: white;
      font-size: 13px;
    }
  </style>
</head>

<body>
  <table border="1" cellpadding="13" cellspacing="1">
    <tr>
      <th>#</th>
      <th>Opsi</th>
      <th>Foto</th>
      <th>Nama</th>
      <th>Warna</th>
      <th>Stok</th>
      <th>Harga</th>
    </tr>
    <div>
      <a href="tambah.php"><button>Tambah Data</button></a>
    </div>
    <?php $i = 1; ?>
    <?php foreach ($barang as $e) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href=""><button>Ubah</button></a>
          <a href="hapus"><button>Hapus</button></a>
        </td>
        <td><img src="../assets/img/<?= $e['foto']; ?>" </td> <td><?= $e['nama']; ?></td>
        <td><?= $e['warna']; ?></td>
        <td><?= $e['stok']; ?></td>
        <td><?= $e['harga']; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</body>

</html>
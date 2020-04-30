<?php
require 'functions.php';


// ketika tombol cari diklik
if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $barang = query("SELECT * FROM elektronik WHERE
                    nama LIKE '%$keyword%' OR
                    warna LIKE '%$keyword%' OR
                    stok LIKE '%$keyword%' OR
                    harga LIKE '%$keyword%' ");
} else {
  $barang = query("SELECT * FROM elektronik");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <style>
    body {
      background: linear-gradient(to right, #FA8072, #B0C4DE, #FFA07A, #E6E6FA, #FFB6C1);
    }

    img {
      height: 140px;
      border: 2px solid orangered;
    }

    button {
      background: orangered;
      color: white;
      font-size: 13px;
    }

    th {
      background: linear-gradient(to right, #FA8072, #B0C4DE, #FFA07A, #E6E6FA, #FFB6C1);
    }
  </style>
</head>

<body>
  <form action="" method="POST">
    <input type="text" name="keyword" size="90" placeholder="masukan keyword pencarian.." autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form>
  <br>

  <div class="add">
    <a href="tambah.php"><button>Tambah Data</button></a>
  </div>
  <br>

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

    <?php if (empty($barang)) : ?>
      <tr>
        <td colspan="7">
          <h1 style="color: red; font-style: italic;">Data tidak ditemukan!</h1>
        </td>
      </tr>
    <?php endif; ?>
    <div>
      <a href="ubah.php?id=<?= $e['id'] ?>" onclick="return confirm('Ubah Data??')"></a>
      <a href="hapus.php?id=<?= $e['id'] ?>" onclick="return confirm('Hapus Data??')"></a>
    </div>
    <?php $i = 1; ?>
    <?php foreach ($barang as $e) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href=""><button>Ubah</button></a>
          <a href=""><button>Hapus</button></a>
        </td>
        <td><img src="../assets/img/<?= $e['foto']; ?>"> </td>
        <td><?= $e['nama']; ?></td>
        <td><?= $e['warna']; ?></td>
        <td><?= $e['stok']; ?></td>
        <td><?= $e['harga']; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</body>

</html>
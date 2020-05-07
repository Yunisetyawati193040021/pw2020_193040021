<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

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
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!-- my CSS -->
  <link rel="stylesheet" type="text/css" href="../css/admin.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin</title>
</head>

<body>
  <div class="logout">
    <a href="logout.php"><button>Logout</button></a>
  </div>
  <br>

  <div class="add">
    <a href="tambah.php"><button>Tambah Data</button></a>
  </div>
  <br>
  <form action="" method="POST">
    <input type="text" name="keyword" size="90" placeholder="masukan keyword pencarian.." autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form>


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
    <?php $i = 1; ?>
    <br>
    <?php foreach ($barang as $e) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href="ubah.php?id=<?= $e['id'] ?>" onclick="return confirm('Ubah Data??')"><button>Ubah</button></a>
          <a href="hapus.php?id=<?= $e['id'] ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
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
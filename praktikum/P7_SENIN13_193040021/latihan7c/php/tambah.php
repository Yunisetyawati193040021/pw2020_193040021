<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'admin.php';
          </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

  <!-- my CSS -->
  <link rel="stylesheet" type="text/css" href="../css/tambah.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Tambah Data Elektronik</title>
</head>

<body>
  <h3>Form Tambah Data</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label for="nama">Nama :</label><br>
        <input type="text" name="nama" id="nama" required><br><br>
      </li>
      <li>
        <label for="warna">Warna :</label><br>
        <select name="warna" id="warna" required>
          <option value="">----------- Pilih Warna -----------</option>
          <option value="Black">Black</option>
          <option value="White">White</option>
          <option value="Blue">Blue</option>
          <option value="Red">Red</option>
          <option value="Gold">Gold</option>
          <option value="Blue-Grey">Blue-Grey</option>
          <option value="Grey">Grey</option>
          <option value="Lightblue">Lightblue</option>
          <option value="Dark-Blue">Dark-Blue</option>
          <option value="Pink-White">Pink-White</option>
        </select>
      </li>
      <li>
        <label for="stok">Stok :</label><br>
        <input type="text" name="stok" id="stok" required><br><br>
      </li>
      <li>
        <label for="harga">Harga :</label><br>
        <input type="text" name="harga" id="harga" required><br><br>
      </li>
      <br>
      <button type="submit" name="tambah">Tambah Data!</button>
      <button type="submit">
        <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>
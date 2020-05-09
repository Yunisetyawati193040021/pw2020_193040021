<?php

if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];

$barang = query("SELECT * FROM elektronik WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!-- my CSS -->
    <link rel="stylesheet" type="text/css" href="../css/detail.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>detail 6d</title>
</head>

<body>
    <div class="container">
        <div class="foto">
            <img src="assets/img/<?= $barang["foto"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><img src="../assets/img/<?= $barang["foto"] ?>"></p>
            <p>Nama : <?= $barang["nama"]; ?></p>
            <p>Warna : <?= $barang["warna"]; ?></p>
            <p>Stok : <?= $barang["stok"]; ?></p>
            <p>Harga : RP.<?= $barang["harga"]; ?></p>
        </div>
        <button class="tombol-kembali"><a href="../index.php">Kembali</button>
    </div>
</body>

</html>
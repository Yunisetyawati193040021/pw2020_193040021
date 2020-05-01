<?php

require 'php/functions.php';

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
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>index 6d</title>
</head>

<body>
    <h1>
        <center>LIST NAMA BARANG</center>
    </h1>
    <form action="" method="POST">
        <input type="text" name="keyword" size="90" placeholder="masukan keyword pencarian.." autocomplete="off" autofocus>
        <button type="submit" name="cari">Cari!</button>
    </form>
    <div class="container">
        <?php if (empty($barang)) : ?>
            <h1 style="color: red; font-style: italic;">Data tidak ditemukan!</h1>
        <?php else : ?>
        <?php foreach ($barang as $e) : ?>
                <div class="foto">
                    <a href="php/detail.php?id=<?= $e['id'] ?>">
                        <img src="assets/img/<?= $e["foto"] ?>" class="responsive-img materialboxed" width=500>
                    </a>
                </div>
                <div class="nama">
                    <a href="php/detail.php?id=<?= $e['id'] ?>">
                        <?= $e["nama"] ?>
                    </a>
                </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</body>

</html>
<?php

require 'functions.php';

$id = $_GET['id'];

$barang = query("SELECT * FROM elektronik WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail 6d</title>
    <style>
        .container {
            width: 300px;
            height: 520px;
            margin: auto;
            border: 50px solid #845539;
            background-color: #CC9966;
            padding: 20px 20px 20px 20px;
            font-family: arial;
            font-size: 20px;
        }

        a:link {
            color: #000000;
        }

        a:hover {
            text-decoration: none;
            color: #D2691E;
        }

        a:active {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
            <div class="foto">
                <ul>
                    <li><img src="assets/img/<?= $e['foto']; ?>" alt=""></li>
                    <li>Nama : <?= $e['nama']; ?></li>
                    <li>Warna : <?= $e['warna']; ?></li>
                    <li>Stok : <?= $e['stok']; ?></li>
                    <li>Harga : <?= $e['harga']; ?></li>
                </ul>

            </div>
        <button class="tombol-kembali"><a href="../index.php">Kembali</button>
    </div>
</body>

</html>
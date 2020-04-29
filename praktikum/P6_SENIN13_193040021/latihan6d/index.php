<?php

require 'php/functions.php';

$elektronik = query("SELECT * FROM elektronik");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>index 6d</title>

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
    <h1>
        <center>LIST NAMA BARANG</center>
    </h1>
    <div class="container">
        <?php foreach ($elektronik as $e) : ?>
            <div class="nama">
                <a href="php/detail.php?id=<?= $e['id'] ?>">
                <?= $e["nama"] ?>
                </a>
            </div>
        <?php endforeach; ?>
    </div>

</body>

</html>
<?php
$Pemainbolaterkenal = [
    "Cristian Ronaldo" => "Juventus",
    "Lionel Messi" => "Barcelona",
    "Luca Modric" => "Real Madrid",
    "Mohammad Salah" => "Liverpool",
    "Neymar Jr" => "Paris Saint Germain",
    "Sadio Mane" => "Liverpool",
    "Ziatan Ibrahimovic" => "Ac Milan",
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associative</title>
    <style>
        tabel{
            border: 1px solid black;
        }
        td
    </style>
</head>
<body>
    <h4>Daftar Pemain Bola Terkenal dan Clubnya</h4>
    <table>
        <?php foreach ($Pemainbolaterkenal as $nama => $club) :?>
            <tr>
                <td><b><?= "$nama";?></td>
                <td>:</td>
                <td><?= "$club" ?></td>
            </tr>
            <?php endforeach ?>
    </table>
</body>
<br></br>
    <tr>
        <h3><a href="index.php">Back</a></h3>
    </tr>
</html>
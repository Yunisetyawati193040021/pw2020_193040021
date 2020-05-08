<?php
    $Pemainbolaterkenal = ["Mohammad Salah", "Cristiano Ronaldo","Lionel Messi","Zlatan Ibrahimovic", "Neymar Jr"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan4b</title>
</head>
<body>
   <h4>Daftar Pemain bola terkenal</h4>
    <ol>
        <?php foreach ($Pemainbolaterkenal as $nama):?>
            <li><?= $nama ?></li>
        <?php endforeach; ?>
    </ol>

    <?php
        $Pemainbolaterkenal[]="Luca Modric";
        $Pemainbolaterkenal[]="Sadio Mane";
        sort($Pemainbolaterkenal)
    ?>

   <h4>Daftar Pemain bola terbaru</h4>
   <ol>
        <?php foreach ($Pemainbolaterkenal as $nama): ?>
            <li><?php echo $nama; ?></li>
        <?php endforeach; ?>
    </ol>
   </body>
   <br></br>
    <tr>
        <h3><a href="index.php">Back</a></h3>
    </tr>
</html>
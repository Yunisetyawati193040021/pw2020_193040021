<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3a</title>
        <style>
        .tulisan {
            font-size: 28px;
            font-style: italic;
            color: #8c782d;
            font-family: arial;
            font-weight : bolder;
            padding : 10px;
        }
        .container {
            border: 1px solid black;
            box-shadow: 1px 1px 20px rgba(0,0,0,.5);
            width: 600px;
            height: 45px;
            border-radius: 3px;
        }
    </style>
</head>
<body>
<?php 
    function gantiStyle($tulisan, $style1, $style2) {
    echo "<div class='$style1'>
            <p class='$style2'> $tulisan</p>
          </div>";
}
?>

<?php
    gantiStyle("Selamat datang dipraktikum PW 2020","tulisan","container")
?>
<br></br>
<tr>
    <h3><a href="index.php">Back</a></h3>
</tr>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan3b</title>
    <style>
    .container{
        border : 1px solid black;
    }
    </style>
</head>
<body>
<?php 
    $jawabanIsset = "Isset adalah = ........  <br></br>";
    $jawabanEmpty = "Empty adalah = ......... ";

    $GLOBALS['isset'] = $jawabanIsset;
    $GLOBALS['empty'] = $jawabanEmpty;


    function soal($style){
        echo "<div class = $style> 
        <p>" .$GLOBALS['isset'] . "</p>
        <p>" .$GLOBALS['empty'] . "</p>
        </div>";
    }
     echo soal('container');
?>
<br></br>
<tr>
    <h3><a href="index.php">Back</a></h3>
</tr>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Document</title>
    <style>
        .bulat {
            border-radius: 100%;
            line-height: 40px;
            background-color: salmon;
            width: 40px;
            height: 40px;
            text-align: center;
            border: 2px solid black;
            margin : 4px;
            padding: 4px 4px 4px 5px;
            float: left;

        }
            
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
        <?php for($i = 1; $i <=3; $i++) {
            for ($a = 1; $a <=$i; $a++) {
                echo "<div class = 'bulat'>$i</div>";
        } echo "<div class='clear'></div>";
    }

    ?>
    <br></br>
    <tr>
        <h3><a href="index.php">Back</a></h3>
    </tr>
</body>
</html>
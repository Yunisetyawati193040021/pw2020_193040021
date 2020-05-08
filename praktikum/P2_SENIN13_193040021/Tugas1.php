<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tugas 1</title>
    <style>
        table {
            padding : 20px;
            border : 5px;
        }
        td {
            height : 30px;
            width : 30px;
            border : 1px solid black;
        }
    </style>
</head>
<body>
    <table cellspacing = 3px>
    <?php for ($a = 1; $a <= 6; $a++) 
    {
        echo "<tr>";
        for ($b = 1; $b <= 6; $b++) 
        {
            if(($a % 2 == 0 && $b %2 ==0)||($a % 2 == 1 && $b % 2 == 1)) 
            {
                echo '<td bgcolor=lightblue> </td>';
            }else{
                echo '<td bgcolor=salmon> </td>';
            }
        }
        echo "</tr>";
    }
    ?>
    </table>
    <tr>
        <h3><a href="index.php">Back</a></h3>
    </tr>
</body>
</html>
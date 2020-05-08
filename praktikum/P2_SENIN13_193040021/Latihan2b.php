<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
    <?php for ($i = 1; $i <=5; $i++) : ?>
        <tr>
            <th></th>
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <th>Kolom <?= $i; ?></th>
            <?php endfor; ?>
        </tr>
        
        <?php for ($j = 1; $j<=5; $j++) : ?>
        <tr>
            <th>
                Baris <?= $j; ?>
            </th>
                <?php for ($k = 1; $k <=5; $k++) : ?>
                    <td>
                        Baris <?= $j; ?>, kolom <?= $k; ?>
                    </td>
                <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    <?php endfor; ?>
    </table>
    <br></br>
    <tr>
        <h3><a href="index.php">Back</a></h3>
    </tr>
</body>
</html>
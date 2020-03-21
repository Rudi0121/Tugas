<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Table Perkalian</title>
</head>
<body>
    <table border="1" align="center">
        <tbody>
        <?php for($baris=1; $baris<=10; $baris++) : // loop baris sebanyak 10x ?>
            <tr>
            <?php for($colum=1; $colum<=10; $colum++) : // loop kolom sebanyak 10x ?>
                <td><?php echo "{$colum} x {$baris} = ".($colum * $baris); // kalikan colum dengan baris ?></td>
            <?php endfor; ?>
            </tr>
        <?php endfor;  ?>
        </tbody>
    </table>
</body>
</html>
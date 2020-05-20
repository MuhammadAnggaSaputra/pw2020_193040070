<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2b</title>
</head>
<body>
    <table border="1" cellspacing ="0" cellpadding= "10">
        <tr>
            <th></th>
            <?php for ($i = 1; $i <= 5; $i++): ?>
                <th>Kolom<?= $i; ?></th>
            <?php endfor; ?>       
        </tr>
        <tr>
            <?php for ($j = 1; $j <= 5; $j++): ?>
            <th>Baris<?= $j; ?></th>
            <?php for ($k = 1; $k <= 5; $k++): ?>
                <?php if($j %2==0) : ?>
                    <td></td>
                <?php else :?>
                    <td>Baris<?= $j; ?>,Kolom <?= $k;?></td> 
                <?php endif ?>
            <?php endfor;?>   
        </tr>
            <?php endfor;?>
    </table>
</body>
</html>
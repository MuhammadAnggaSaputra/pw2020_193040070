<?php
    $pemain = ["Mohammad salah", "Crisitano Ronaldo", "Lionel Messi", "Zlatan Ibrahim movic", "Neymar jr"];

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>latihan4b</title>
 </head>
 <body>

    <h3>Daftar pemain Bola terkenal</h3>
    <ol>

        <?php
            foreach ($pemain as $p) :?>
            <li> <?= $p; ?></li>
        <?php endforeach; ?>

    </ol>
    <br>

        <?php
            $pemain [] = "Luca Modric";
            $pemain [] = "Sadio Mane";
            sort($pemain);
        ?>

    <h3>Daftar pemain terkenal bola baru</h3>
    <ol>
        <?php foreach ($pemain as $p) : ?>
            <li><?= $p; ?></li>
        <?php endforeach; ?>

    </ol>

 </body>
 </html>
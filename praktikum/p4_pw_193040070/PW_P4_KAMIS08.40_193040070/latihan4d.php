<?php 

$pemain = [
    ['nama'=>'Cristiano Ronaldo', 
    'club'=>'Juventus', 
    'main'=>'100', 
    'gol'=>'76', 
    'assist'=>'30'
    ],

    ['nama'=>'Lionel Messi',
    'club'=> 'Barcelona', 
    'main'=>'120',
    'gol'=>'80',
    'assist'=>'12'
    ],

    ['nama'=>'Luca Modcric',
    'club'=>'Real Madrid',
    'main'=>'87',
    'gol'=>'12',
    'assist'=>'48'
    ],

    ['nama'=>'Mohammad Salah',
    'club'=>'Liverpool',
    'main'=>'90',
    'gol'=>'103',
    'assist'=>'8'
    ],

    ['nama'=>'Neymar Jr',
    'club'=>'Paris Saint Germain',
    'main'=>'109',
    'gol'=>'56',
    'assist'=>'15'
    ],

    ['nama'=>'Sadio Mane',
    'club'=>'Liverpool',
    'main'=>'63',
    'gol'=>'30',
    'assist'=>'70'
    ],

    ['nama'=>'Zlatan Ibrahimovic',
    'club'=>'Ac Milan',
    'main'=>'100',
    'gol'=>'10',
    'assist'=>'12'
    ]    
] 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan4d</title>
</head>
<body>

    <table border ="1" cellpadding="15" cellspacing="0" style="text-align: center" >
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Club</th>
            <th>Main</th>
            <th>Gol</th>
            <th>Assist</th>
        </tr>
    <?php
        $jumlah_main = 0;
        $jumlah_gol = 0;
        $jumlah_assist = 0;
        $nomor =1;
    ?>

    <?php foreach ($pemain as $p) { ?>
        <tr>
            <td><?= $nomor ?></td>
            <td><?= $p["nama"] ?></td> 
            <td><?= $p["club"] ?></td>
            <td><?= $p["main"] ?></td>    
            <td><?= $p["gol"] ?></td>    
            <td><?= $p["assist"]?></td>    
        </tr>

    <?php $jumlah_main += $p["main"] ?>
    <?php $jumlah_gol += $p["gol"] ?>
    <?php $jumlah_assist += $p["assist"] ?>
    <?php $nomor++; ?>
    <?php } ?>

        <tr>
            <td>#</td>
            <td colspan="2"><b>Jumlah Total</b></td>
            <td><?= $jumlah_main ?></td>
            <td><?= $jumlah_gol ?></td>
            <td><?= $jumlah_assist ?></td>
        </tr>
    </table>
</body>
</html>



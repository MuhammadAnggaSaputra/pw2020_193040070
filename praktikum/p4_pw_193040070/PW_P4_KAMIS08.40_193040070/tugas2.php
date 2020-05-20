<?php

$pakaian = [
    ['picture'=> 'foto1.jpg', 
    'brand'=>'Manzone', 
    'size'=>'M, L, XL', 
    'colour'=>'Black, Blue, Grey', 
    'price'=>'Rp 1.500.000,00'
    ],

    ['picture'=>'foto2.jpg',
    'brand'=> 'Watchout', 
    'size'=>'M, L, XL',
    'colour'=>'Black, Red, Blue, White, Navy',
    'price'=>'Rp 250.000,00'
    ],

    ['picture'=>'foto3.jpg',
    'brand'=>'Eiger',
    'size'=>'M, L, XL',
    'colour'=>'Black, Blue, White, Green',
    'price'=>'Rp 200.000,00'
    ],

    ['picture'=>'foto4.jpg',
    'brand'=>'Eiger',
    'size'=>'L, XL, XXL',
    'colour'=>'Black, White',
    'price'=>'Rp 175.000,00'
    ],

    ['picture'=>'foto5.jpg',
    'brand'=>'3 Second',
    'size'=>'M, L, XL,',
    'colour'=>'White, Blue, Green, Black, Red',
    'price'=>'Rp 110.000,00'
    ],

    ['picture'=>'foto6.jpg',
    'brand'=>'3 Second',
    'size'=>'M, L, XL',
    'colour'=>'Black, White, Red, Grey',
    'price'=>'Rp 110.000,00'
    ],

    ['picture'=>'foto7.jpg',
    'brand'=>'3 Second',
    'size'=>'M, L, XL',
    'colour'=>'White, Blue, Grey, Green',
    'price'=>'Rp 110.000,00'
    ], 
    
    ['picture'=>'foto8.jpg',
    'brand'=>'Lois',
    'size'=>'29 - 34',
    'colour'=>'Blue, Black, White',
    'price'=>'Rp 1.500.000,00'
    ],

    ['picture'=>'foto9.jpg',
    'brand'=>'Wrangler',
    'size'=>'31 - 34',
    'colour'=>'Black, Blue, Navy ',
    'price'=>'Rp 1.000.000,00'
    ],

    ['picture'=>'foto10.jpg',
    'brand'=>'Levis',
    'size'=>'28 - 34',
    'colour'=>'Blue, Navy',
    'price'=>'Rp  800.000,00'
    ],

    ['picture'=>'foto11.jpg',
    'brand'=>'Lea',
    'size'=>'31 - 34',
    'colour'=>'Black, Navy',
    'price'=>'Rp 999.000,00'
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas2</title>

    <style>
    
        table {
            background-color : silver;
        }
        body {
            background-color : grey;
        }
    </style>
    
</head>
<body>
    <table border ="1" cellpadding="10" cellspacing="0" style="text-align: center;" align="center" >
        <tr>
            <th>No</th>
            <th>PICTURE</th>
            <th>BRAND</th>
            <th>SIZE</th>
            <th>COLOUR</th>
            <th>PRICE</th>
        </tr>

            <?php
                $nomor =1;
            ?>

            <?php foreach ($pakaian as $p) { ?>
       <tr>
            <td><?= $nomor ?></td>
            <td><img src="asset/<?= $p["picture"] ?>" alt=""></td> 
            <td><?= $p["brand"] ?></td>
            <td><?= $p["size"] ?></td>    
            <td><?= $p["colour"] ?></td>    
            <td><?= $p["price"]?></td>   
        </tr>  

            <?php $nomor++; ?>

            <?php }?>
        

    </table>   
</body>
</html>
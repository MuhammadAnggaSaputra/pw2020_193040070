<?php

function gantiStyle($tulisan="" ,$style1="" , $style2=""){
    return $tulisan ."". $style1 ."". $style2;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=``, initial-scale=1.0">
    <title>Document</title>

    <style>
    .style1 {
        width: 750px;
        height: 100px;
        border: 2px solid black;
        box-shadow: 10px 5px 10px #000 ;
        line-height: 100px;
        margin:auto;
        text-align: center;
    }
    .style2 {
        background-color: white;
        font-size:28px;
        font-family:arial;
        color: #8c782d;
        font-style: italic;
        font-weight: bold;
    }
    
    </style>

</head>
<body>
    <div class="style1 style2"><?= gantiStyle("Selamat datang di praktikum  PW 2020");
    ?></div>
</body>
</html>
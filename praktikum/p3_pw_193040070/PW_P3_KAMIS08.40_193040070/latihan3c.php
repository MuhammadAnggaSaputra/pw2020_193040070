<?php
function tumpukanBola($tumpukan){
    for($i = 1; $i <= $tumpukan; $i++){
        for($j = 1; $j <= $i ;$j++){
            echo "<div class='bulat'>$i</div>";
        }
        echo "<div class='clear'></div>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan3c</title>

    <style>
    .bulat{
        width: 50px;
        height: 50px;
        font-size: 30px;
        line-height: 50px;
        border: 2px solid black;
        border-radius: 50%;
        background-color: salmon;
        text-align: center;     
        float: left;       
        margin: 3px;

    }
    .clear{
        clear: both;
    }
    </style>
</head>
<body>
<?php tumpukanBola(5);?>

</body>
</html>
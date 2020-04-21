<!DOCTYPE html>
<html lang="en">
<head>
    <title>pengulangan</title>
    <style>
        .kotak {
            width : 50px;
            height : 50px;
            background-color : red;
            text-align : center;
            line-height : 50px;
            transition : 05s ;
            float: left ;
            margin : 2px;
            
        }

        .kotak:hover {
            transform : rotate(360deg);
        }
    </style>
</head>
<body>
        <?php
        for ($i = 1; $i <= 1000; $i++)
        echo "<div class='kotak'>$i</div>";
        ?>

    
</body>
</html>
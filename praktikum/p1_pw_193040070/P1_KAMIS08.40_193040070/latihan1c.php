<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
    .kotak {
        width : 50px;
        height : 50px;
        background-color : salmon;
        text-align : center;
        line-height : 50px;
        float: left ;
        margin : 2px;
        border-radius : 50px;
        box-shadow : 2px 2px 10px;
        border : 2px solid black;
    }
    .clear {
        clear : both;
    }
    </style>
</head>
<body>
    <?php
    $i = "A";
    $j = "B";
    $c = "C";

    echo "<div class='kotak'>$i</div>";
    echo '<div class="clear"></div>';
    echo "<br>";

    echo "<div class='kotak'>$j</div>";
    echo "<div class='kotak'>$j</div>";
    echo '<div class="clear"></div>';
    echo "<br>";

    echo "<div class='kotak'>$c</div>";
    echo "<div class='kotak'>$c</div>";
    echo "<div class='kotak'>$c</div>";



    ?>
</body>
</html>
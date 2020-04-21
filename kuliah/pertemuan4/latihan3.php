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
        .clear {
            clear : both;
        }
    </style>
</head>
<body>
        <?php
        // variabel i untuk baris contoh 1 terus smpe kesamping
        for($i = 1; $i <=8; $i++ ) { 
            // variabel j untuk angkar berurutan kesamping
            for($j = 1; $j <=10; $j++) {
                echo "<div class='kotak'>$j</div>";
            }
    
           echo '<div class="clear"></div>';
        
        }
        ?>

    



    
</body>
</html>
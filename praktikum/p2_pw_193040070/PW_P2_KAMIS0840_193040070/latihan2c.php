
<!DOCTYPE html>
<html lang="en">
<head>
    <title>pengulangan</title>
    <style>
        .kotak {
            width : 50px;
            height : 50px;
            background-color : salmon;
            text-align : center;
            line-height : 50px;
            float: left ;
            margin : 5px;
            border-radius : 50px;
            border : 2px solid black;            
        }
        .clear {
            clear : both;
        }
    </style>
</head>
<body>
        <?php
        // variabel i untuk baris contoh 1 terus smpe kesamping
        for($i = 1; $i <=5; $i++ ) { 
            // variabel j untuk angkar berurutan kesamping
            for($j = 1; $j <= $i; $j++) {
                echo "<div class='kotak'>$i</div>";
            }
    
           echo '<div class="clear"></div>';
        
        }

        ?>

    



    
</body>
</html>
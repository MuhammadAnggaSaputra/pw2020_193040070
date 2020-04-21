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
        $angka2 = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];

            // variabel j untuk angkar berurutan kesamping
            foreach ($angka2 as $baris) {
                foreach ($baris as $b) {
        
                echo "<div class='kotak'>$b</div>";
            }
    
           echo '<div class="clear"></div>';
        
        }
        ?>

    



    
</body>
</html>
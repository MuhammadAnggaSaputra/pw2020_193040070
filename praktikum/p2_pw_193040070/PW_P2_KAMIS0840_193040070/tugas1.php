<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas1</title>
</head>
<body>
        <table border = "1"  cellspacing ="4" align ="center" >
        <?php
            for ($i =1; $i <=6; $i++) {
                echo "<tr>";
            for ($j =1; $j <=6; $j++) {
                $hasil =$i+$j;
                if($hasil %2==0) {
                    echo "<td width=35px height=35px bgcolor=skyblue></td>";
                }
                else {
                    echo "<td width=35px height=35px bgcolor=salmon></td>";
                }
            }
                echo "</tr>";
            }
          
        ?>   
        
        </table>
    
</body>
</html>
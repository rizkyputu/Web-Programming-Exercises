<html>
    <head>Headings</head>
    <body>
    <?php
        $b = 4;
        $k = 5;
        echo "<table border='1'>";
        for($a =1; $a < ($k*$b); $a+=4){
            echo "<tr>";
            for ($j = 0; $j < $b; $j++){
                $x = $a+$j;
                echo "<td>" .$x. "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>

    </body>
</html>
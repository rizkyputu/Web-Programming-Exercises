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
                if ($x%2==0){
                    echo "<td bgcolor = maroon; style = color : white>" .$x. "</td>";
                } else {
                    echo "<td bgcolor = white; style = color : maroon>" .$x. "</td>";
               }
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>

    </body>
</html>
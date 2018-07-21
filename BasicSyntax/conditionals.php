<!DOCTYPE html>

<html>
    <body>
        <?php
            //if-else structure
            $t = 11;
            if ($t < 10) {
                echo "Have a good morning!";
            } elseif ($t < 20) {
                echo "Have a good day!";
            } else {
                echo "Have a good night!";
            }
            //while loop
            echo "<br>";
            echo "<br>";
            echo "<h2>While Loop Structure:</h2>";
            $x = 1; 

            while($x <= 5) {
                echo "The number is: $x <br>";
                $x++;
            }
            //for loop
            echo "<br>";
            echo "<br>";
            echo "<h2>For Loop Structure:</h2>"; 

            for ($x = 0; $x <= 10; $x++) {
                echo "The number is: $x <br>";
            }

            //for each loop
            echo "<br>";
            echo "<br>";
            echo "<h2>For Each Loop Structure:</h2>";
            $colors = array("red", "green", "blue", "yellow"); 

            foreach ($colors as $value) {
                echo "$value <br>";
            }
        ?>
        <br>
        <a href="https://www.w3schools.com/pHP/php_switch.asp">Switch Case Tutorial</a>
        <br><br>
        <a href=""></a>
    </body>

</html>
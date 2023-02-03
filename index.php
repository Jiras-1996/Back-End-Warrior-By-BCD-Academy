<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            // Assign value in variable
            $x = 10;
            $y = 3;
 
            // Operator + - * / %(หารเอาเศษ) **(ยกกำลัง)
            echo $x ;
            echo "<br>";
            echo $y ;
            // Operator + 
            echo "<br>";
            echo $x + $y;
            // Operator - 
            echo "<br>";
            echo $x - $y;
            // Operator * 
            echo "<br>";
            echo $x * $y;
            // Operator / 
            echo "<br>";
            echo $x / $y;
            // Operator %(หารเอาเศษ)
            echo "<br>";
            echo $x % $y;
            // Operator **(ยกกำลัง)
            echo "<br>";
            echo $x ** $y;
            
            // operator x += y => x=x+y(addition)
            // เท่ากับตัวเดียวเอาไว้สำหรับ assign ค่า
            echo "<br>";
            $x = 10;
            $x += 100;
            echo $x ;

            // operator x -= y => x=x-y(subtraction)
            echo "<br>";
            $x = 10;
            $x -= 100;
            echo $x ;

            // operator x *= y => x=x*y(Multiplication)
            echo "<br>";
            $x = 10;
            $x *= 100;
            echo $x ;

            // operator x /= y => x=x/y(Division)
            echo "<br>";
            $x = 10;
            $x /= 100;
            echo $x ;

            // operator x %= y => x=x%y(Modulus)
            echo "<br>";
            $x = 10;
            $x %= 100;
            echo $x ;

            // Assign value in variable
            $x = 10;
            $y = 3;
            echo "<br>";
            echo "<br>";
            var_dump($x == $y);
            echo "<br>";
            var_dump($x === $y);
            echo "<br>";
            var_dump($x != $y);
        ?>
    </body>
</html>
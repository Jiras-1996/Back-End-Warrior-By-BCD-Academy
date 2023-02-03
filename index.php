<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            // Operator + - * / %(หารเอาเศษ) **(ยกกำลัง)
            $x = 10;
            $y = 3;
            
            echo $x ;
            echo "<br>";
            echo $y ;
            echo "<br>";
            echo $x + $y;
            echo "<br>";
            echo $x - $y;
            echo "<br>";
            echo $x * $y;
            echo "<br>";
            echo $x / $y;
            echo "<br>";
            echo $x % $y;
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
        ?>
    </body>
</html>
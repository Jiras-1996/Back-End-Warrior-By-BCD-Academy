<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            
            // PHP Arithmetic Operators
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
            
            // PHP Assignment Operators
            // operator x += y => x=x+y(addition)
            // เท่ากับตัวเดียว(=)เอาไว้สำหรับ assign ค่า
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

            // PHP Comparison Operators
            // Assign value in variable
            $a = 100;
            $b = "100";
            echo "<br>";
            echo "<br>";
            // operator == คือเปรียบเทียบว่าเท่ากันหรือไม่(อนุโลมข้าม data type ได้)
            var_dump($a == $b);
            echo "<br>";
            // operator === คือเปรียบเทียบว่าเท่ากันหรือไม่แบบเข้มงวด(ต้องเหมือนกันทั้งค่าและ data type)
            var_dump($a === $b);
            echo "<br>";
            // operator != , <> คือเปรียบเทียบว่าไม่เท่ากันหรือไม่(อนุโลมข้าม data type ได้)
            var_dump($a != $b);
            echo "<br>";
            // operator !== คือเปรียบเทียบว่าไม่เท่ากันหรือไม่แบบเข้มงวด(ต้องไม่เหมือนกันทั้งค่าและ data type)
            var_dump($a !== $b);
            echo "<br>";
            // operator > (Greater than) คือ เปรียบเทียบว่าค่าทางซ้ายมากกว่าทางขวาหรือไม่
            var_dump($a > $b);
            echo "<br>";
            // operator < (Less than) คือ เปรียบเทียบว่าค่าทางซ้ายน้อยกว่าทางขวาหรือไม่
            var_dump($a < $b);
            echo "<br>";
            // operator >= (Greater than or equal to) คือ เปรียบเทียบว่าค่าทางซ้ายมากกว่าหรือเท่ากับทางขวาหรือไม่
            var_dump($a >= $b);
            echo "<br>";
            // operator <= (Less than or equal to) คือ เปรียบเทียบว่าค่าทางซ้ายน้อยกว่าหรือเท่ากับทางขวาหรือไม่
            var_dump($a <= $b);
            echo "<br>";
            // operator <=>	(Spaceship) ใช้โมดิฟายขาออกว่าต้องการค่าที่ออกมาสามค่าไม่ใช่แค่ true/false 
            //ซ้ายน้อยกว่าขวาพ่นค่า -1 ออกมา
            //ซ้ายเท่ากับขวาพ่นค่า 0 ออกมา
            //ซ้ายมากกว่าขวาพ่นค่า +1 ออกมา
            var_dump($a <=> $b);
            echo "<br>";
            echo "<br>";

            // PHP Increment / Decrement Operators(การเพิ่มค่าเข้าไปทีละหนึ่งแบบ 1by1)
            // operator ++$x คือ การเพิ่มค่าให้ +1 ล่วงหน้าแล้ว echo ออกมา
            $x = 10;
            echo ++$x;
            echo "<br>";
            // operator $x++ คือ การเพิ่มค่าให้ +1 หลัง echo ต้อง echo ซ้ำเพื่อให้เห็นค่าที่เพิ่มขึ้น
            $x = 10;
            echo $x++;
            echo "<br>";
            echo $x;
            echo "<br>";
            // operator --$x คือ การลดค่า -1 ล่วงหน้าแล้ว echo ออกมา
            $x = 10;
            echo --$x;
            echo "<br>";
            // operator $x++ คือ การลดค่า -1 หลัง echo ต้อง echo ซ้ำเพื่อให้เห็นค่าที่ลดลง
            $x = 10;
            echo $x--;
            echo "<br>";
            echo $x;
            echo "<br>";

            // PHP Logical Operators
            // and operator
            $x = 100;
            $y = 51;

            if ($x == 100 && $y == 50){
                echo "true";
            } else{
                echo "false";
            }
            echo "<br>";
            // or operator
            $x = 100;
            $y = 51;

            if ($x == 100 || $y == 50){
                echo "true";
            } else{
                echo "false";
            }
            echo "<br>";
            // not operator = กลับจริงเป็นเท็จ หรือ กลับเท็จเป็นจริง
            $x = 100;

            if ($x !== 90){
                echo "true";
            } else{
                echo "false";
            }
            echo "<br>";

            // PHP String Operators
            // 	Concatenation operator คือ การนำ string สองตัวมาต่อกัน
            $txt1 = "Hello";
            $txt2 = " world!";

            echo $txt1 . $txt2;
            echo "<br>";

            /* ตัวอย่างจากการเขียน mysql
            $table = "users";
            $sql = "SELECT * FROM " . $table . " WHERE id = 1;";
            echo $sql;
            */
            
            // Concatenation assignment operator คือ เหมือนข้างบนแต่เราจะทำการ assign ลงไปเลยจะได้ไม่ต้องพิมพ์เท่ากับใหม่
            $txt1 = "Hello";
            $txt2 = " world!";
            $txt = $txt1 . $txt2;

            //ผลลัพธ์ที่ออกมาเหมือนกัน
            echo $txt;
            echo "<br>";
            echo $txt1 .= $txt2;
            echo "<br>";

            // PHP Array Operators จะคล้ายกับ PHP Comparison Operators แต่หัวข้อลดลง
            // Union operator คือ การรวม array สองอันเข้าด้วยกัน
            $x = array("a" => "red", "b" => "green");  
            $y = array("c" => "blue", "d" => "yellow");  

            print_r($x + $y);
            echo "<br>";

            // PHP Conditional Assignment Operators 
            // Ternary operator (?:) เป็น short hand ของ if-else statement
            // concept: เอ้ะหรือเปล่าวะ ุถ้าใช่เอาเลย แต่ถ้าไม่ไปดูข้างหลัง
            $var = 1;
            echo $var == 1 ? "111" : "other";
            echo "<br>";

            // Null coalescing operator(??) => ถ้าไม่ null เอาเลยแต่ถ้า null ไปดูอันหลัง
            $var = null;
            echo $var ?? "ok";
        ?>
    </body>
</html>
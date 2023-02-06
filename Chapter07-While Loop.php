<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            // While Loop จะทำไปเรื่อยๆตราบเท่าที่ในวงเล็บเป็นจริง และเลิกทำเมื่อในวงเล็บเป็นเท็จเท่านั้น
            // ให้ระวังการเกิด infinity loop !!!
            $x = 1;
            while($x <= 5):
                echo "x = " . $x;
                echo "<br>";
                $x++;
            endwhile;
            echo "---END---";

            echo "<br>";

            // วิธีที่ 2 ใช้คำสั่ง do ตามด้วย while
            $y = 1;

            do{
                echo "y = " . $y;
                echo "<br>";
                $y++;
            } while($y <= 5);

            echo "---END---";
        ?>
    </body>
</html>
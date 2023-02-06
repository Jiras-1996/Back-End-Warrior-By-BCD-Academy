<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            // foreach loop เหมือน for loop แต่ใช้งานกับ array เท่านั้น
            // foreach จจะค่อยๆวนลูปไปทีละ 1 สเต็ป
            $array = ["Volvo", "BMW", "Toyota"];
            foreach( $array as $value ):
                echo $value;
                echo "<br>";
            endforeach;
            echo "--END--";

            echo "<br>";

            // with continue function
            $array = ["Volvo", "BMW", "Toyota"];
            foreach( $array as $value ):
                if( $value == "BMW") continue;
                echo $value;
                echo "<br>";
            endforeach;
            echo "--END--";

            echo "<br>";

            // with break function => รันลูปแรกลูปเดียว
            $array = ["Volvo", "BMW", "Toyota"];
            foreach( $array as $value ):
                if( $value == "BMW") break;
                echo $value;
                echo "<br>";
            endforeach;
            echo "--END--";

            echo "<br>";

            // advance
            $array2 = [
                "name"      => "Suebphatt",
                "email"     => "bcd.aademy.thai@gmail.com",
                "tel"       => "0812223344"
            ];
            foreach( $array2 as $value2 ):
                echo $value2;
                echo "<br>";
            endforeach;
            echo "--END--";

            echo "<br>";

            // ต้องการคีย์
            $array2 = [
                "Name"      => "Suebphatt",
                "Email"     => "bcd.academy.thai@gmail.com",
                "Tel"       => "0812223344"
            ];
            foreach( $array2 as $key => $value2 ):
                echo $key . " : " . $value2;
                echo "<br>";
            endforeach;
            echo "--END--";
        ?>
    </body>
</html>
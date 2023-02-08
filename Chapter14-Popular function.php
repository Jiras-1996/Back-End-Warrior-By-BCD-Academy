<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            // Popular PHP function

            // explode(); => ใช้แปลง string แล้วแปลงไปเป็น array ด้วยตัวคั่นบางอย่างที่ใส่ให้ string ไว้
            $str = "A,B,C,D,E";           
            $arr = explode(",", $str);
            var_dump($arr);
            echo "<br>";

            
            // implode(); => ใช้แปลง array ไปเป็น string โดยเราใส่ตัวคั่นให้มันเอง
            $arr = ["A", "B", "C", "D", "E"];
            echo implode("-", $arr);
            echo "<br>";
            
            // count(); => ใช้นับว่า array มีกี่ตัว
            $arr = ["A", "B", "C", "D", "E"];
            echo count($arr);
            echo "<br>";
            
            // substr(); => เอาไว้ตัด string ออกในตำแหน่งที่เราระบุไว้
            $str = "ABCDEFGHIJKLMN";
            echo substr($str, 4); // ตัดที่ตำแหน่ง 0 เริ่มต้นที่ 4
            echo "<br>";
            echo substr($str, 4, 3); // ตัดที่ตำแหน่ง 0 เริ่มต้นที่ 4 โดยเอามาแค่ 3 ตัวอักษร
            echo "<br>";
            
            // in_array(); => เอาไว้ดูว่าใน array นี้มีค่านี้อยู่หรือเปล่า โดยจะส่งค่า TRUE/FALSE ออกมา
            $arr = ["A", "B", "C", "D", "E"];
            var_dump( in_array("A", $arr));
            echo "<br>";
            var_dump(in_array("F", $arr));
            echo "<br>";
            
            // มีประโยชน์มากในการเขียน if statement
            if(in_array("F", $arr) )
                echo "มี F";
            else
                echo "ไม่มี F";  
            
            echo "<br>";

            // date(); => เอาไว้ปริ้นท์วันที่ ณ เวลานั้นออกมา โดยเราสามารถเลือกฟอร์แมทได้เอง
            echo date("Y-m-d H:i:s");
            echo "<br>";
            
        ?>
    </body>
</html>
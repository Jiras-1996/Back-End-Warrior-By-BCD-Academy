<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            
            // String function

            // str_replace(); => ใช้แทนที่ตัวอักษรบางตัวหรือกลุ่มหนึ่ง
            
            $str = "Hello World";
            $x = str_replace("World", "Moto", $str);
            echo $str;
            echo "<br>";
            echo $x;
            echo "<br>";
            
            // strpos(); => รับพารามิเตอร์ 3 ตัว โดยตัวสุดท้ายใส่หรือไม่ก็ได้
           
            $str = "Hello World";
            echo strpos($str, "W");
            echo "<br>";

            // strlen(); => ใช้วัดความยาวของ string
            
            $str = "Hello World";
            echo strlen($str);
            echo "<br>";

            // strtoupper(); & strtolower(); => ใช้ปรับ String เป็นแบบ uppercase หรือ lowercase
            
            $str = "Hello World";
            echo strtoupper($str);
            echo "<br>";
            echo strtolower($str);
            echo "<br>";

            // trim(); => ใช้ลบตัวอักษรบริเวณหน้าและหลังของ string ออก (มีผลแค่หน้าสุด-หลังสุด)
            // เช่น ตัดช่องว่างหน้าและหลังของอีเมล์ก่อนอัพโหลดขึ้น database เป็นต้น
            
            $str = "Hello World";
            echo $str;
            echo "<br>";
            echo trim($str, "Hed!");
            echo "<br>";
            
        ?>
    </body>
</html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php

            // รับค่าเข้าไปผ่านการประมวลผลแล้วจึง return ค่าออกมา เพื่อที่จะนำค่านั้นไปใช้งานต่อโดยไม่ echo ออกมา
            function plus_one($int){
                $x = $int + 1;
                return $x; // ทันทีที่ return คือ การจบฟังก์ชั่น
            }

            // การจะใช้งานค่าที่ประมวลผลออกมาต้องเอาตัวแปรออกมารับค่านั้นก่อน
            $y = plus_one(1);
            var_dump($y);
        
        ?>
    </body>
</html>
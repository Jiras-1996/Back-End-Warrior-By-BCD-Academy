<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        
            // ในฟังก์ชั่นตัวแปรทุกตัวในฟังก์ชั่น จะถือว่าเป็นสโคปข้างในของฟังก์ชั่นเอง
            // แม้จะมีชื่อซ้ำกับตัวแปรนอกฟังก์ชั่นก็ตาม จะถือว่าเป็นตัวแปรคนละตัวกัน

            $x = 2; // x ที่อยู่ข้างนอก กับ x ที่อยู่ข้างใน เป็นคนละ x กัน

            function print_something(){
                
                // เราสามารถใช้คำสั่ง Global ในการ access ตัวแปรที่อยู่นอกฟังก์ชั่นเพื่อส่ง string ของตัวแปรเข้าไป 
                $x = $GLOBALS['x'];
                echo $x; 
            }

            print_something();

        ?>
    </body>
</html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        
            // วิธีที่ 1 ถ้าชุดคำสั่งมีแค่บรรทัดเดียว พิมพ์ได้เลยโดยไม่ต้องใส่ปีกกา
            $var = 1;
            if($var == 1)
                echo "มันมีค่าเป็น 1 <br>";
            else
                echo "มันมีค่าไม่เป็น 1 <br>"; 

            // วิธีที่ 2 ใช้เครื่องหมาย ":" หลัง if กับ else และ ปิดท้ายด้วย "endif;"
            $var2 = 1;
            if($var2 == 1):
                echo "มันมีค่าเป็น 1 <br>";
            else:
                echo "มันมีค่าไม่เป็น 1 <br>";
            endif;
        ?>
    </body>
</html>
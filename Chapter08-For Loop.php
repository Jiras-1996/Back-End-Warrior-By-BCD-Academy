<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            // For Loop คล้ายกับ While Loop แต่จะมีการประกาศตัวแปรตั้งแต่จุดเริ่มต้น กึ่งกลาง และ จุดสิ้นสุด
            for($i=1; $i <= 10; $i+=2):
                echo "i = " . $i;
                echo "<br>"; 

            endfor;
            echo "---END---";
            
            echo "<br>"; 
            
            // function break (ออกจาก loop)
            for($i=1; $i <= 10; $i+=2):
                echo "i = " . $i;
                echo "<br>";

                // break ใช้สำหรับออกจาก loop นี้ได้ทันทีหากเกิดเหตุการณ์อะไรบางอย่าง เช่น ในกรณีนี้เจอ break ใน loop จึงรันคำสั่งแค่รอบเดียว    
                // ใช้สำหรับเจอกรณีพิเศษอะไรบางอย่าง
                break; 

            endfor;
            echo "---END---";

            echo "<br>";

            for($i=1; $i <= 10; $i+=2):
                echo "i = " . $i;
                echo "<br>";
               
                if($i >= 5) break; 

            endfor;
            echo "---END---";

            echo "<br>";

            // function continue (ข้ามไป loop ต่อไป)
            // continue จะคล้ายกับ break แต่จะทำการข้ามไปยัง loop ต่อไป
            for($i=1; $i <= 10; $i+=1):
                if($i == 5) continue; // เมื่อถึง 5 จะไม่พิมพ์ 5 ออกมาแต่จะข้ามไป loop ต่อไปเลย
                echo "i = " . $i;
                echo "<br>";

            endfor;
            echo "---END---";
        ?>
    </body>
</html>
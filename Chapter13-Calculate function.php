<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            
            // Calculate function

            // ceil(); => ใช้สำหรับปัดค่าเลขทศนิยมให้เป็นจำนวนเต็มแบบบังคับปัดขึ้น
            echo ceil(2.4);
            echo "<br>";

            // floor(); => ใช้สำหรับปัดค่าเลขทศนิยมให้เป็นจำนวนเต็มแบบบังคับปัดลง
            echo floor(2.8);
            echo "<br>";

            // round(); => ใช้สำหรับจัดการค่าทศนิยม โดยสามารถระบได้เลยว่าต้องการทศนิยมกี่ตำแหน่งหรือจำนวนเต็ม
            echo round(3.456789);
            echo "<br>";
            echo round(3.456789, 2);
            echo "<br>";
            
            // min(); => เป็นคำสั่งที่เอาไว้ใช้สำหรับแกะ array โดยจะแกะ array ที่มีค่าน้อยที่สุดออกมา
            $array = [4, 6, 8, 9];
            echo min($array);
            echo "<br>";
            
            // max(); => เป็นคำสั่งที่เอาไว้ใช้สำหรับแกะ array โดยจะแกะ array ที่มีค่ามากที่สุดออกมา
            $array = [4, 6, 8, 9];
            echo max($array);
            echo "<br>";

            // rand(); => ใช้สำหรับการสุ่มตัวเลขขึ้นมาระหว่างเลขที่ 1 กับ 2 โดยจะเปลี่ยนไปทุกครั้งที่กด refresh
            echo rand(1, 100);
            echo "<br>";
            
        ?>
    </body>
</html>
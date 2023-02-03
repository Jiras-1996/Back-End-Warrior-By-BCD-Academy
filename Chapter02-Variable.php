<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php 
            // variable ใน php ขึ้นต้นด้วย $ เสมอ
            //ตั้งตัวแปรต้องตั้งให้สื่อถึงสื่อที่เก็บอยู่
            
            // string
            $string = "Hello world!";

            // integer
            $integer = 5985;

            // float
            $float = 123.45;

            // boolean
            $boolean = true;

            // array
            $array1 = array("Volvo", "BMW", "Toyota");
            $array2 = ["Volvo", "BMW", "Toyota"];

            // NULL = ว่างเปล่า
            $null = NULL;

            // var_dump ใช้เช็ค variable type
            echo $string;
            echo "<br>";
            var_dump($string);
            echo "<br>";
            echo $integer;
            echo "<br>";
            var_dump($integer);
            echo "<br>";
            echo $float;
            echo "<br>";
            var_dump($float);
            echo "<br>";
            echo $boolean;
            echo "<br>";
            var_dump($boolean);
            echo "<br>";
            var_dump($array1);
            echo "<br>";
            var_dump($array2);
            echo "<br>";
            
            // array indexing
            // index ของภาษาส่วนใหญ่เริ่มต้นที่ 0
            var_dump($array2[0]);
            echo "<br>";
            var_dump($array2[1]);
            echo "<br>";
            var_dump($array2[2]);


            echo "<br>";
            var_dump($null);
        ?> 
    </body>
</html>
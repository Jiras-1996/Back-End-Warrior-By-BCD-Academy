<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php 
            
            // array 1 dimension
            $array1 = ["Volvo", "BMW", "Toyota"];

            // array 2 dimension => Use Key-Pairs concept   
            $array2 = [
                "name"      => "Suebphatt",
                "email"     => "bcd.aademy.thai@gmail.com",
                "tel"       => "0812223344"
            ]; 
            
            // array 3 dimension => array ซ้อน array
            $array3 = [
                "name"      => "Suebphatt",
                "email"     => "bcd.academy.thai@gmail.com",
                "tel"       => "0812223344",
                "friend" => [
                    "name"      => "Eve",
                    "email"     => "eve@eve.com",
                    "tel"       => "0812223345",
                ]
            ];
        ?>
        <pre>
            <!--Can use var_dump or print_r-->
            <?php print_r($array2); 
            echo "<br>";
            ?>
            <?php print_r($array3); ?>
        </pre> 
    </body>
</html>
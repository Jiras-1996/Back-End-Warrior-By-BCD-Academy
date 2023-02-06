<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php

            // My first function in PHP
            function hello_world(){
                echo "Hello World";
                echo "<br>";
                echo "--END--";
            }
            
            // call to use function
            hello_world();

            echo "<br>";

            function debug1($str){
                echo "Hello World";
                echo "<br>";
                echo $str;
                echo "<br>";
                echo "--END--";
            }

            debug1("Helloooooo");
            echo "<br>";
            
            // function 2 arguments
            function debug2($str1, $str2){
                echo $str1;
                echo "<br>";
                echo $str2;
                echo "<br>";
                echo "--END--";
            }

            debug2("Hello", "World");
            
            function debug($var){
                echo "<pre>";
                var_dump($var);
                echo "</pre>";
            }

            $array = [
                "a" => "b",
                "c" => "d",
                "e" => "f"
            ];

            debug($array);

        ?>
    </body>
</html>
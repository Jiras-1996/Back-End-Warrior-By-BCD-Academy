<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>

        <?php            
            // if-else
            $var = 1;
            if($var ==1) {
                echo "มันมีค่าเท่ากับ 1 <br>";
                echo "----- <br>";
            } else{
                echo "มันมีค่าไม่ได้เท่ากับ 1 <br>";
                echo "----- <br>";
            }

           // elseif
            $var2 = 3;
            if($var2 ==1) {
                echo "มันมีค่าเท่ากับ 1 <br>";
                echo "-----";
            }elseif($var2 == 2 ){
                echo "มันมีค่าเท่ากับ 2 <br>";
                echo "-----";
            }else{
                echo "มันมีค่าไม่ได้เท่ากับ 1 และ 2 <br>";
                echo "-----";
            }            
        ?>

    </body>
</html>
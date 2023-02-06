html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $var = 1; 
            switch($var){
                case 1:
                    echo "1111";
                    break; //จบเคสนี้แล้ว
                case 2:
                    echo "2222";
                    break;
                default: // เหมือน else จะทำในกรณีไม่เข้า case ใดเลย
                    echo "other";
            }
        ?>
    </body>
</html>
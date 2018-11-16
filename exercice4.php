<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $number = 1;
        while ($number <= 10){
            echo $number . '<br>';
        $number += $number/2;
        }
        ?>
    </body>
</html>
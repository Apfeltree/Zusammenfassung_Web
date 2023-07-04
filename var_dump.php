<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        var_dump

            Gibt alle Informationen zu einer Variable aus.
     
        

        Syntax

            var_dump(mixed $value, mixed ...$values): void

        

        Parameter-Liste

        - value
        
            Der auszugebende Ausdruck.

        - values

            Weitere auszugebende Ausdrücke.
            

        Rückgabewert

            Es wird kein Wert zurückgegeben.    

    -->
    <?php

        $b = 3.1;
        $c = true;
        var_dump($b, $c); 
        // float(3.1) , bool(true)

        $a = array(1, 2, array("a", "b", "c"));
        var_dump($a);
        /*
        Ausgabe:
        array(3) {
            [0]=>
            int(1)
            [1]=>
            int(2)
            [2]=>
            array(3) {
                [0]=>
                string(1) "a"
                [1]=>
                string(1) "b"
                [2]=>
                string(1) "c"
            }
        }
        */

    ?>
</body>
</html>
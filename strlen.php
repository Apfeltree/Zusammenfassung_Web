<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        strlen

            Gibt die Länge der Zeichenkette string zurück.
     
        
        Syntax

            strlen(string $string): int

        

        Parameter-Liste

        - string
        
            Der String, dessen Länge ermittelt wird.

        

        Rückgabewert

            Die Länge von string in Bytes. 
    -->
    <?php
        // strlen() ermittelt die Länge der Zeichenkette
        echo strlen("1234") . "<br>";   // = 4
        echo strlen("abcd") . "<br>";   // = 4
        echo strlen("    ") . "<br>";   // = 4
        $beispielString = "hallo";
        echo strlen($beispielString) . "<br>"; // = 5
    ?>
</body>
</html>
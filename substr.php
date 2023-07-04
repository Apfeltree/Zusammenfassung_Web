<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        substr

            Gibt den Teil von string zurück, der durch die Parameter
            offset und length definiert wurde.
     
        
        Syntax

            substr(string $string, int $offset, ?int $length = null): string

        

        Parameter-Liste

        - string
        
            Der Eingabestring.

        - offset

            Positiver Zahlenwert: Von links nach rechts auslesen
            Negativer Zahlenwert: Von rechts nach links auslesen

        - length | optionaler Parameter

            Positiver Zahlenwert: Länge ab offset
            Negativer Zahlenwert: Schneidet von rechts nach links den String ab
        

        Rückgabewert

            Gibt den extrahierten Teil von string oder einen leeren String zurück.

    -->
    <?php
        $rest = substr("abcdef", -1);    // gibt "f" zurück
        var_dump($rest);
        echo "<br>";
        $rest = substr("abcdef", -2);    // gibt "ef" zurück
        var_dump($rest);
        echo "<br>";
        $rest = substr("abcdef", -3, 1); // gibt "d" zurück
        var_dump($rest);
        echo "<br>";
        $rest = substr("abcdef", 0, -1);  // gibt "abcde" zurück
        var_dump($rest);
        echo "<br>";
        $rest = substr("abcdef", 2, -1);  // gibt "cde" zurück
        var_dump($rest);
        echo "<br>";
        $rest = substr("abcdef", 4, -4);  // gibt "" zurück; vor PHP 8.0.0 wurde false zurückgegeben
        var_dump($rest);
        echo "<br>";
        $rest = substr("abcdef", -3, -1); // gibt "de" zurück
        var_dump($rest);

    ?>
</body>
</html>
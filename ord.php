<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ord()</title>
</head>
<body>
    <!-- 
        ord

            Interpretiert den ASCII-Wert des ersten Bytes von character 
            als vorzeichenlose Ganzzahl zwischen 0 und 255.

            Liegt die Zeichenkette in einer Ein-Byte-Kodierung, wie ASCII, ISO-8859 oder Windows 1252, 
            vor, ist dies gleichwertig zur Rückgabe der Position des Zeichens in der Zuordnungstabelle des Zeichensatzes. 
            Allerdings ist zu beachten, dass diese Funktion keine Zeichenkettenkodierung kennt, 
            und insbesondere niemals einen Unicode-Codepoint in einer Multibyte-Kodierung wie UTF-8 oder UTF-16 erkennt.

            Die Funktion ist das Gegenstück zu chr().



        Syntax

            ord(string $character): int


        
        Parameter-Liste 

        - character

            Eine Zeichenkette (vorzugsweise mit der Länge 1)



        Rückgabewerte

            Ein Integer zwischen 0 und 255.

     -->
    <?php
    // "H" = 72 , "a" = 97 , "l" = 108 , "l" = 108 , "o" = 111

    $str = chr(72) . chr(97) . chr(108) . chr(108) . chr(111);
    echo $str . "<br>";

    echo ord("H") . " | " . ord("a") . " | " . ord("l") . " | " . ord("l") . " | " . ord("o") . "<br>";
    // Wenn ein String mit mehr als einem Zeichen übergeben wird, wird IMMER nur das ERSTE Zeichen ausgelesen.
    var_dump(ord("Hallo"))
    ?>
</body>
</html>
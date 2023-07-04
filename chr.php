<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chr()</title>
</head>
<body>
    <!-- 
        chr

            Gibt eine einstellige Zeichenkette zurück, die das angegebene Zeichen enthält, wobei codepoint als vorzeichenlose Ganzzahl interpretiert wird.
            Diese Funktion kann verwendet werden, um eine einstellige Zeichenkette in einer Ein-Byte-Kodierung wie ASCII, ISO-8859 oder Windows 1252 zu erzeugen, 
            indem die Position des gewünschten Zeichens in der Zuordnungstabelle der Kodierung übergeben wird. 
            Allerdings ist zu beachten, dass diese Funktion keine Zeichenkettenkodierung kennt, und insbesondere kein Unicode-Codepoint übergeben werden kann, 
            um eine Zeichenkette in einer Multibyte-Kodierung wie UTF-8 oder UTF-16 zu erzeugen.
            Die Funktion ist das Gegenstück zu ord(). 

        Syntax:

            chr(int $codepoint): string



        Parameter-Liste

        - codepoint

            Ein Integer zwischen 0 und 255.



        Rückgabewerte

            Eine einstellige Zeichenkette, die das angegebene Byte enthält.

     -->


    <?php
        $str = chr(72) . chr(97) . chr(108) . chr(108) . chr(111);
        echo $str;
    ?>
</body>
</html>
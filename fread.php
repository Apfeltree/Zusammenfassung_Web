<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fread()</title>
</head>
<body>
    <!-- 
        fread

            fread() liest bis zu length Bytes vom Dateizeiger stream. Das Lesen wird beendet, 
            sobald eine der folgenden Bedingungen eintritt:

            - length Bytes wurden gelesen
            - Das Dateiende (EOF, end of file) wurde erreicht.



        Syntax

            fread(resource $stream, int $length): string|false


        
        Parameter-Liste

        - stream

            Eine Dateisystemressource (resource), wie sie in der Regel von fopen() zurückgegeben wird.

        - length

            Bis zu length Bytes lesen.


  
        Rückgabewerte

            Gibt die ausgelesene Zeichenkette zurück. Bei einem Fehler wird false zurückgegeben.
     -->
    <?php
        // Dateipfad setzen
        $filename = "somefile.txt";
        // Dateistream öffnen
        $dateiStream = fopen($filename, "r");
        // Lese Datei anhand Bytezahl (in diesem Fall Dateigröße)
        $contents = fread($dateiStream, filesize($filename));
        // Schließe Stream
        fclose($dateiStream);
        // gebe den String aus
        echo $contents . "<br>";
        var_dump($contents);
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fclose()</title>
</head>
<body>
    <!-- 
        fclose

            Die Datei, auf die stream zeigt, wird geschlossen.
            
            
        Syntax

            fclose(resource $stream): bool


        Parameter-Liste

        - stream

            Der Datei-Zeiger muss gültig sein, d.h. die Datei, auf die gezeigt wird muss zuvor mit fopen() oder fsockopen() geöffnet worden sein.


        Rückgabewerte

            Gibt bei Erfolg true zurück. Bei einem Fehler wird false zurückgegeben. 
     -->


    <?php

        $handle = fopen('somefile.txt', 'r');

        fclose($handle);

    ?>

</body>
</html>
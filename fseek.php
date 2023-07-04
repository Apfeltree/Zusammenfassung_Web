<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fseek()</title>
</head>
<body>
    <!-- 
        fseek()

            Positioniert den Dateizeiger



        Syntax

            fseek(resource $stream, int $offset, int $whence = SEEK_SET): int


        
        Parameter-Liste

        - stream

            Eine Dateisystemressource (resource), wie sie in der Regel von fopen() zurückgegeben wird.

        - offset

            Der Offset.
            Um zu einer Position vor EOF zu gelangen,
            übergeben Sie in offset einen negativen Wert
            und setzen Sie whence auf SEEK_END.

        - whence

            whence Were sind:
                - SEEK_SET - Setzt Position gleich offset Bytes.
                - SEEK_CUR - Setzt Position auf die aktuelle Stelle 
                  plus offset.
                - SEEK_END - Setzt die Position ans Ende der 
                  Datei plus offset. 
        

        Rückgabewerte

            Bei Erfolg wird 0 zurückgegeben, andernfalls -1
    
        -->
<?php
    
    $fp = fopen('somefile.txt', 'r');

    // lies einige Daten 
    $data = fgets($fp, 4096);

    // gehe zurück an den Anfang der Datei
    // das selbe wie rewind($fp)
    fseek($fp, 0);
    
?>

</body>
</html>
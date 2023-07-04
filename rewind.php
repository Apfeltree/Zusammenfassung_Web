<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rewind()</title>
</head>
<body>
    <!-- 
        rewind

            Setzt die Position eines Dateizeigers auf den Anfang

        
        
        Syntax

            rewind(resource $stream): bool



        Parameter-Liste

        - stream

            Der Dateizeiger muss gültig sein und auf eine Datei zeigen, die zuvor erfolgreich durch fopen() geöffnet wurde.


        
        Rückgabewerte

            Gibt bei Erfolg true zurück. Bei einem Fehler wird false zurückgegeben.
     -->
    <?php
        // Defimiere Dateipfad
        $dateiPfad = "./somefile.txt";

        // Öffne Dateistream | der Dateizeiger sitzt nun am Anfang
        $dateiStream = fopen("./somefile.txt", "r");

        // Lese ganze Datei aus und gebe den Text aus
        // Der Pointer des Dateistreams ist nun an der letzten Stelle
        echo fread($dateiStream , filesize($dateiPfad)) . "<br>";
        
        // Wenn jetzt versucht wird die Datei erneut auszulesen wird
        // ein leerer String zurückgegeben.
        echo fread($dateiStream , filesize($dateiPfad)) . "<br>";

        // Um den Dateizeiger wieder auf die letze Stelle zu setzen
        // kann rewind() benutzt werden
        rewind($dateiStream);

        // Jetzt kann die Datei erneut ausgelesen werden
        echo fread($dateiStream , filesize($dateiPfad));
    ?>
</body>
</html>
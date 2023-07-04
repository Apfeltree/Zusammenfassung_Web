<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feof()</title>
</head>
<body>
    <!-- 
        feof

             Prüft, ob ein Dateizeiger am Ende der Datei steht. 

        
        Syntax

            feof(resource $stream): bool


        
        Parameter-Liste

        - stream

            Der Zeiger auf eine Datei muss gültig sein und auf eine Datei verweisen, 
            die vorher erfolgreich mit fopen() oder fsockopen() geöffnet 
            (und nicht bereits von fclose() geschlossen) wurde.



        Rückgabewerte

            Gibt true zurück, wenn der Dateizeiger an EOF (Dateiende) steht oder ein Fehler auftritt (inklusive Socket-Zeitüberschreitung); ansonsten wird false zurückgegeben.

     -->
    <?php
        $dokument = fopen("./somefile.txt", "r");
        echo "Starte Auslesen" . "<br>";
        // Solange Dateiende nicht erreicht ist, wird die Schleife wiederholt
        while(!feof($dokument)){
            // fgets liest bis zum nächsten Zeilenumbruch
            echo fgets($dokument) . "<br>";
        }
        echo "Datei komplett ausgelesen!";
    ?>
</body>
</html>
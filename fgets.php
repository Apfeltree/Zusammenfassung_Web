<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fgets()</title>
</head>
<body>
    <!-- 
        fegts

            Liest die Zeile von der Position des Dateizeigers.



        Syntax

             fgets(resource $stream, ?int $length = null): string|false

        
        
        Parameter-Liste

        - stream

            Der Zeiger auf eine Datei muss gültig sein und auf eine Datei verweisen, 
            die vorher erfolgreich mit fopen() oder fsockopen() geöffnet (und nicht bereits von fclose() geschlossen) wurde.

        - length | optionaler Parameter

            Der Lesevorgang endet, wenn length - 1 Bytes gelesen wurden, 
            bei einem Zeilenumbruch (der im Rückgabewert enthalten ist) oder am Dateiende (EOF) (je nachdem, was zuerst kommt). 
            Wurde keine Länge übergeben, wird aus dem Stream gelesen, bis das Zeilenende erreicht ist.



        Rückgabewerte ¶

            Gibt eine Zeichenkette mit einer Länge von bis zu length - 1 Bytes zurück, 
            die aus der Datei gelesen wurde, auf die stream zeigt.

            Wenn keine Daten mehr aus dem Dateizeiger zu lesen sind, wird false zurückgegeben.

            Wenn ein Fehler auftritt, wird false zurückgegeben.

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
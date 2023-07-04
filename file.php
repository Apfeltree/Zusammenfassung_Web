<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file()</title>
</head>
<body>
    <!-- 
        file

             Liest eine komplette Datei in ein Array.


        
        Syntax

            file(string $filename, int $flags = 0, ?resource $context = null): array|false



        
        Parameter-Liste ¶

        - filename

            Der Pfad zur Datei.
        
        - flags

            Der optionale Parameter flags kann aus einer oder mehreren der folgenden Konstanten bestehen:

            FILE_USE_INCLUDE_PATH
                Suche nach der Datei im include_path 
            FILE_IGNORE_NEW_LINES
                Entferne den Zeilenumbruch am Ende jedes Array-Elements 
            FILE_SKIP_EMPTY_LINES
                Überspringe leere Zeilen 
            FILE_NO_DEFAULT_CONTEXT
                Verwende nicht den Standardkontext 

        - context

            Eine Stream-Kontext-Ressource.



        Rückgabewerte

            Gibt die Datei in einem Array zurück. Jedes Element des Arrays entspricht einer Zeile in der Datei, 
            ohne dass der Zeilenumbruch entfernt wird. Im Fehlerfall gibt file() false zurück.

            Hinweis:
            Jede Zeile im resultierenden Array enthält den Zeilenumbruch, 
            außer es wird FILE_IGNORE_NEW_LINES verwendet.
     -->
    <?php
        //file() ließt die komplette Datei aus und speichert jede Zeile in das Array
        meinVar_Dump(file("./somefile.txt"));


        // Eigene function um ein Array schöner auszugeben :)
        function meinVar_Dump($array) {
            echo "<pre>";
            var_dump($array);
            echo "</pre>";
        }
    ?>
    
</body>
</html>
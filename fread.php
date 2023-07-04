<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fread()</title>
</head>
<body>
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
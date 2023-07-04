<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $rest = substr("abcdef", -1);    // gibt "f" zurück
        $rest = substr("abcdef", -2);    // gibt "ef" zurück
        $rest = substr("abcdef", -3, 1); // gibt "d" zurück
        $rest = substr("abcdef", 0, -1);  // gibt "abcde" zurück
        $rest = substr("abcdef", 2, -1);  // gibt "cde" zurück
        $rest = substr("abcdef", 4, -4);  // gibt "" zurück; vor PHP 8.0.0 wurde false zurückgegeben
        $rest = substr("abcdef", -3, -1); // gibt "de" zurück
    ?>
</body>
</html>
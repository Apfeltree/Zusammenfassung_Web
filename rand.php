<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Schleife erstellt 5 Zufallszahlen
        for ($i=0; $i < 5; $i++) {
            echo rand() . "<br>";
        }
        // Schleife erstellt 5 Zufallszahlen zwischen 0 und 50 (inklsive)
        for ($i=0; $i < 5; $i++) {
            echo rand(0,50) . "<br>";
        }

    ?>
</body>
</html>
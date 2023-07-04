<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rand()</title>
</head>
<body>
    <!-- 
        rand

            Erzeugt eine zufällige Zahl

        
        
        Syntax

            rand(): int

            rand(int $min, int $max): int

            Gibt eine Pseudozufallszahl zwischen min und max (inklusive) zurück oder zwischen 0 und getrandmax(), falls keine Parameter angegeben wurden. 
            Wenn z. B. ein Zufallswert zwischen 5 und 15 benötigt wird, so wäre der Aufruf dafür rand(5, 15).


            
        Parameter-Liste

        - min

            Der niedrigste zurückzugebende Wert (Vorgabe: 0)

        - max

            Der höchste zurückzugebende Wert (Vorgabe: getrandmax())


        
        Rückgabewerte

            Ein Pseudozufallswert zwischen min (oder 0) und max (oder getrandmax(), inklusive).
     -->
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
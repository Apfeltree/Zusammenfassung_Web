<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>implode()</title>
</head>
<body>
    <!-- 
        implode

            Verbindet Array-Elemente zu einem String



        Syntax

            implode(?string $separator, array $array): string


        
        Parameter-Liste

        - separator | optionaler Parameter

            Das Zeichen mit dem die Element getrennt werden sollen

        - array

            Das Array mit den zusammenzufügenden Zeichenketten.


        
        Rückgabewerte

            Gibt einen String mit einer String-Repräsentation aller Array-Elemente in der gleichen Reihenfolge 
            wie im Array zurück, 
            bei dem die einzelnen Array-Elemente mit dem im Parameter separator angegebenen String verbunden werden.

     -->
<?php
    $array = ['lastname', 'email', 'phone'];
    var_dump(implode(" | ", $array)); // string(20) "lastname | email | phone"

    echo "<br>";

    // Leere Zeichenkette, wenn ein leeres Array genutzt wird
    var_dump(implode([])); // string(0) ""

    echo "<br>";

    // Das Trennungszeichen ist optional:
    var_dump(implode(['a', 'b', 'c'])); // string(3) "abc"
?>

</body>
</html>
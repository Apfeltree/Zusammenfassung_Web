<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
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
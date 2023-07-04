<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // "H" = 72 , "a" = 97 , "l" = 108 , "l" = 108 , "o" = 111

    $str = chr(72) . chr(97) . chr(108) . chr(108) . chr(111);
    echo $str . "<br>";

    echo ord("H") . " | " . ord("a") . " | " . ord("l") . " | " . ord("l") . " | " . ord("o") . "<br>";
    // Wenn ein String mit mehr als einem Zeichen übergeben wird, wird IMMER nur das ERSTE Zeichen ausgelesen.
    var_dump(ord("Hallo"))
    ?>
</body>
</html>
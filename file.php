<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file()</title>
</head>
<body>
    <!-- 

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
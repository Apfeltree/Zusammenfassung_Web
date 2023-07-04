<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>explode()</title>
</head>
<body>
    <!-- 
        explode

            Gibt ein Array aus Zeichenketten zurück,
            die jeweils Teil von string sind. Die Abtrennung erfolgt dabei an der mit separator angegebenen Zeichenkette. 



        Syntax

             explode(string $separator, string $string, int $limit = PHP_INT_MAX): array


    
        Parameter-Liste ¶

        - separator

            Die Begrenzungszeichenkette.

        - string

            Die Eingabezeichenkette.
        
        - limit

            Ist der Parameter limit angegeben und positiv, enthält das zurückgegebene Array maximal limit Elemente, wobei das letzte Element den Rest von string beinhaltet.

            Ist der Parameter limit negativ, werden alle Teilzeichenketten bis auf die letzten -limit-Teile zurückgegeben.

            Wenn der Parameter limit gleich 0 ist, wird er wie 1 behandelt.


        
        Rückgabewerte

            Gibt ein Array von Strings zurück, die durch Aufsplitten des Parameters string an Begrenzungen durch separator erzeugt werden. 

     -->


    <?php
        /*
        Eine Zeichenkette, die nicht das Trennzeichen enthält, wird einfach
        ein ein-elementiges Array mit der ursprünglichen Zeichenkette liefern.
        */
        $input1 = "hallo";
        $input2 = "hallo,da";
        $input3 = ',';
        var_dump( explode( ',', $input1 ) );
        var_dump( explode( ',', $input2 ) );
        var_dump( explode( ',', $input3 ) );
    ?>

</body>
</html>
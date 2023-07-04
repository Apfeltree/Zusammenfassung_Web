<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fopen()</title>
</head>
<body>
    <!-- 
        fopen

            fopen — Öffnet eine Datei oder URL



        Syntax

            fopen(
                string $filename,
                string $mode,
                ?bool $use_include_path = false,
                ?resource $context = null
            ): resource|false


        
        Parameter-Liste

        - filename

            Wenn filename die Form "schema://..." hat, wird angenommen, dass es sich hier um eine URL handelt, 
            und PHP sucht nach einem Protokollhandler (auch als Wrapper bekannt) für dieses Schema. 
            Sind keine Wrapper für dieses Protokoll registriert, gibt PHP einen Hinweis aus, 
            um Ihnen zu helfen, mögliche Probleme in Ihrem Skript zu erkennen, und fährt dann fort, 
            als ob filename eine reguläre Datei spezifiziert.

            Ist PHP zu dem Schluss gekommen, dass filename eine lokale Datei spezifiziert, 
            wird es versuchen, einen Stream an dieser Datei zu öffnen. Die Datei muss für PHP zugreifbar sein, 
            weshalb Sie sicherstellen müssen, dass die Dateirechte diesen Zugriff ermöglichen. 
            Wenn Sie open_basedir aktiviert haben, können weitere Einschränkungen gelten.

            Kam PHP zum Schluss, dass es sich bei filename um ein registriertes Protokoll handelt, 
            und ist dieses Protokoll als eine Netzwerk-URL registriert, prüft PHP, ob allow_url_fopen aktiviert ist. 
            Ist es nicht aktiviert, gibt PHP eine Warnung aus, und der Aufruf von fopen scheitert.

            Es ist darauf zu achten, unter Windows alle Backslash-Zeichen, die in Pfaden genutzt werden, 
            zu maskieren oder Schrägstriche (Slashes) zu nutzen.
            <?php
            $handle = fopen("c:\\verzeichnis\\ressource.txt", "r");
            ?>

        - mode

            Der Parameter mode spezifiziert den Zugriffstyp, der vom Stream gefordert wird. Es kann einer der folgenden sein:
            Eine Liste der möglichen Modi von fopen() mittels mode
            'r' 	Nur zum Lesen geöffnet; platziere den Dateizeiger auf den Dateianfang.
            'r+' 	Zum Lesen und Schreiben geöffnet; platziere den Dateizeiger auf den Dateianfang.
            'w' 	Nur zum Schreiben geöffnet; platziere den Dateizeiger auf den Dateianfang und kürze die Datei auf eine Länge von 0. 
                    Existiert die Datei nicht, versuche, diese zu erzeugen.
            'w+' 	Zum Schreiben und Lesen geöffnet; ansonsten verhält es sich wie 'w'..
            'a' 	Nur zum Schreiben geöffnet; platziere den Dateizeiger auf das Dateiende.
                    Existiert die Datei nicht, versuche, diese zu erzeugen. 
                    In diesem Modus ist fseek() wirkungslos; beim Schreiben wird immer angehängt.
            'a+' 	Zum Schreiben und Lesen geöffnet; platziere den Dateizeiger auf das Dateiende. 
                    Existiert die Datei nicht, versuche, diese zu erzeugen. 
                    In diesem Modus wirkt sich fseek() nur auf die Leseposition aus; beim Schreiben wird immer angehängt.
            'x' 	Erzeuge und öffne nur zum Schreiben; platziere den Dateizeiger auf den Dateianfang. 
                    Falls die Datei schon existiert, wird der fopen()-Aufruf fehlschlagen, 
                    indem er false zurückgibt und dem einen Fehler der Stufe E_WARNING auslöst. 
                    Existiert die Datei nicht, versuche, diese zu erzeugen. 
                    Dies ist zur Angabe der O_EXCL|O_CREAT-Flags für den darunterliegenden open(2)-Systemaufruf äquivalent.
            'x+' 	Erzeuge und öffne zum Schreiben und Lesen; ansonsten ist das Verhalten gleich wie bei 'x'.
            'c' 	Öffne die Datei nur zum Schreiben. Wenn die Datei nicht existiert, wird diese erzeugt. 
                    Wenn sie existiert, wird sie weder gekürzt (im Gegensatz zu 'w'), 
                    noch schlägt der Aufruf dieser Funktion fehl (wie dies mit 'x' der Fall ist). 
                    Der Dateizeiger wird auf den Dateianfang platziert. Dies kann nützlich sein, 
                    wenn man eine "beratende" (kooperative) Sperre erhalten möchte (siehe flock()), 
                    bevor man versucht, die Datei zu ändern, da die Nutzung von 'w' die Datei kürzen könnte, 
                    bevor die Sperre erhalten wurde (falls das Kürzen gewünscht ist, kann ftruncate() genutzt werden, 
                    nachdem die Sperre angefragt wurde).
            'c+' 	Öffne Datei zum Lesen und Schreiben; ansonsten ist das Verhalten gleich wie bei 'c'.
            'e' 	Setzt das Flag close-on-exec für den geöffneten Datei-Deskriptor. 
                    Nur verfügbar, wenn PHP auf POSIX.1-2008-konformen System kompiliert wurde.

            Hinweis:

            Verschiedene Betriebssysteme haben unterschiedliche Konventionen für das Zeilenende. 
            Wenn Sie eine Textdatei schreiben und einen Zeilenumbruch einfügen möchten, 
            müssen Sie das/die korrekte(n) Zeilenendezeichen für Ihr Betriebssystem nutzen. 
            Unix-basierte Systeme nutzen \n als Zeilenendezeichen, 
            Windows-basierte Systeme nutzen \r\n als Zeilenendezeichen und 
            Macintosh-basierte Systeme (Mac OS Classic) nutzten \r als Zeilenendezeichen.

            Wenn Sie die falschen Zeilenendezeichen beim Schreiben Ihrer Dateien nutzen, 
            kann es sein, dass andere Anwendungen, die diese Dateien öffnen, "seltsam aussehen".

        - use_include_path | optionaler Parameter

            Der optionale dritte Parameter use_include_path kann auf '1' oder true gesetzt werden, wenn sie wollen, 
            dass nach der Datei auch im include_path gesucht wird.

        - context | optionaler Parameter

            Eine Stream-Kontext-Ressource.

     -->
</body>
</html>
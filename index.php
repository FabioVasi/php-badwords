<?php

/*
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.

Gestire il tutto con due file diversi.

- index.php
- script.php

Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server tramite il form (occhio a quato detto stamattina sui form e gli attributi necessari).

Il secondo file riceverà la richiesta ed eseguirà queste operazioni:

- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare
*/

    var_dump($_GET);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    
    <form action="script.php" method="GET">

        <input type="text" name="randomwords" id="randomwords" placeholder="Type here your text...">
        <button type="submit">Invia</button>

    </form>

</body>
</html>
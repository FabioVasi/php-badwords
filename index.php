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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="m-2">
    
    <form action="script.php" method="GET">

        <div class="form-floating">

            <textarea class="form-control w-50 mb-3" name="paragraph" id="paragraph" placeholder="Leave a comment here" style="height: 100px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ullam suscipit quisquam minus magnam nesciunt, odit explicabo reiciendis quaerat inventore consectetur minima aut dolorem accusantium praesentium! Minima recusandae nesciunt ab.</textarea>
            
            <label for="paragraph">Type your text here...</label>

        </div>

        <input class="form-control w-50 mb-3" type="text" name="randomwords" id="randomwords" placeholder="Type your text here...">
        
        <button type="submit">Invia</button>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
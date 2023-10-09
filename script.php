<?php

    var_dump($_GET);
    var_dump($_POST);

    $badWords = $_POST["randomwords"];
    $paragraph = $_POST["paragraph"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script</title>
</head>
<body>

    <h1><?php echo $_GET["randomwords"] ?></h1>

    <h2><?php echo $_GET["paragraph"] ?></h2>

    <h3><?php echo $badWords ?> <?php echo $paragraph ?></h3>


    
</body>
</html>
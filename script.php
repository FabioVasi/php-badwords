<?php

    $badWords = $_POST["randomwords"];

    $paragraph = $_POST["paragraph"];

    $length = strlen($paragraph);

    $censure = str_replace($badWords, '***', $paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script</title>
</head>
<body>

    <h2><?php echo $paragraph ?></h2>.

    <p>Paragraph length: <?php echo $length ?></p>

    <h2>Word to be censured: <?php echo $badWords ?></h2>

    <h3><?php echo $censure ?></h3>
    
</body>
</html>
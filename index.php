<?php 
    $text = "e che cacchio!";

    $length = strlen($text);

    $cambio_parola = $_GET["text"];

    $bwcensored = str_replace($cambio_parola, "*****", $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>

    <h1>Badwords</h1>
    <div><?php echo $text; ?></div> <br>
    <div class="m-2"><?php echo "lunga: " . $length . " caratteri"; ?></div><br>
    <div><?php echo $bwcensored; ?></div>

    
</body>
</html>
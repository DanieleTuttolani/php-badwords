<?php 
    $word = $_GET["word"] ;
    $phrase = $_GET["phrase"];
    $each_word = explode(" ", $phrase);
    $result = '';
    if (str_contains($phrase, $word)) {
        $result = str_replace($word, '***' , $phrase);
    }else if(!str_contains($phrase, $word)) {
        $result .= $phrase;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>risultato</title>
</head>
<body>
    <h2>la parola da censurare è:</h2>
    <p><?php echo  $word . '!' ?> </p>
    <hr>
    <h2>Ecco la frase che hai inserito</h2>
    <p><?php echo $phrase ?> </p>
    <hr>
    <h1>Risultato</h1>
    <p><?php echo $result ?></p>
</body>
</html>
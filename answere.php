<?php 
  $_GET["word"] ;
 $_GET["phrase"]
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
    <p><?php echo  $_GET["word"] . '!' ?> </p>
    <hr>
    <h2>Ecco la frase che hai inserito</h2>
    <p><?php echo $_GET["phrase"] ?> </p>
</body>
</html>
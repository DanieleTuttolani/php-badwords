<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daniele bad words</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <div class="container text-center">
        <form action="GET">
            
            <div class="mb-3">
                <label for="word-area" class="form-label">Parola da censurare</label>
                <input type="text" class="form-control" id="word-area" placeholder="scrivi qui la parola...">
            </div>
            <div class="mb-3">
                <label for="text-area" class="form-label">Frase con parola interessata</label>
                <textarea class="form-control" id="text-area" rows="3"></textarea>
            </div>
            <button class="btn btn-primary">Invia Richiesta</button>
        </form>
    </div>
</body>
</html>
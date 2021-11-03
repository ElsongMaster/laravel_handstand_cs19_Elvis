<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="info-sender">
        <p>Nom: <span>{{$dataMsg["namesender"]}}</span></p>
        <p>Adresse mail: <span>{{$dataMsg["emailsender"]}}</span></p>
    </div>

    <h1>Sujet de la demande:</h1>

    <p>{{$dataMsg["subjectsender"]}}</p>

    
</body>
</html>

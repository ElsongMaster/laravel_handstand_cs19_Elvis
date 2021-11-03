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

    <h1>Bonne nouvelle ! un nouveau cours viens d'être crée et ça pourrait t'intéressé.</h1>

    <p>Voici les détails du cours:</p>
        <div class="card" style="width: 18rem;">
        <img src="{{asset('img/class/'.$dataClasse["image"])}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Nom: <span class="text-info">{{$dataClasse["nom"]}}</span></h5>
            <p class="card-text">Horaire: <span class="text-info">{{$dataClasse["horaire"]}}</span></p>
            <p class="card-text">Catégorie: <span class="text-info">{{$dataClasse["categorie"]}}</span></p>
            <p class="card-text">Nombre de personnes inscrite: <span class="text-info">{{$dataClasse["effectif"]}}</span></p>
            <p class="card-text">Date du cours: <span class="text-info">{{$dataClasse["date"]}}</span></p>
        </div>
        </div>
    
</body>
</html>

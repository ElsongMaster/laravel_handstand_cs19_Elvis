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

<h1 class="fs-4 mt-5">Un nouvelle Event à été crée voici les détails:</h1>
    <div class="card m-3" style="width: 60vw;">
        <div class="card-body">
            <h5 class="card-title">Titre: <span class="  text-info">{{$eventdata["titre"]}}</span></h5>
            <h5 class="card-title">Description: <span class="  text-info">{{$eventdata["description"]}}</span></h5>
            <p class="card-text">date: <span class="  text-info">{{$eventdata["date"]}}</span></p>
            <p class="card-text">Heure: <span class="  text-info">{{$eventdata["heure"]}}</span></p>
        </div>
    </div> 
    
</body>
</html>

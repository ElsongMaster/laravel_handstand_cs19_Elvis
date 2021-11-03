<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<!-- Button trigger modal -->
<button hidden type="button" id="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" hidden></button>
        </div>
        <div class="modal-body text-success">
            Votre paiement à bien été exécuté.
        </div>
        <div class="modal-footer">

            <a href="{{route('home')}}" class="btn btn-primary">Back to home</a>
        </div>
        </div>
    </div>
    </div>
<script type="text/javascript">
    var btn = document.getElementById('button');

    btn.click();
    // modal.classList.add('show');
</script>

</body>
</html>
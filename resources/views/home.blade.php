<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="position-absolute top-50 start-50 translate-middle" >
        <div class="row">
            <div class="card" style="width: 18rem;">
                <img src="/images/foto.jpg" class="card-img-top" alt="Creando diseños">
                <div class="card-body">
                    <h5 class="card-title">Proyecto Construcción de vistas</h5>
                    <p class="card-text">Proyecto en laravel para construcción de vistas con Blade.</p>
                    <a href="{{ route('users.index') }}" class="btn btn-primary">Ir a Menu Principal</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
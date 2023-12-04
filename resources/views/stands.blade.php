<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Stand - Feria Virtual</title>
    <!-- Agregar enlaces a Bootstrap y CSS personalizado -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Ferias Virtuales</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ferias">Ferias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register">Register</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="images/stand.jpeg" class="img-fluid" alt="Stand">
            </div>
            <div class="col-md-8">
                <h1>Stand de Exhibición</h1>
                <p>Bienvenido a nuestro stand virtual. Descubre nuestros productos y servicios.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <img src="images/producto1.jpg" class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <h5 class="card-title">Producto 1</h5>
                                <p class="card-text">Descripción del Producto 1.</p>
                                <a href="#" class="btn btn-primary">Detalles</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <img src="images/producto2.jpg" class="card-img-top" alt="Producto 2">
                            <div class="card-body">
                                <h5 class="card-title">Producto 2</h5>
                                <p class="card-text">Descripción del Producto 2.</p>
                                <a href="#" class="btn btn-primary">Detalles</a>
                            </div>
                        </div>
                    </div>
                    <!-- Puedes añadir más productos o servicios aquí -->
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <h2>Información Adicional</h2>
                <p>Aquí puedes incluir más detalles sobre tu empresa, servicios adicionales, testimonios, etc.</p>
            </div>
        </div>
    </div>

    <!-- Agregar enlaces a jQuery, Bootstrap JS y tu script personalizado -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="tu_script.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio - Ferias Virtuales</title>
    <!-- Enlaces a Bootstrap y CSS personalizado -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Ferias Virtuales</a>
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
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/feria1.png" class="d-block w-100" alt="Imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="images/feria2.png" class="d-block w-100" alt="Imagen 2">
                </div>
                <div class="carousel-item">
                    <img src="images/feria3.jpg" class="d-block w-100" alt="Imagen 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="row mt-5">
            <div class="col-md-6">
                <h2>Bienvenido a las Ferias Virtuales</h2>
                <p>Descubre una nueva forma de explorar y participar en ferias desde la comodidad de tu hogar.</p>
            </div>
            
            </div>
        </div>
    </div>
    <div class="row mt-5">
    <div class="col-md-6">
        <h2>Bienvenido a las Ferias Virtuales</h2>
        <p>Descubre una nueva forma de explorar y participar en ferias desde la comodidad de tu hogar.</p>

        <div class="mt-4">
            <!-- Sección de Próximas Ferias -->
            <h3>Próximas Ferias</h3>
            <ul>
                <li>Nombre de la Feria 1 - Fecha</li>
                <li>Nombre de la Feria 2 - Fecha</li>
                <!-- Agrega más ferias según sea necesario -->
            </ul>
        </div>

        <div class="mt-4">
            <!-- Sección de Noticias o Blog -->
            <h3>Noticias</h3>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Título de la Noticia 1</h5>
                    <p class="card-text">Descripción breve de la noticia. Puedes agregar más detalles aquí.</p>
                </div>
            </div>
            <!-- Agrega más noticias o entradas de blog según sea necesario -->
        </div>

        <div class="mt-4">
            <!-- Sección de Recursos Descargables -->
            <h3>Recursos Descargables</h3>
            <ul>
                <li><a href="link_al_catalogo.pdf" target="_blank">Catálogo de la Feria</a></li>
                <!-- Agrega más recursos descargables -->
            </ul>
        </div>

        <div class="mt-4">
            <!-- Sección de Testimonios -->
            <h3>Testimonios</h3>
            <div class="card">
                <div class="card-body">
                    <p>Testimonio de un participante sobre su experiencia en la feria virtual.</p>
                </div>
            </div>
            <!-- Agrega más testimonios -->
        </div>

        <div class="mt-4">
            <!-- Sección de Redes Sociales -->
            <h3>Síguenos en Redes Sociales</h3>
            <p>Enlaces a tus perfiles de redes sociales.</p>
            <!-- Agrega íconos o botones de redes sociales -->
        </div>
    </div>

    <div class="col-md-6">
        <!-- Video de presentación -->
        <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/QCqc3k0Tzbs" allowfullscreen></iframe>
</div>
    </div>
</div>


    <!-- Enlaces a jQuery, Bootstrap JS y tu script personalizado -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="tu_script.js"></script>
</body>
</html>

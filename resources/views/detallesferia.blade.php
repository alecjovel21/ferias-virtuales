<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de Feria</title>
    <!-- Enlace al archivo CSS de Bootstrap (asegúrate de tenerlo disponible) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <header>
        <!-- Barra de navegación con el logo y enlaces (Bootstrap Navbar) -->
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
                    <a class="nav-link" href="login">Inicio de session</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register">Registrate</a>
                </li>
            </ul>
        </div>
    </nav>
    </header>

    <section class="fair-details">
        <div class="container">
            <h1>Detalles de Feria</h1>
            <div class="row">
                <div class="col-md-8">
                    <h2>Nombre de la Feria</h2>
                    <p>Descripción detallada de la feria. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p><strong>Fecha:</strong> 10 de agosto de 2023</p>
                    <p><strong>Lugar:</strong> Ubicación de la feria</p>
                    <p><strong>Organizador:</strong> Nombre del organizador</p>
                    <p><strong>Contacto:</strong> Correo electrónico de contacto</p>
                    <p><strong>Página Web:</strong> Enlace a la página web de la feria</p>
                    <a href="stands" class="btn btn-primary"> Ir a Stand</a>
                </div>
                <div class="col-md-4">
                    <!-- Imagen representativa de la feria -->
                    <img src="images/feria1.png" alt="Feria">
                </div>
            </div>
        </div>
    </section>

    <!-- Pie de página (si es necesario) -->
    <footer>
        <div class="container">
            <p>&copy; 2023 Tu Compañía</p>
        </div>
    </footer>

    <script>
        // Agrega funcionalidad al botón de registro
        const registerButton = document.getElementById('registerButton');
        registerButton.addEventListener('click', () => {
            // Aquí puedes agregar la lógica para el proceso de registro o redirigir a una página de registro.
            // Por ejemplo:
            // window.location.href = 'pagina-de-registro.html';
        });
    </script>
</body>
</html>

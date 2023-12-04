<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Encabezado y enlaces a Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Contacto</title>
</head>
<body>
    <!-- Encabezado -->
    <header>
        <!-- Encabezado con el logo y la barra de navegación (usando Bootstrap Navbar) -->
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
                        <a class="nav-link" href="login">Inicio de sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register">Regístrate</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container mt-5">
        <h1>Página de Contacto</h1>
        <div class="row">
            <div class="col-md-6">
                <form id="contactForm">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Escribe tu nombre">
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo Electrónico</label>
                        <input type="email" class="form-control" id="correo" placeholder="Escribe tu correo electrónico">
                    </div>
                    <div class="form-group">
                        <label for="mensaje">Mensaje</label>
                        <textarea class="form-control" id="mensaje" rows="4" placeholder="Escribe tu mensaje"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                <p id="mensajeEnviado" style="display: none;">Mensaje enviado</p>
            </div>
            <div class="col-md-6">
                <h2>Información de Contacto</h2>
                <address>
                    <strong>Nombre de la Compañía</strong><br>
                    Dirección de la Compañía<br>
                    Ciudad, País<br>
                </address>
                <p><strong>Correo Electrónico:</strong> info@compania.com</p>
                <p><strong>Teléfono:</strong> +1 (123) 456-7890</p>
            </div>
        </div>
    </div>

    <!-- Pie de página (si es necesario) -->
    <footer>
        <!-- Contenido del pie de página -->
    </footer>

    <!-- Enlaces a Bootstrap y JavaScript (si es necesario) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function (event) {
            event.preventDefault(); // Evita que se recargue la página al enviar el formulario

            // Simulación de envío del formulario
            // Aquí podrías realizar una solicitud AJAX al servidor para enviar el formulario

            // Muestra el mensaje de "Mensaje enviado" después de enviar el formulario
            document.getElementById('mensajeEnviado').style.display = 'block';
        });
    </script>
    <!-- Script JavaScript -->
<script>
document.getElementById('contactForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Evita que se recargue la página al enviar el formulario

    // Obtener los valores del formulario
    let nombre = document.getElementById('nombre').value;
    let correo = document.getElementById('correo').value;
    let mensaje = document.getElementById('mensaje').value;

    // Datos a enviar en la solicitud AJAX
    let data = {
        nombre: nombre,
        correo: correo,
        mensaje: mensaje
    };

    // Simulación de una solicitud AJAX (código de ejemplo)
    // Aquí deberás usar el método adecuado para hacer una solicitud AJAX con Laravel
    // Este es solo un ejemplo simulado
    $.ajax({
        type: 'POST',
        url: '/enviar-correo', // Ruta a tu controlador en Laravel que manejará el envío de correos
        data: data,
        success: function (response) {
            // Muestra el mensaje de "Mensaje enviado" después de enviar el formulario
            document.getElementById('mensajeEnviado').style.display = 'block';
        },
        error: function (error) {
            // Manejar errores si la solicitud falla
            console.error(error);
        }
    });
});
</script>

</body>
</html>

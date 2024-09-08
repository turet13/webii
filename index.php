<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechSolutions - Inicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .hero-section {
            background: url('img/fondo_index.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .hero-section .btn-primary {
            margin-top: 20px;
        }
        .carousel-container {
            background-color: #04535c;
            background-size: cover;
            padding: 50px 0;
        }
        .testimonial-item {
            background: rgba(248, 249, 250, 0.5);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
        }
        .testimonial-item img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-bottom: 15px;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        footer a {
            color: #f8f9fa;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- Encabezado -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">TechSolutions</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="servicios.php">Servicios</a></li>
                <li class="nav-item"><a class="nav-link" href="equipo.php">Equipo</a></li>
                <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                <!-- Se eliminaron los enlaces a Política de Privacidad y Términos y Condiciones -->
            </ul>
        </div>
    </nav>

    <!-- Sección de presentación -->
    <header class="hero-section">
        <div class="container">
            <h1 class="display-4">Bienvenidos a TechSolutions</h1>
            <p class="lead">Soluciones tecnológicas innovadoras para tu negocio.</p>
            <a href="contacto.php" class="btn btn-primary btn-lg">Solicita una Consulta</a>
        </div>
    </header>

    <!-- Carrusel de testimonios -->
    <div class="carousel-container">
        <div id="testimoniosCarousel" class="carousel slide mt-5" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-block w-100 text-center testimonial-item">
                        <img src="img/cliente1.jpg" alt="Cliente 1">
                        <h5>"TechSolutions nos ayudó a mejorar nuestra infraestructura de TI de manera eficiente."</h5>
                        <p>- Elon Musk</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100 text-center testimonial-item">
                        <img src="img/cliente2.jpg" alt="Cliente 2">
                        <h5>"Gracias a su equipo, logramos automatizar muchos de nuestros procesos."</h5>
                        <p>- Gabriel Boric</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100 text-center testimonial-item">
                        <img src="img/cliente3.jpg" alt="Cliente 3">
                        <h5>"La implementación de nuevas tecnologías fue impecable y sin contratiempos."</h5>
                        <p>- Merlina</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100 text-center testimonial-item">
                        <img src="img/cliente4.jpg" alt="Cliente 4">
                        <h5>"Su apoyo en ciberseguridad ha sido fundamental para proteger nuestros datos."</h5>
                        <p>- Grupo Morat</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100 text-center testimonial-item">
                        <img src="img/cliente5.jpg" alt="Cliente 5">
                        <h5>"Un servicio excepcional y siempre disponibles para resolver nuestras dudas."</h5>
                        <p>- Billie Eilish</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#testimoniosCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#testimoniosCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>

    <!-- Pie de página -->
    <footer>
        <div class="container">
            <p>&copy; 2024 TechSolutions. Todos los derechos reservados.</p>
            <p><a href="politica_privacidad.php" target="_blank">Política de Privacidad</a> | <a href="terminos_condiciones.php" target="_blank">Términos y Condiciones</a></p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

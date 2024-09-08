<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechSolutions - Servicios</title>
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
        .service-card {
            border: 1px solid #dee2e6;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.2s;
            background-color: rgba(248, 249, 250, 0.9); /* Fondo con opacidad para mantener consistencia con la política de privacidad */
        }
        .service-card:hover {
            transform: scale(1.05);
        }
        .service-card img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            width: 100%;
            height: 200px;
            object-fit: cover;
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
    <!-- Encabezado y menú -->
    <?php include('navbar.php'); ?>
    
    <!-- Sección de presentación -->
    <header class="hero-section">
        <div class="container">
            <h1 class="display-4">Nuestros Servicios</h1>
        </div>
    </header>

    <!-- Servicios -->
    <div class="container mt-5">
        <div class="row">
            <!-- Servicio 1 -->
            <div class="col-md-4">
                <div class="card service-card mb-4">
                    <img src="img/consultoria.jpg" class="card-img-top" alt="Consultoría">
                    <div class="card-body">
                        <h5 class="card-title">Consultoría</h5>
                        <p class="card-text">Ofrecemos consultoría en tecnología para mejorar los procesos de tu empresa.</p>
                    </div>
                </div>
            </div>
            <!-- Servicio 2 -->
            <div class="col-md-4">
                <div class="card service-card mb-4">
                    <img src="img/desarrollo.jpg" class="card-img-top" alt="Desarrollo de Software">
                    <div class="card-body">
                        <h5 class="card-title">Desarrollo de Software</h5>
                        <p class="card-text">Creamos soluciones de software personalizadas para tu negocio.</p>
                    </div>
                </div>
            </div>
            <!-- Servicio 3 -->
            <div class="col-md-4">
                <div class="card service-card mb-4">
                    <img src="img/seguridad.jpg" class="card-img-top" alt="Seguridad Informática">
                    <div class="card-body">
                        <h5 class="card-title">Seguridad Informática</h5>
                        <p class="card-text">Protegemos tus datos y sistemas contra amenazas digitales.</p>
                    </div>
                </div>
            </div>
            <!-- Servicio 4 -->
            <div class="col-md-4">
                <div class="card service-card mb-4">
                    <img src="img/auditoria.jpg" class="card-img-top" alt="Análisis de Datos">
                    <div class="card-body">
                        <h5 class="card-title">Análisis de Datos</h5>
                        <p class="card-text">Analizamos los datos de tu empresa para obtener información valiosa.</p>
                    </div>
                </div>
            </div>
            <!-- Servicio 5 -->
            <div class="col-md-4">
                <div class="card service-card mb-4">
                    <img src="img/soporte.jpg" class="card-img-top" alt="Soporte Técnico">
                    <div class="card-body">
                        <h5 class="card-title">Soporte Técnico</h5>
                        <p class="card-text">Brindamos soporte técnico especializado para resolver cualquier inconveniente.</p>
                    </div>
                </div>
            </div>
            <!-- Servicio 6 -->
            <div class="col-md-4">
                <div class="card service-card mb-4">
                    <img src="img/gestion.jpg" class="card-img-top" alt="Gestión de Proyectos">
                    <div class="card-body">
                        <h5 class="card-title">Gestión de Proyectos</h5>
                        <p class="card-text">Gestionamos proyectos tecnológicos desde la planificación hasta la implementación.</p>
                    </div>
                </div>
            </div>
            <!-- Servicio 7 -->
            <div class="col-md-4">
                <div class="card service-card mb-4">
                    <img src="img/marketing.jpg" class="card-img-top" alt="Marketing Digital">
                    <div class="card-body">
                        <h5 class="card-title">Marketing Digital</h5>
                        <p class="card-text">Desarrollamos estrategias de marketing digital para potenciar tu presencia en línea.</p>
                    </div>
                </div>
            </div>
            <!-- Servicio 8 -->
            <div class="col-md-4">
                <div class="card service-card mb-4">
                    <img src="img/integracion.jpg" class="card-img-top" alt="Automatización de Procesos">
                    <div class="card-body">
                        <h5 class="card-title">Automatización de Procesos</h5>
                        <p class="card-text">Automatizamos procesos para mejorar la eficiencia y reducir costos.</p>
                    </div>
                </div>
            </div>
            <!-- Servicio 9 -->
            <div class="col-md-4">
                <div class="card service-card mb-4">
                    <img src="img/trasnformacion.jpg" class="card-img-top" alt="Formación en TI">
                    <div class="card-body">
                        <h5 class="card-title">Formación en TI</h5>
                        <p class="card-text">Ofrecemos cursos y talleres de formación en tecnología de la información.</p>
                    </div>
                </div>
            </div>
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

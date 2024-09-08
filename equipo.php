<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechSolutions - Equipo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .hero-section {
            background: url('img/fondo_index.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .team-card {
            border: 1px solid #dee2e6;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }
        .team-card:hover {
            transform: scale(1.05);
        }
        .team-card img {
            border-radius: 50%;
            width: 100%;
            height: auto;
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
        .separator {
            margin: 40px 0; /* Ajusta el margen según sea necesario */
            border-bottom: 1px solid #dee2e6;
        }
    </style>
</head>
<body>
    <!-- Encabezado y menú -->
    <?php include('navbar.php'); ?>

    <!-- Sección de presentación -->
    <header class="hero-section">
        <div class="container">
            <h1 class="display-4">Nuestro Equipo</h1>
            <p class="lead">Conoce a los expertos detrás de TechSolutions.</p>
        </div>
    </header>
    
    <!-- Equipo -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card team-card mb-4">
                    <img src="img/maria.jpg" class="card-img-top" alt="María Díaz Urbano">
                    <div class="card-body text-center">
                        <h5 class="card-title">María Díaz</h5>
                        <h5 class="card-title">Urbano</h5>
                        <p class="card-text">CEO</p>
                        <p class="card-text">Líder del equipo.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card team-card mb-4">
                    <img src="img/gustavo.jpg" class="card-img-top" alt="Gustavo Miranda Ojeda">
                    <div class="card-body text-center">
                        <h5 class="card-title">Gustavo Miranda Ojeda</h5>
                        <p class="card-text">Diseñador y soporte de la página.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card team-card mb-4">
                    <img src="img/hombre.jpg" class="card-img-top" alt="José Fernández">
                    <div class="card-body text-center">
                        <h5 class="card-title">José Fernández</h5>
                        <p class="card-text">Soporte Técnico.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card team-card mb-4">
                    <img src="img/mujer.jpg" class="card-img-top" alt="Laura García">
                    <div class="card-body text-center">
                        <h5 class="card-title">Laura García</h5>
                        <p class="card-text">Soporte Técnico.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Separador -->
        <div class="separator"></div>

        <!-- Mascotas -->
        <div class="row">
            <div class="col-md-3">
                <div class="card team-card mb-4">
                    <img src="img/deysy.jpg" class="card-img-top" alt="Deysy">
                    <div class="card-body text-center">
                        <h5 class="card-title">Deysy</h5>
                        <p class="card-text">Erizo de tierra - Mascota del equipo.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card team-card mb-4">
                    <img src="img/donald.jpg" class="card-img-top" alt="Donald">
                    <div class="card-body text-center">
                        <h5 class="card-title">Donald</h5>
                        <p class="card-text">Erizo de tierra - Mascota del equipo.</p>
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

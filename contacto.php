<?php
error_reporting(0);

$host = "localhost";
$dbname = "clase";
$dbuser = "root";
$password = "";

try {
    $conn = new mysqli($host, $dbuser, $password, $dbname);
    if ($conn->connect_error) {
        die("Conexión con problemas: " . $conn->connect_error);
    }
} catch (Exception $exe) {
    echo $conn->connect_error;
}

if (isset($_POST['flag']) && $_POST['flag'] == 1) {
    // Guardar datos en la base de datos
    $insertSql = "INSERT INTO contacto (nombre, telefono, email, motivo) 
    VALUES ('".$_POST['nombre']."', '".$_POST['telefono']."', '".$_POST['email']."', '".$_POST['motivo']."')";
    
    if (mysqli_query($conn, $insertSql)) {
        
        echo "<script>
            alert('Datos guardados correctamente.');
            window.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>alert('Error al guardar los datos: " . mysqli_error($conn) . "');</script>";  // Alerta de error
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechSolutions - Contacto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .hero-section {
            background: url('img/fondo_index.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .contact-form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-top: 50px;
        }
        .contact-form h2 {
            margin-bottom: 30px;
            color: #007bff;
        }
        .contact-form label {
            color: #333;
        }
        .contact-form input[type="submit"] {
            background-color: #007bff;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            padding: 10px;
            width: 100%;
        }
        .contact-form input[type="submit"]:hover {
            background-color: #0056b3;
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
            <h1 class="display-4">Contáctanos</h1>
            <p class="lead">Estamos aquí para ayudarte. Completa el formulario y nos pondremos en contacto contigo.</p>
        </div>
    </header>

    <!-- Formulario de contacto -->
    <div class="container">
        <div class="contact-form mx-auto" style="max-width: 600px;">
            <h2 class="text-center mb-4">Formulario de Contacto</h2>
            <form method="POST">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="number" class="form-control" id="telefono" name="telefono" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="motivo">Motivo:</label>
                    <textarea class="form-control" id="motivo" name="motivo" rows="4" required></textarea>
                </div>
                <input type="hidden" name="flag" value="1">
                <input type="submit" value="Guardar">
            </form>
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

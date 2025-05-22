<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    $host = "localhost"; // Servidor de la base de datos
    $usuario = "root"; // Usuario de MySQL (por defecto en XAMPP es "root")
    $clave = ""; // Contraseña de MySQL (por defecto está vacía en XAMPP)
    $bd = "ubiapp_db"; // 🔹 Cambia esto por el nombre de tu base de datos
    
    $conexion = new mysqli($host, $usuario, $clave, $bd);
    
    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    ?>
    

<body>
</html>
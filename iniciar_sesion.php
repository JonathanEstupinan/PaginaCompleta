<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    session_start();
    include("conexion.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $correo = $_POST["correo"];
        $contraseña = $_POST["contraseña"];
    
        $sql = "SELECT nit, nombres, contraseña, tipo_usuario FROM registro_app WHERE correo = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $resultado = $stmt->get_result();
    
        if ($resultado->num_rows > 0) {
            $usuario = $resultado->fetch_assoc();
    
            // Verificar la contraseña
            if (password_verify($contraseña, $usuario['contraseña'])) {
                // Iniciar sesión
                $_SESSION['nit'] = $usuario['nit'];
                $_SESSION['nombres'] = $usuario['nombres'];
                $_SESSION['tipo_usuario'] = $usuario['tipo_usuario'];
    
                // Redirigir según el tipo de usuario
                if ($usuario['tipo_usuario'] == "consumidor") {
                    header("Location: pag_consumidor.php");
                } elseif ($usuario['tipo_usuario'] == "productor") {
                    header("Location: pag_productor.php");
                } elseif ($usuario['tipo_usuario'] == "transportista") {
                    header("Location: pag_transportista.php");
                } else {
                    echo "Error: Tipo de usuario no válido.";
                }
                exit();
            } else {
                echo "Error: Contraseña incorrecta.";
            }
        } else {
            echo "Error: Correo no registrado.";
        }
    
        $stmt->close();
        $conexion->close();
    }
    
    ?>
    
    

<body>
</html>
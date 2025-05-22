<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    // 1️⃣ Conectar con la base de datos en XAMPP
    $servername = "localhost";  // Servidor (siempre "localhost" en XAMPP)
    $username = "root";         // Usuario por defecto en XAMPP
    $password = "";             // XAMPP no tiene contraseña por defecto
    $database = "ubiapp_db"; // Nombre de la base de datos

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // 2️⃣ Capturar los datos enviados desde el formulario
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $cedula = $_POST['Cédula'];
    $celular = $_POST['Celular'];
    $email = $_POST['email'];
   // $contraseña = $_POST['contraseña'];
    $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT); // Cifrar la contraseña

    $direccion = $_POST['direccion'];
    $tipo_usuario = $_POST['tipo_usuario'];

    // 3️⃣ Insertar datos en la base de datos
    $sql = "INSERT INTO registro_app (nit, nombres, apellidos, celular, correo, contraseña, direccion, tipo_usuario)
        VALUES ('$cedula', '$nombre', '$apellido',  '$celular', '$email', '$contraseña', '$direccion', '$tipo_usuario')";

    // 4️⃣ Verificar si se insertó correctamente
    if ($conn->query($sql) === TRUE) {
        echo "✅ Registro guardado con éxito.";
    } else {
        echo "❌ Error: " . $sql . "<br>" . $conn->error;
    }

    // 5️⃣ Cerrar la conexión
    $conn->close();
    ?>
<body>
</html>
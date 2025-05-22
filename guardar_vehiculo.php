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
    $database = "ubiapp_db"; // Reemplázalo con el nombre real de tu BD

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // 2️⃣ Capturar los datos enviados desde el formulario
    $modelo = $_POST['Modelo'];
    $referencia = $_POST['Referencia'];
    $capacidad = $_POST['Capacidad'];
    $cedula = $_POST['Cedula'];
    $placa = $_POST['Placa'];
    $chasis = $_POST['Chasis'];
    $cedula = $_POST['Cedula'];
    $marca = $_POST['Marca'];

  
    // 3️⃣ Insertar datos en la base de datos
    $sql = "INSERT INTO registro_vehiculo (cedula, modelo, referencia, capacidad, marca, placa, chasis )
        VALUES ('$cedula', '$modelo', '$referencia', '$capacidad', '$marca', '$placa', '$chasis')";

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
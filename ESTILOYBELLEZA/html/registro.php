<?php
$servername = "localhost"; // Nombre del servidor (por lo general, localhost)
$username = "root"; // Nombre de usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$database = "proyecto"; // Nombre de la base de datos

// Crear conexión  databaseproyecto
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "°";
}


// Verificar si el formulario se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $correo = $_POST['correo'];
    $cedula = $_POST['cedula'];
    $telefono = $_POST['telefono'];
    $gender = $_POST['gender'];
    $user = $_POST['user'];
    $password = $_POST['password'];

    // Preparar y bind
    $stmt = $conn->prepare("INSERT INTO usuario (nombre,  correo, cedula, telefono, sexo, usuario, contrasena) VALUES (?, ?, ?, ?, ?, ? , ?)");
    $stmt->bind_param("sssssss", $username,  $correo, $cedula, $telefono, $gender, $user, $password);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registro.css">
    <title>Registro</title>
</head>
<body>
    <nav class="navegation_principal">
        <ul>
            <li><a href="../html/index.php">INICIO</a></li>
            <li><a href="../html/nosotros.php">NOSOTROS</a></li>
            <li><a href="../html/citas.php">CITAS</a></li>
        </ul>
    </nav>

    <article class="container_1">
        <div class="registro">
            <div class="imagen_tarjeta">
                <img class="imagen_tarjeta" src="../img/nosotros3.jpg" alt=" Foto de nosotros">
                <p id="texto_tarjeta"> <strong> REGISTRO USUARIO </strong></p>
            </div>
        </div>
    </article>

    <article class="container_2">
        <div class="formulario">
            <form action="registro.php" method="POST">
                <label for="username"><i class="bi bi-person-fill"></i><b> Nombre</label></b>
                <input type="text" id="username" name="username" required>
                <br><br>
                <label for="lastname"><i class="bi bi-shield-lock-fill"></i><b> Apellidos</label></b>
                <input type="text" id="lastname" name="lastname" >
                <br><br>
                <label for="correo"><i class="bi bi-shield-lock-fill"></i><b> Email</label></b>
                <input type="correo" id="email" name="correo" required>
                <br><br>
                <label for="cedula"><i class="bi bi-shield-lock-fill"></i><b>Cedula</label></b>
                <input type="text" id="cedula" name="cedula" required>
                <br><br>
                <label for="telefono"><i class="bi bi-shield-lock-fill"></i><b> Celular</label></b>
                <input type="text" id="phone" name="telefono" required>
                <br><br>
                <label for="gender"><i class="bi bi-shield-lock-fill"></i><b> Sexo </label></b>
                <input type="text" id="gender" name="gender" required>
                <br><br>
                <label for="user"><i class="bi bi-shield-lock-fill"></i><b> Usuario </label></b>
                <input type="text" id="user" name="user" required>
                <br><br>
                <label for="password"><i class="bi bi-shield-lock-fill"></i><b> Contraseña</label></b>
                <input type="password" id="password" name="password" required>
                <br><br>
                <button type="submit" class="boton_registro"><b>Registrarme</b></button>
                <br><br>
                <button class="boton" onclick="window.location.href='index.html';">Volver</button>
            </form>
        </div>
    </article>
</body>
</html>
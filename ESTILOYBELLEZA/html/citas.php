<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['username'];
    $contrasena = $_POST['password'];

    $sql = "SELECT contrasena FROM usuario WHERE usuario='$usuario'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($contrasena, $row['contrasena'])) {
            $_SESSION['usuario'] = $usuario; // Establecer la sesión solo si la contraseña es correcta
            header("Location: usuario.php");
            exit();
        } else {
            $_SESSION['mensaje'] = "Contraseña incorrecta";
            $_SESSION['tipo_mensaje'] = "error"; // Tipo de mensaje (error, éxito, etc.)
        }
    } else {
        $_SESSION['mensaje'] = "Usuario no encontrado";
        $_SESSION['tipo_mensaje'] = "error"; // Tipo de mensaje (error, éxito, etc.)
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/citas.css">
    <title>Citas</title>
</head>
<body>
    <nav class="navegation_principal">
        <ul>
            <li><i class="bi bi-list"></i></li>
            <li><a href="../html/index.php">INICIO</a></li>
            <li><a href="../html/nosotros.php">NOSOTROS</a></li>
            <li><a href="../html/index.php">SERVICIOS</a></li>
            <li><a href="../html/citas.php">CITAS</a></li>
       </ul>
    </nav>

    <!-- Mostrar mensaje flotante si existe -->
    <?php
    if (isset($_SESSION['mensaje'])) {
        $tipoMensaje = isset($_SESSION['tipo_mensaje']) ? $_SESSION['tipo_mensaje'] : "error";
        $claseMensaje = ($tipoMensaje == "error") ? "mensaje-error" : "mensaje-exito";
        echo '<div id="mensaje-flotante" class="mensaje-flotante ' . $claseMensaje . '">' . $_SESSION['mensaje'] . '</div>';
        unset($_SESSION['mensaje']); // Limpiar el mensaje después de mostrarlo
        unset($_SESSION['tipo_mensaje']); // Limpiar el tipo de mensaje después de mostrarlo
    }
    ?>

    <article class="container_1">
        <div class="citas">
            <div class="imagen_citas">
                <img class="imagen_citas" src="../img/nosotros3.jpg" alt="foto de nosotros">
                <p id="texto_citas"> <strong> AGENDAMIENTO DE CITAS </strong></p>
            </div>
        </div>
    </article> 
     
    <article class="container_2">
        <div class="imagen_antes_despues">
            <img id="antes_despues" src="../img/antes_despues.jpg" alt="">
            <p id="antes_despues_texto"> <strong>ANTES Y DESPUES</strong></p>
        </div>

        <div class="login-container"><br>
            <div class="formulario">
                <h2><b> ESTILO <br> & <br>BELLEZA</h2><br></b>
                <form action="citas.php" method="post">
                    <label for="username"><i class="bi bi-person-fill"></i><b> Usuario</label></b>
                    <input type="text" id="username" name="username" required>
                    <br><br>
                    <label for="password"><i class="bi bi-shield-lock-fill"></i><b> Contraseña</label></b>
                    <input type="password" id="password" name="password" required>
                    <br>
                    <a href="recuperar_contrasena.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                            <path
                                d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                        </svg> Recuperar Contraseña</a><br><br>
                    <button type="submit" class="boton">Iniciar Sesión</button>
                    <br><br>
                    <p><a href="registro.php"><b>Regístrate</a></p></b>
                </form>
            </div>
        </div>
    </article>
    <footer>
        <div class="container_pie_pagina">
            <div class="columnas">
                <p> <b> Estilo & Belleza </b>
                <b> ___________________________________</b><br>
                Cadena especializada en salas de Belleza y Estetica, 
                empleamos tecnicas de vanguardia y personal altamente 
                calificado</p>
            </div>
            <div class="columnas">
                <p><b> Secciones:</b> 
                <b> ___________________________________</b><br>
                Inicio<br>
                Nosotros<br>
                Servicios<br>
                Citas</p>
            </div>
            <div class="columnas">
                <p> <b> Link de interés:</b>
                <b> ___________________________________</b><br>
                Política de privacidad <br> 
                Política de tratamiento de datos <br> 
                Política de garantías <br> 
                </p> 
            </div>
            <div class="columnas">
                <p><b> Servicio al Cliente: </b>
                <b> ___________________________________</b><br>
                Servicioalcliente@estiloybelleza.com <br>
                Tel: 555 55 55 <br>
                Cel: 123 456 789 <br>
                Medellín - Colombia
            </div>
        </div>
    
        <div class="container_copyright">
            Innova S.A.S | ©Copyright 2023 | Cristina Zapata - Erick Viloria - Patricia Medina
        </div>
    </footer>

    <script>
        // Mostrar el mensaje flotante
        document.addEventListener('DOMContentLoaded', function () {
            var mensaje = document.getElementById('mensaje-flotante');
            if (mensaje) {
                mensaje.style.display = 'block';
                // Ocultar el mensaje después de 5 segundos
                setTimeout(function () {
                    mensaje.style.display = 'none';
                }, 5000);
            }
        });
    </script>

</body>
</html>

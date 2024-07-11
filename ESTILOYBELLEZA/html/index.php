<!DOCTYPE html>
<html es>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estilo y Belleza</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../js/index.js"> 
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
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
        <img class="imagen_inicial" src="../img/estilo_y_belleza.jpg" alt="">
        <div class="nombre_proyecto">
            <p id="nombre_proyecto"> <strong> ESTILO & BELLEZA </strong></p>
            <p id="nombre_proyecto2"> <strong>Cristina - Erick - Patricia</strong></p>
        </div>
    </article>

    <article class="container_2">
        <div class="servicio_femenino">
            <div class="femenino">
                <P id="servicios_femeninos"> <strong> SERVICIOS FEMENINOS </strong></P>
            </div>

            <div class="container_femenino">

                <div class="tinte_f">
                    <a href="../html/Tinte.php"> 
                    <button class="tinte_texto">TINTES</button> 
                    </a>
                </div>
                <div class="tintes">
                    <img id="foto_f" src="../img/tintura_dama.jpg" alt="">
                </div>

                <div class="keratina">
                    <img id="foto_f" src="../img/keratina_dama.jpg" alt="">
                    <a href="../html/keratina.php"> <!-- enlace para la pag keratina -->
                    <button class="keratina_texto">KERATINA</button>
                    </a>
                </div>
                <div class="corte_f">
                    <img id="foto_f" src="../img/corte_dama.jpg" alt="">
                    <a href="../html/corteF.php"> <!-- enlace para la pag corteF -->
                    <button class="corte_texto_f">CORTE</button>
                </a>
                </div>
            </div>
        </div>
        <div class="servicio_masculino">
            <div class="masculino">
                MASCULINO
            </div>
            <div class="container_masculino">
                <div class="corte_m">
                    <a href="../html/corteM.php"> <!-- enlace para la pag corteM -->
                   <button class="corte_texto_m">CORTE</button>
                    </a>
                </div>
                <div class="corte_foto_m">
                    <img id="foto_m" src="../img/corte_masculino.jpg" alt="">
                </div>
                <div class="facial">
                    <img id="foto_m" src="../img/facial_masculino.jpg" alt="">
                    <a href="../html/facial.php"> <!-- enlace para la pag facial -->
                    <button class="facial_texto">FACIAL</button>
                    </a>
                </div>
                <div class="barberia">
                    <img id="foto_m" src="../img/corte_barba.jpg" alt="">
                    <a href="../html/barberia.php"> <!-- enlace para la pag barberia -->
                    <button class="barberia_texto">BARBERIA</button>
                    </a>
                </div>
            </div>
        </div>
    </article> 

    <article class="container_6">
        <div class="caja9">
            <img id="antes_despues" src="../img/antes_despues.jpg" alt="">
            <p id="antes_despues_texto"> <strong>ANTES Y DESPUES</strong></p>
        </div>

        <div class="login-container"><br>
            <div class="formulario">
                <h2><b> ESTILO <br> & <br>BELLEZA</h2><br></b>
                <form action="tu_archivo_de_procesamiento.php" method="post">
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
                    <button type="submit">Iniciar Sesión</button>
                    <br><br>
                    <p><a href="../html/registro.php"><b>Regístrate</a></p></b>
                </form>
            </div>

        </div>
    </article>

    <div class="slider">
        <div class="testimonial">
          <p>"Excelente servicio. ¡Muy contento con los resultados!"</p>
          <p class="autor">- Edwin Gonzalez</p>
        </div>
      
        <div class="testimonial">
          <p>"Profesionales y amigables. ¡Recomendados!"</p>
          <p class="autor">- Marta Grisalez </p>
        </div>
      
        <div class="testimonial">
          <p>Quede hermosa. ¡Me encanto!"</p>
          <p class="autor">- Sofia Vanegas</p>
        </div>
      
        <div class="testimonial">
          <p>"Puntuales, Profesionales, calidad en los materiales y el servicio. ¡Volveré!"</p>
          <p class="autor">- Raul Cifuentes</p>
        </div>
      </div>
    <script src="../js/index.js"></script>

 
    <footer>
        <div class="container_pie_pagina">
            <div class="columnas">
                <p> <b> Estilo & Belleza </b>
                    <b> ___________________________________</b><br>
                    Cadena especializada en salas de Belleza y Estetica,
                    empleamos tecnicas de vanguardia y personal altamente
                    calificado
                </p>
            </div>
            <div class="columnas">
                <p><b> Secciones:</b>
                    <b> ___________________________________</b><br>
                    Inicio<br>
                    Nosotros<br>
                    Servicios<br>
                    Citas
                </p>
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

</body>

</html>
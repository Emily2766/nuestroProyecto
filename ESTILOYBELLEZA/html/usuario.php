<?php
session_start(); // Inicia la sesión

if (!isset($_SESSION['usuario'])) {
  header("Location: citas.php");
  exit();
}

echo "Bienvenido, " . $_SESSION['usuario'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/usuario.css">
    <title>Usuario</title>
</head>

<body>
    <nav class="navegation_principal">
        <ul>
            <li><a href="../html/index.php">INICIO</a></li>
            <li><a href="../html/nosotros.php">NOSOTROS</a></li>
            <li><a href="../html/citas.php">CITAS</a></li>
       </ul>
    </nav>

    <article class="bloque_1">
        <div class="agendamiento1">
            <div class="imagen_agendamiento">
                <img class="imagen_agendamiento" src="../img/nosotros3.jpg" alt=" Foto de nosotros">
              <p id="texto_agendamiento"> <strong> AGENDAMIENTO DE CITAS </strong></p>
            </div>
            </div>
     </article>

     <article class="bloque_2">
        <img class="imagen_tarjeta2" src="../img/Logo Estilo y Belleza.jpg" alt="">
    </div>
    
    <table class="acciones">
        <p id="citas_agendadas"> <strong> CITAS AGENDADAS </strong></p>
            <tr>
              <th class="accion">Servicio agendado</th>
              <th class="accion">Hora inicio</th>
              <th class="accion">Fecha</th>
              <th class="accion">Hora final</th>
              <th class="accion">Cancelar cita</th>
              <th class="accion">Reagendar cita</th>
            </tr>
            <tr>
              <td colspan="1" class="celda-en-blanco"></td>
              <td colspan="1" class="celda-en-blanco"></td>
              <td colspan="1" class="celda-en-blanco"></td>
              <td colspan="1" class="celda-en-blanco"></td>
              <td colspan="1" class="celda-en-blanco"></td>
              <td colspan="1" class="celda-en-blanco"></td>
            </tr>
            <tr>
                <td colspan="1" class="celda-en-blanco"></td>
                <td colspan="1" class="celda-en-blanco"></td>
                <td colspan="1" class="celda-en-blanco"></td>
                <td colspan="1" class="celda-en-blanco"></td>
                <td colspan="1" class="celda-en-blanco"></td>
                <td colspan="1" class="celda-en-blanco"></td>
              </tr>
              <tr>
                <td colspan="1" class="celda-en-blanco"></td>
                <td colspan="1" class="celda-en-blanco"></td>
                <td colspan="1" class="celda-en-blanco"></td>
                <td colspan="1" class="celda-en-blanco"></td>
                <td colspan="1" class="celda-en-blanco"></td>
                <td colspan="1" class="celda-en-blanco"></td>
              </tr>
      </table>
      <button class="boton_reserva">Nueva reserva</button>
     </article>
     
 <article class ="bloque_3">
    <p id="seleccionar_servicios"> <strong> SELECCIONAR SERVICIOS </strong></p>
 </article>

<article class="bloque_4">
    <div class="informacion_usuario">
        <p id="informacion"> <strong> INFORMACIÓN DEL CLIENTE </strong></p>
    </div>

    <div class="servicio servicio1">
        <label for="corte"><b>CORTE:</b></label>
        <label><input type="checkbox" value="10000">Despuntado</label>
        <label><input type="checkbox" value="10000">Corte</label>
        <label><input type="checkbox" value="10000">Cepillado</label>
        <label><input type="checkbox" value="15000">Planchado</label>
        <label><input type="checkbox" value="10000">Depilación de cejas</label> 
    </div>
    <div class="servicio servicio2">
        <label for="keratina"><b>KERATINA:</b></label>
        <label><input type="checkbox" value="200000">Cabello a la cintura</label>
        <label><input type="checkbox" value="180000">Cabello a mitad de espalda</label>
        <label><input type="checkbox" value="150000">Cabello a los hombros</label>
        <label><input type="checkbox" value="180000">Cabello tinturado</label>
        <label><input type="checkbox" vvalue="200000">Cabello afro</label> 
    </div>
    <div class="servicio servicio3">
        <label for="tinte"><b>TINTE:</b></label>
        <label><input type="checkbox" value="150000">Balayage</label>
        <label><input type="checkbox" value="150000">Coloración</label>
        <label><input type="checkbox" value="120000">Iluminación</label>
        <label><input type="checkbox" value="130000">Mechas</label>
        <label><input type="checkbox" value="10000">Cejas con henna</label> 
    </div>
    <div class="servicio servicio4">
        <label for="barberia"><b>BARBERIA:</b></label>
        <label><input type="checkbox" value="15000">Corte clásico y moderno</label>
        <label><input type="checkbox" value="15000">Pulido de barba</label>
        <label><input type="checkbox" value="20000">Diseño de barba</label>
        <label><input type="checkbox" value="25000">Sombreado de barba</label>
    </div>
    <div class="servicio servicio5">
        <label for="corte"><b>LIMPIEZA FACIAL:</b></label>
        <label><input type="checkbox" value="25000">Tratamiento puntos negros</label>
        <label><input type="checkbox" value="25000">Vapor Ozono</label>
        <label><input type="checkbox" value="15000">Mascarilla facial</label>
        <label><input type="checkbox" value="35000">Aromaterapia + toalla caliente</label>
        <label><input type="checkbox" value="25000">Exfoliante</label> 
    </div>
    <div class="servicio servicio6">
        <label for="corte_caballero"><b>CORTE PARA CABALLERO:</b></label>
        <label><input type="checkbox" value="20000">Clásico</label>
        <label><input type="checkbox" value="25000">Urbano</label>
        <label><input type="checkbox" value="30000">Corte con diseño</label>
    </div>

</article>

<div id="total">Total: $<span id="total-valor">0</span></div>
 <script src="../js/usuario.js"></script>
      
 <article class ="bloque_5">
    <p id="seleccionar_estilista"> <strong> SELECCIONAR ESTILISTA </strong></p>
 </article>

 <article class="bloque_6">
    <div class="empleado_1">
        <div class="foto_emp_1">
            <img class="empleado_mujer_1" src="../img/estilista_mujer_1.jpg" alt="aqui va una foto de la estilista"><br><br>
            <strong>Patricia Medina</strong> <br>
            <i>Estilista profesional</i><br>
            <button class="elegir">Elegir</button>
        </div>
    </div>

    <div class="empleado_2">
        <div class="foto_emp_2">
            <img class="empleado_hombre" src="../img/estilista_hombre.jpg" alt="aqui va una foto de la estilista"><br><br>
            <strong>Erick Viloria</strong><br>
            <i>Barbero profesional</i><br>
            <button class="elegir">Elegir</button>
        </div>
    </div>

    <div class="empleado_3">
        <div class="foto_emp_3">
            <img class="empleado_mujer_2" src="../img/estilista_mujer_2.jpg" alt="aqui va una foto de la estilista"><br><br>
            <strong> Cristina Zapata</strong><br>
            <i> Profesional en técnicas de color</i><br>
            <button class="elegir">Elegir</button>
        </div>
    </div>

    <div class="empleado_4">
        <div class="foto_emp_4">
            <img class="cualquier_profesional" src="../img/foto otro estilista.jpg" alt="aqui va una foto de la estilista"><br><br>
            <strong> Cualquier profesional</strong><br>
            <button class="elegir">Elegir</button>
        </div>
    </div>
</article>

<article class ="bloque_7">
    <p id="seleccionar_fecha"> <strong> SELECCIONAR FECHA DEL SERVICIO </strong></p>
 </article>
 <article class="bloque_8">
    <div class="resumen_cita">
        <p id="informacion_cita"> <strong> INFORMACIÓN DE LA CITA </strong></p>
    </div>
    <button class="aceptar">Aceptar y continuar</button>
    <div>
        <select id="dia">
          <option value="0">Seleccionar Día</option>
          <option value="lunes">Lunes</option>
          <option value="martes">Martes</option>
          <option value="miércoles">Miércoles</option>
          <option value="jueves">Jueves</option>
          <option value="viernes">Viernes</option>
          <option value="sábado">Sábado</option>
          <option value="sábado">Domingo</option>
        </select>
      </div>
      <div>
        <select id="hora">
          <option value="0">Seleccionar Hora</option>
          <option value="8">8:00 AM</option>
          <option value="9">9:00 AM</option>
          <option value="10">10:00 AM</option>
          <option value="11">11:00 AM</option>
          <option value="12">12:00 PM</option>
          <option value="13">1:00 PM</option>
          <option value="14">2:00 PM</option>
          <option value="15">3:00 PM</option>
          <option value="16">4:00 PM</option>
          <option value="17">5:00 PM</option>
          <option value="18">6:00 PM</option>
        </select>
      </div>
    </div>
  
    <div class="calendar">  </div>   <!-- calendario semanal -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.0/main.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.0/main.min.js"></script>
    <script src="../js/usuario.js"></script>

    <article class ="bloque_9">
        <p id="seleccionar_pago"> <strong> SELECCIONAR MEDIO DE PAGO </strong></p>
     </article>

     <article class="bloque_10">
        <div> 
          <label for="medio-pago">Selecciona un medio de pago:</label>
          <select id="medio-pago">
            <option value="0" disabled selected>Seleccionar</option>
            <option value="tarjeta">Tarjeta de crédito</option>
            <option value="pse">PSE</option>
          </select>
        </div>
        <div class="formulario" id="tarjeta_credito" style="display: none;">
          <label for="numero-tarjeta">Número de tarjeta:</label>
          <input type="text" id="numero-tarjeta" name="numero-tarjeta" placeholder="Ingrese el número de tarjeta" required>
          <br><br>
          <label for="nombre-titular">Nombre del titular:</label>
          <input type="text" id="nombre-titular" name="nombre-titular" placeholder="Nombre del titular de la tarjeta" required>
          <br><br>
          <label for="fecha-expiracion">Fecha de expiración:</label>
          <input type="text" id="fecha-expiracion" name="fecha-expiracion" placeholder="MM/AA" required>
          <br><br>
          <label for="cvv">CVV:</label>
          <input type="text" id="cvv" name="cvv" placeholder="Código de seguridad (CVV)" required>
        </div>
      
        
        <div class="formulario" id="pse" style="display: none;">
          <label for="nombre-cliente">Nombre completo:</label>
          <input type="text" id="nombre-cliente" name="nombre-cliente" placeholder="Nombre completo del cliente" required><br><br>
        
          <label for="documento-identidad">Documento de identidad:</label>
          <input type="text" id="documento-identidad" name="documento-identidad" placeholder="Número de documento de identidad" required>
          <br><br>
          <label for="email">Correo electrónico:</label>
          <input type="email" id="email" name="email" placeholder="Correo electrónico del cliente" required>
          <br><br>
          <label for="banco">Banco:</label>
          <select id="banco" name="banco" required>
            <option value="" disabled selected>Seleccione un banco</option>
            <option value="Banco1">Bancolombia</option>
            <option value="Banco2">Nequi</option>
            <option value="Banco3">Interbank</option>
            <option value="Banco4">Davivienda</option>
            <option value="Banco5">Banesco</option>
            <option value="Banco6">Banco de Occidente</option>
            <option value="Banco7">Scotiabank</option>
            <option value="Banco8">Banco de Credivida</option>
            <option value="Banco9">Banco de Occidente</option>
          </select>
          <br><br>
          <label for="valor">Valor a pagar:</label>
          <input type="number" id="valor" name="valor" placeholder="Valor a pagar" required>
        
        </div>

        <button class="pagar">Ir a pagar</button>
      </article>
      
      <script>
      document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('medio-pago').addEventListener('change', function() {
          var medioPago = this.value;
          var formularios = document.querySelectorAll('.formulario');
          
          formularios.forEach(function(formulario) {
            formulario.style.display = 'none';
          });
      
          if (medioPago === 'tarjeta') {
            document.getElementById('tarjeta_credito').style.display = 'block';
          } else if (medioPago === 'pse') {
            document.getElementById('pse').style.display = 'block';
          }
        });
      });
      </script>
      
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
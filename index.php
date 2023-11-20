<?php
   session_start();
   
   if(isset($_SESSION['usuario'])){
   header("location: inicio.php");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    <link rel="stylesheet" href="http://localhost/Marketplace/css/login.css">
    <link rel="icon" href="/IMG/capy (1).png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=VT323&display=swap" rel="stylesheet">
</head>
<body>
    <!-- este es toda la parte principal del login -->
    <main>

         <div class="contenedor__todo">
            <div class="caja-trasera">
                <!-- son las partes traseras el IniciarSesion y Registrarse -->
                <div class="caja-trasera-login">
                    <h3>¿Ya tienes una Cuenta?</h3>
                    <p>Inicia Sesion para Entrar en la Pagina</p>
                    <button id="btn__iniciar-sesion" class="iniciar-sesion">Iniciar Sesion</button>
                </div>
                <div class="caja-trasera-register">
                    <h3>¿Aun no tienes una Cuenta?</h3>
                    <p>Registrate para que Puedad Iniciar Sesion</p>
                    <button id="btn__registrarse" class="iniciar-sesion" type="submit">Registrarse</button>
                </div>
            </div>

            <div class="contenedor-login-register">
            <!-- son las partes delanteras el formulario y el registro -->
                <form action="php/login_usuario.php" method="POST" class="formulario-login">
            <!-- Formulario del Login -->
                    <h2>Iniciar Sesion</h2>
                    <input type="email" placeholder="Correo Electronico" name="correo" required>
                    <input type="password" placeholder="Contraseña" name="contra" required>
                    <button type="submit">Entrar</button>

                </form>

                <form action="php/registro_usuario_bd.php" method="POST" class="formulario-register">
                    <!-- Formulario de Registro -->

                     <h2>Registrarse</h2>
                     <input type="text" placeholder="Nombre Completo" name="nombre_completo" required>
                     <input type="email" placeholder="Correo Electronico" name="correo" required>
                     <input type="text" placeholder="Usuario" name="usuario" required>
                     <input type="password" placeholder="Contraseña" name="contra" required>
                     <button type="submit">Registrarse</button>

                </form>

            </div>

         </div>

    </main>
    
</body>
<script src="http://localhost/Marketplace/js/login.js"></script>
</html>
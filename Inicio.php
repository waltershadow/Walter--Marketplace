<?php

session_start();

if(!isset($_SESSION['usuario'])){
  echo'
  <script>
  alert("Porfavor Inicia Session:");
  window.location ="index.php"
  </script>
  ';
  session_destroy();
  die();
 
}

session_destroy();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace</title>
    <link rel="icon" href="/IMG/capy (1).png">
    <link rel="stylesheet" href="http://localhost/Marketplace/css/style.css">
    <link rel="stylesheet" href="http://localhost/Marketplace/css/bot.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=VT323&display=swap" rel="stylesheet">
    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    
</head>
<body>
    <!-- barra de navegacion -->
    <nav class="navba">
        <div class="icono"><a href="http://localhost/Marketplace/venta.php"><img src="https://capi-capi.citasmedicasmaryury.com/wp-content/uploads/2023/08/Picsart_23-07-29_19-46-04-603-1024x1024.png" width="100" height="100"></a></div>

        <div class="logo"><a href="http://localhost/Marketplace/producto.php"><img src="http://localhost/Marketplace/IMG/1699663154718.jpg" width="366" height="100"></a></div>
        <div class="chat"><i class="bi bi-chat-dots"></i></a></div>
        <div class="cuenta"><a href="php/cerrar_session.php"><img src="https://capi-capi.citasmedicasmaryury.com/wp-content/uploads/2023/11/salida-1024x1024.png" width="100" height="100"></a></div>
      </nav>
      <div class="wrapper">
      <aside>
        <div class="menu">
          <!-- Menu de Categorias -->
          <ul>
          <li class="Marketplac"><label>Marketplace<i class="bi bi-gear"></i></label></li>
          <li class="Marketplace"><button id="todos" class="btn-Explo boton-categoria"><i class="bi bi-shop"></i>Explorar Todo</button></li>
          <li class="Marketplace"><button class="btn-Publi"><i class="bi bi-plus-lg"></i><a href="http://127.0.0.7:5501/index.html">Crear Publicacion</a></button></li>
          </ul>
          <label for="">_____________________________</label>
          <br>
          <label for="" class="Cat">Categoria</label>
          <div>
          <ul>
            <li class="Category"><button id="vehiculos" class="Categoria boton-categoria"><i id="Circulo" class="bi bi-circle-fill boton-categoria"></i>Vehiculos</button></li>
            <li class="Category"><button id="alquiler" class="Categoria boton-categoria"><i id="Circulo" class="bi bi-circle-fill boton-categoria"></i>Alquiler de Propiedades </button></li>
            <li class="Category"><button id="deportes" class="Categoria boton-categoria"><i id="Circulo" class="bi bi-circle-fill boton-categoria"></i>Articulos Deportivos</button></li>
            <li class="Category"><button id="electronica" class="Categoria boton-categoria"><i id="Circulo" class="bi bi-circle-fill boton-categoria"></i>Electronica</button></li>
            <li class="Category"><button id="entretenimiento" class="Categoria boton-categoria"><i id="Circulo" class="bi bi-circle-fill boton-categoria"></i>Entretenimiento</button></li>
            <li class="Category"><button id="instrumentos" class="Categoria boton-categoria"><i id="Circulo" class="bi bi-circle-fill boton-categoria"></i>Instrumentos Musicales</button></li>
            <li class="Category"><button id="juguetes" class="Categoria boton-categoria"><i id="Circulo" class="bi bi-circle-fill boton-categoria"></i>Juguetes</button></li>
            <li class="Category"><button id="ropa" class="Categoria boton-categoria"><i id="Circulo" class="bi bi-circle-fill boton-categoria"></i>Ropa</button></li>
          </ul>
        </div>
        </div>
      </aside>
      <main>
        <div id="contenedor-productos" class="contenedor-productos">
          <!-- En este contenedor se iran agregando los productos desde el javascript -->
        </div>
        </div>
      </main>
    </div>

 <!-- chatbot -->
 <button class="chatbot-toggler">
        <span class="material-symbols-rounded">mode_comment</span>
        <span class="material-symbols-outlined">close</span>
      </button>
      <div class="chatbot">
        <header>
          <h2>Sr.freddy</h2>
          <span class="close-btn material-symbols-outlined">close</span>
        </header>
        <ul class="chatbox">
          <li class="chat incoming">
            <span class="material-symbols-outlined">smart_toy</span>
            <p>Hola Sr.capy aun<br>sigue interesado en el miata?</p>
          </li>
        </ul>
        <div class="chat-input" >
          <textarea placeholder="Ingresar mensaje..." spellcheck="false" required></textarea>
          <span id="send-btn" class="material-symbols-rounded">send</span>
        </div>
      </div>

</body>
<script src="http://localhost/Marketplace/js/categoria.js"></script>
<script src="http://localhost/Marketplace/js/script.js" defer></script>
<script>
$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'http://127.0.0.1:8000/api/usuarios');
$data = json_decode($response->getBody(), true);
</script>
</html>
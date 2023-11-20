<?php
    
    include 'conetion_bd.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contra = $_POST['contra'];
    $contra = hash('sha512', $contra);
    
    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, password) 
              VALUES('$nombre_completo','$correo', '$usuario', '$contra')";

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");
    

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
        <script>
           alert("Este Correo ya esta Registrado, Intenta con uno Nuevo:");
           window.location ="../index.php";
        </script>
        ';
        exit();
    }
    
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");
    

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
        <script>
           alert("Este Usuario ya esta Registrado, Intenta con uno Nuevo:");
           window.location ="../index.php";
        </script>
        ';
        exit();
    }



    $ejecutar = mysqli_query($conexion,$query);

    if($ejecutar){
        echo '
        <script>
           alert("Usuario Registrado Exitosamente:");
           window.location ="../index.php";
        </script>
        ';
    } else {
        echo '
        <script>
           alert("Try again:");
           window.location ="../index.php";
        </script>
        ';
    }


    mysqli_close($conexion);
  
?>
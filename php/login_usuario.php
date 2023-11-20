<?php
    
    session_start();

    include 'conetion_bd.php';
    
    $correo = $_POST['correo'];
    $contra = $_POST['contra'];
    $contra = hash('sha512',$contra);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' AND password = '$contra'");


    if(mysqli_num_rows($validar_login)> 0){
        $_SESSION['usuario'] = $correo;
        header("location: ../inicio.php");
        exit();
    }else{
        echo '
        <script>
        alert("EL Usuario no Existe:");
        window.location ="../index.php"
        </script>
        ';
        exit();
    }


?>
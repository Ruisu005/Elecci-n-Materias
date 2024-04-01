<?php

session_start();

include('conexion_be.php');

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$usuario = $_POST['usuario'];
$_SESSION['usuario'] = $usuario;


//Validar encriptamiento de contraseña
$contrasena = hash('sha512', $contrasena);

/*echo $contrasena;
die();*/

$validar_login = mysqli_query($conexion, "SELECT * FROM  alumnos WHERE correo = '$correo' 
and contrasena = '$contrasena'");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $correo;
    header("location: materias.php");
    exit;
}else{
    echo'
    <script>
    alert("Usuario no Existente, Intente con otro");
    window.location = "../index.php";
    </script>
    ';
    exit;
}

?>
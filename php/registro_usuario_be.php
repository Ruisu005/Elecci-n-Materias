<?php

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

//Encriptamiento de contraseña
$contrasena = hash('sha512', $contrasena);

$query = "INSERT INTO alumnos (nombre_completo, correo, usuario, contrasena) 
VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";

//Verificar que el correo no se repita en la base de datos

$verificar_correo = mysqli_query($conexion, "SELECT * FROM alumnos WHERE correo = '$correo' ");

if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
    <script>
    alert("Este correo ya esta registrado, intenta con uno diferente");
    window.location = "../index.php";
    </script>
    ';
    exit();
}

//Verificar que el nombre de usuario no se repita en la base de datos
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM alumnos WHERE usuario = '$usuario' ");

if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
    <script>
    alert("Este usuario ya esta registrado, intenta con uno diferente");
    window.location = "../index.php";
    </script>
    ';
    exit();
}


$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
    <script>
    alert("Usuario Registrado Exitosamente");
    window.location = "../index.php";
    </script>
    ';
} else {
    echo '
    <script>
    alert("Usuario No Registrado");
    windows.location = "../index.php";
    </script>
    ';
}

mysqli_close($conexion);

?>
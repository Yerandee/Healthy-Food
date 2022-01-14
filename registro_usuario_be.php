<?php

include 'conexion_be.php';

$nombre_completo=$_POST ['nombre_completo'];
$correp=$_POST ['correo'];
$tipousuario=$_POST ['tipo.usuario'];
$usuario=$_POST ['usuario'];
$contrasena=$_POST ['contrasena'];

$query= "INSERT INTO  usuarios(nombre_completo,correo,tipo.usuario,usuario,contrasena) 
VALUES('$nombre_completo','$correo','$tipousuario','$usuario','$contrasena')";

$ejecutar =mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
    alert("Usuario almacenado exitosamente");
    window.location="assets/login/php/login.php";
    </script>
    ';
}
?>
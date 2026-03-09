<?php
function conectar_bd()
{
    $servidor = "localhost";
    $nombrebd = "empresa";
    $usuario = "root";
    $contrasena = "";

    $conexion = mysqli_connect($servidor,$usuario,$contrasena);
    mysqli_select_db($conexion,$nombrebd); //se selecciona la base de datos
    return $conexion;
}

?>
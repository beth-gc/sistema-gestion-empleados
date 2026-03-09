<?php
include("includes/baseDatos.php");

if(!empty($_POST['empleado_nombre'])&& !empty($_POST['empleado_edad']))
{
    $nombre = $_POST['empleado_nombre'];
    $edad = $_POST['empleado_edad'];

    $conexionbd = conectar_bd();

    $sql = "INSERT INTO empleado (nombre, edad) VALUES (?, ?)";

    $stmt = mysqli_prepare($conexionbd, $sql);

    mysqli_stmt_bind_param($stmt, "si",$nombre,$edad);

    $exito = mysqli_stmt_execute($stmt);

    if($exito)
    {
        header('Location: listaEmpleados.php');
    }
    else
    {
        header('Location: nuevoEmpleado.php');
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conexionbd);
}
else
{
    header('Location: nuevoEmpleado.php');
}
?>
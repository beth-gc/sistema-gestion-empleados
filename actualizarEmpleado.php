<?php

include("includes/baseDatos.php");

if(!empty($_POST['empleado_nombre']) && !empty($_POST['empleado_edad']) && !empty($_POST['empleado_id']))
{
    $nombre = $_POST['empleado_nombre'];
    $edad = $_POST['empleado_edad'];
    $id = $_POST['empleado_id'];

    $conexionbd = conectar_bd();

    $sql = "UPDATE empleado SET nombre=?,edad=? WHERE id=?";
    $stmt = mysqli_prepare($conexionbd, $sql);

    mysqli_stmt_bind_param($stmt, "sii",$nombre,$edad,$id);
    
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
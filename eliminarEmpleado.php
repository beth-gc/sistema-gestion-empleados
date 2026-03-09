<?php

include("includes/baseDatos.php");

if(!empty($_GET['empleadoid']))
{
    $id = $_GET['empleadoid'];

    $conexionbd = conectar_bd();

    $sql = "DELETE FROM empleado WHERE id=?";
    $stmt = mysqli_prepare($conexionbd, $sql);

    mysqli_stmt_bind_param($stmt, "i",$id);
    
    $exito = mysqli_stmt_execute($stmt);
    if($exito){
        header('Location:listaEmpleados.php');
    }else{
        header('Location:listaEmpleados.php');
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conexionbd);
}else
{
    header('Location:nuevoEmpleado.php');
}

 ?>

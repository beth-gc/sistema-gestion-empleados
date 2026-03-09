<?php

include("includes/baseDatos.php");

if(!empty($_GET['empleadoid']))
{
    $id = $_GET['empleadoid'];

    $conexionbd = conectar_bd();

    $sql = "SELECT id,nombre,edad FROM empleado WHERE id=? LIMIT 1";
    $stmt = mysqli_prepare($conexionbd,$sql);

    mysqli_stmt_bind_param($stmt,"i",$id);

    mysqli_stmt_execute($stmt);

    $resultado = mysqli_stmt_get_result($stmt);

    $registro = mysqli_fetch_assoc($resultado);

    mysqli_stmt_close($stmt);
    mysqli_close($conexionbd);
}

?>


<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Empleado</title>
    <link rel="stylesheet" href="./estilos/styleAgregar.css">
</head>
<body>
    <header class="encabezado">
            <a class="btn-inicio" href="index.php">Sistema de Administracion de Empleados</a>
            <div class="encabezado_menu">
                <a class="boton" href="./agregarEmpleado.php">
                Agregar Empleado
                </a>
                <a class="boton" href="./listaEmpleados.php">
                Ver Empleados
                </a>
            </div>
    </header>

    <main class="presentacion">
            <h1 class="titulo">Editar empleado</h1>
            <div class="cuadro_informativo">
                <form action="actualizarEmpleado.php" method="post" name="nuevoempleado">
                Nombre:
                <input type="text" name="empleado_nombre" value="<?php echo $registro['nombre'] ?>">
                <br>
                Edad:
                <input type="number" name="empleado_edad" value="<?php echo $registro['edad'] ?>">
                 <br>
                <input type="hidden" name="empleado_id" value="<?php echo $registro['id'] ?>">
                <input class="boton" type="submit" value="Guardar cambios">
                </form>
            </div>
    </main>

    <footer class="pie">
        <p>
            Desarrollado por Elizabeth Gomez
        </p>
    </footer>
</body>
</html>



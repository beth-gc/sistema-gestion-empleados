<?php
include("includes/baseDatos.php");
$conexionbd = conectar_bd();
$query = "SELECT id,nombre,edad FROM empleado;";
$resultado = mysqli_query($conexionbd,$query);
mysqli_close($conexionbd);
?>

<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Administracion de Empleados</title>
    <link rel="stylesheet" href="./estilos/styleLista.css">
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
    <h1 class="titulo">Lista de empleados</h1>
    <table class="tabla">
        <thead class="encabezado-tabla">
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($registro = mysqli_fetch_assoc($resultado)) {
            echo '<tr>';
            // Aplicamos la protección aquí:
            echo '<td>' . htmlspecialchars($registro['nombre']) . '</td>';
            echo '<td>' . htmlspecialchars($registro['edad']) . ' años</td>';
            echo '<td>
            <a class="boton-modificar" href="editarEmpleado.php?empleadoid=' . $registro['id'] . '">Modificar</a> 
            <a class ="boton-eliminar" href="eliminarEmpleado.php?empleadoid=' . $registro['id'] . '">Eliminar</a>
            </td>';
            echo '</tr>';
            }
            ?>
        </tbody>
    </table>
    </main>

    <footer class="pie">
        <p>
            Desarrollado por Elizabeth Gomez
        </p>
    </footer>
</body>
</html>
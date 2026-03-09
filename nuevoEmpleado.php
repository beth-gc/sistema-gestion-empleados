<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Empleado</title>
    <link rel="stylesheet" href="./estilos/styleAgregar.css">
</head>
<body>
    <header class="encabezado">
            <a class="btn-inicio" href="index.php">Sistema de Administracion de Empleados</a>
            <div class="encabezado_menu">
                <a class="boton" href="./listaEmpleados.php">
                Ver Empleados
                </a>
            </div>
    </header>

    <main class="presentacion">
        <h1 class="titulo">Agregar empleado</h1>
        <div class="cuadro_informativo">
        <form action="agregarEmpleado.php" method="post" name="nuevoempleado">
        Nombre:
        <input type="text" name="empleado_nombre">
        <br>
        Edad:
        <input type="number" name="empleado_edad">
        <br>
        <input class="boton" type="submit" value="Agregar empleado">
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

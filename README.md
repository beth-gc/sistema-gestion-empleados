# Sistema de Administración de Empleados (CRUD)

Este es un sistema web básico desarrollado en **PHP** y **MySQL** que permite gestionar el personal de una empresa mediante operaciones CRUD (Create, Read, Update, Delete).

## Características
* **Listado de empleados:** Visualización de todos los registros en una tabla.
* **Registro:** Formulario para añadir nuevos empleados (Nombre y Edad).
* **Edición:** Capacidad de modificar datos existentes.
* **Eliminación:** Borrado de registros de la base de datos.
* **Seguridad básica:** Uso de sentencias preparadas (`mysqli_prepare`) para prevenir inyecciones SQL.

## Tecnologías utilizadas
* **Backend:** PHP 8.x
* **Frontend:** HTML5, CSS3 
* **Base de Datos:** MySQL 

## Instalación y Configuración

1.  **Clonar el repositorio:**
    ```bash
    git clone [https://github.com/tu-usuario/nombre-del-repo.git](https://github.com/tu-usuario/nombre-del-repo.git)
    ```
2.  **Configurar la Base de Datos:**
    * Crea una base de datos llamada `empresa`.
    * Importa el archivo `sql/empresa.sql` para crear la tabla `empleado` y los datos de prueba.
3.  **Configurar la conexión:**
    * Revisa el archivo `baseDatos.php` y ajusta las credenciales (`usuario` y `contrasena`) según tu entorno local (XAMPP, WAMP, etc.).
4.  **Ejecutar:**
    * Copia la carpeta en tu servidor local (ej. `htdocs`) y accede desde `localhost/SISTEMA-EMPLEADOS/`.

---
Desarrollado por Elizabeth Gomez

<?php
session_start();

$host = "localhost";
$usuario_db = "root"; // Reemplaza con tu nombre de usuario de MySQL
$contrasena_db = ""; // Reemplaza con tu contraseña de MySQL
$nombre_base_datos = "peluqueria"; // Reemplaza con el nombre de tu base de datos

$conexion = mysqli_connect($host, $usuario_db, $contrasena_db, $nombre_base_datos);

if (!$conexion) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$query = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena'";
$resultado = mysqli_query($conexion, $query);

if (mysqli_num_rows($resultado) === 1) {
    $_SESSION['usuario'] = $usuario;
    header('Location: protegido.php');
} else {
    echo "Credenciales inválidas.";
}

mysqli_close($conexion);
?>

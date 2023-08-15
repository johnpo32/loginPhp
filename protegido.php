<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: index.html'); // Redirige al formulario si no hay sesión iniciada
    exit();
}

$usuario_autenticado = $_SESSION['usuario'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Protegida</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $usuario_autenticado; ?></h1>
    <p>Este es el contenido protegido al que solo se puede acceder después de iniciar sesión.</p>
    <a href="cerrar_sesion.php">Cerrar Sesión</a>
</body>
</html>

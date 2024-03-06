<?php
$host = "localhost";
$usuario = "root";
$contraseña = "";
$basedatos = "bd_ventas";
$puerto = 3306;

$mysqli = new mysqli($host, $usuario, $contraseña, $basedatos, $puerto);

// Verificar la conexión
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

 
if ($mysqli) {
    echo "conexion exitosa con alex el mejor";
    
}

// Puedes realizar operaciones con la base de datos aquí

// Cerrar la conexión al finalizar el script
$mysqli->close();
?>

<button onclick="redirigirApiramide()">Enviar</button>

<!-- Fin de tu contenido HTML -->

<script>
    function redirigirApiramide() {
        window.location.href = 'piramide.php';
    }
</script>
<?php
//Conecto a la base de datos
include_once("../auth/config.php");

// Recojo los datos del formulario
$usuarioNuevo = $_POST['usuario'];
$ContrasenaNueva = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
$emailNuevo = $_POST['email'];

// Inserto los datos en la base de datos
$stmt = $mysqli->prepare("INSERT INTO usuarios (nombre_usuario, password, email) VALUES (?, ?, ?)");
if ($stmt) {
    //vinculo los parámetros de la consulta con los datos
    $stmt->bind_param("sss", $usuarioNuevo, $ContrasenaNueva, $emailNuevo); // 'sss' indica que son 3 strings

    // Ejecuto la consulta
    if ($stmt->execute()) {
        echo "Registro exitoso.";
    } else {
        echo "Error al registrar: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Error en la preparación de la consulta: " . $mysqli->error;
}

// Cierro la conexión
$mysqli->close();
header("refresh:2;url=../static/login.php");
?>
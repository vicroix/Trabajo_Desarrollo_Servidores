<?php
//Conecto a la base de datos
include_once("../auth/config.php");

// Recojo los datos del formulario
$usuario_login = $_POST['user'];
$contrasena_login = $_POST['psw'];

// Preparo la consulta
$stmt = $mysqli->prepare("SELECT * FROM usuarios WHERE nombre_usuario = ?");
if ($stmt === false) {
    echo "Error al preparar la consulta: " . $mysqli->error;
    exit;
}
//vinculo los parámetros de la consulta con los datos
$stmt->bind_param("s", $usuario_login);

//Ejecuto la consulta
$stmt->execute();

//Recojo el resultado de la consulta
$resultado = $stmt->get_result();


if ($resultado->num_rows > 0) {
    $usuario = $resultado->fetch_assoc();

    if (password_verify($contrasena_login, $usuario['contrasena'])) {
        echo "Autenticación correcta";
        session_start();
        $_SESSION["id"] = $usuario_login;
        $mysqli->close();
        header("refresh:1;url=../index.php");
        exit;
    } else {
        echo "Contraseña incorrecta";
        header("refresh:1;url=../static/login.php");
    }
} else {
    echo "Usuario incorrecto" . $stmt->error;
    header("refresh:1;url=../static/login.php");
}
$stmt->close();

// Cierro la conexión
$mysqli->close();

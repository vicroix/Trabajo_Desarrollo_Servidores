<?php

define('MYSQL_HOST', 'localhost');
define('MYSQL_DATABASE', 'prueba_bd');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '12345');

$mysqli = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE);
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}
?>
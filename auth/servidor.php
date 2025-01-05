<?php session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta del Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/StylePersonality.css">
</head>

<body>
    <div class="container">
        <!--<h1 class="text-center bienvenido">Iniciaste sesión correctamente</h1> -->
        <div class="response border-0 bg-transparent text-center text-success fs-2">
            <?php
            //Recordario: Activar ldap en configuración servidor
            //Datos de conexión en https://www.forumsys.com/2022/05/10/online-ldap-test-server/
            //https://www.php.net/manual/en/function.ldap-set-option.php
            //http://localhost/IGH/T06/LDAP/LDAP1.php

            $ldap_dn = "uid=" . $_POST["user"] . ",dc=example,dc=com";
            $ldap_password = $_POST["psw"];

            $ldap_con = ldap_connect("ldap://www.ldap.forumsys.com:389") or die("No se ha podido establecer la conexión con el servidor LDAP: ldap.forumsys.com");

            if (ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3)) {
                echo "Usando correctamente LDAPv3 <br>";
            } else {
                echo "Fallo de conexión con LDAPv3 <br>";
            }
            if (@ldap_bind($ldap_con, $ldap_dn, $ldap_password)) {
                /*Se comprueba si la autenticación ha sido correcta. 
                Si el usuario está autenticado, devuelve el valor true */
                echo "Autenticación correcta";
                $Usuario = $_POST["user"];
                $Contrasena = $_POST["psw"];
                // Guarda el nombre de usuario en la sesión
                $_SESSION["id"] = $Usuario; // Esta línea es clave
                ldap_close($ldap_con);
                header("refresh:1;url=../index.php");
                exit;
            } else {
                echo "Usuario no válido";
                header("refresh:2;url=../static/login.php");
                exit;
            }
            ?>
        </div>
    </div>
</body>

</html>
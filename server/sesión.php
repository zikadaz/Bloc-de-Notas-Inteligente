<?php
declare(strict_types=1);
session_start();

# manages the login acess
if ($_SERVER["REQUEST_METHOD"] === "POST") { 
    $nombre_de_usuario = trim($_POST["nombre"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $contraseña = trim($_POST["contrasena"] ?? "");

    if (!empty($nombre_de_usuario) && !empty($email)) { 
        $_SESSION["usuario"] = $nombre_de_usuario;
        $_SESSION["email"] = $email;

        header("location: ../pages/block.php");
        exit();
    }
}
?>
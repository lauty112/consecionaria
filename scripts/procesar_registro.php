<?php
require 'coneccion.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST['nombre'];
    $dni = $_POST['dni'];
    $pas = password_hash($_POST['pas'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nombre, pas, dni) VALUES (:nombre, :pas, :dni)";
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute([
            ':nombre' => $nombre,
            ':pas' => $pas,
            ':dni' => $dni
        ]);
        echo "Usuario registrado correctamente. <a href='login.php'>Iniciar sesión</a>";
    } catch (PDOException $e) {
        echo "Error al registrar usuario: " . $e->getMessage();
    }
}
?>
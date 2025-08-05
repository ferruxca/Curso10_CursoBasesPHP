<?php

// Configuración de la base de datos
$host = "localhost";
$database = "curso_php_basico";
$user = "root";
$password = "";

try {
    // Crear una conexión PDO (Verificar que PDO esté instalado)
    $db = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Crear tabla (si no existe)
    $sql = "CREATE TABLE IF NOT EXISTS productos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(100) NOT NULL,
        precio VARCHAR(100) NOT NULL,
        fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB";
    $db->exec($sql);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
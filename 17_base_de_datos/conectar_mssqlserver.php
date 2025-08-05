<?php

// Configuración de la base de datos
$host = "127.0.0.1";
$database = "curso_php_basico";
$user = "sa";
$password = "";

try {
    // Crear una conexión PDO (Verificar que PDO esté instalado)
    $db = new PDO("sqlsrv:host=$host;dbname=$database", $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Crear tabla (si no existe)
    $sql = "CREATE TABLE IF NOT EXISTS productos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(100) NOT NULL,
        precio VARCHAR(100) NOT NULL,
        fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    $db->exec($sql);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
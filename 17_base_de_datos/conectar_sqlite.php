<?php

try{
    $db = new PDO('sqlite:database.sqlite.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Crear tabla PRODUCTOS (si no existe)
    $db->exec("CREATE TABLE IF NOT EXISTS productos (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        nombre TEXT NOT NULL,
        precio TEXT NOT NULL,
        fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP
    )");
}
catch(PDOException $e){
    die("Error de conexión: " . $e->getMessage());
}

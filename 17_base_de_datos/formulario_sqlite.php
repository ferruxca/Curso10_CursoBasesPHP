<?php
    include "conectar_sqlite.php";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];

        $sql = "INSERT INTO productos (nombre, precio) VALUES (:nombre, :precio)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":precio", $precio);
        $stmt->execute();
    }

    try{
        $sql = "SELECT * FROM productos";
        $stmt = $db->query($sql);
        $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e){
        die("Error de conexión: " . $e->getMessage());
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Productos</title>
</head>
<body>
    <p>
        <a href="../index.php">Volver al menú principal</a>
    </p>
    <h2>Formulario Productos</h2>
    <h3>Formulario SQLite</h3>
    <form action="formulario_sqlite.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <label for="precio">Precio:</label>
        <input type="text" id="precio" name="precio">
        <input type="submit" value="Enviar">
    </form>
<br>
<hr>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto) { ?>
                <tr>
                    <td><?php echo $producto["nombre"]; ?></td>
                    <td><?php echo $producto["precio"]; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
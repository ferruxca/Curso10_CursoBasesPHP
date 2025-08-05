<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h2>Formulario envía datos por GET</h2>
    <form action="get.php" method="get">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido">
        <input type="submit" value="Enviar">
    </form>

    <h2>Formulario envía datos por POST</h2>
    <form action="post.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido">
        <input type="submit" value="Enviar">
    </form>

</body>
</html>
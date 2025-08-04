<?php

try {
    funcionQueNoExiste(); // Función no definida
} catch (Error $e) {
    echo "Error: " . $e->getMessage();
} finally {
    echo "<br>Fin del bloque try-catch";
}
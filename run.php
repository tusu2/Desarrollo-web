<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    $code = $input['code'] ?? '';

    // Guardar el código temporalmente
    $tempFile = 'temp.php';
    file_put_contents($tempFile, $code);

    // Capturar la salida del código PHP
    ob_start();
    include $tempFile;
    $output = ob_get_clean();

    // Eliminar el archivo temporal
    unlink($tempFile);

    echo $output;
} else {
    echo "No se permite el acceso directo.";
}

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Código con Bootstrap</title>
    <!-- Enlace a Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo adicional para el área de código */
        pre {
            background-color: #282c34;
            color: #f8f8f2;
            border-radius: 5px;
            padding: 20px;
            overflow-x: auto;
            display: block;
            white-space: pre-wrap; /* Ajuste del código */
        }

        .code-container {
            display: flex;
          
            background-color: #282c34;
            color: #f8f8f2;
            border-radius: 5px;
          
      
           
          
        }

        .line-numbers {
            color: #abb2bf;
            margin-right: 10px;
            text-align: right;
            font-family: 'Courier New', Courier, monospace;
            user-select: none; /* Evitar que se seleccione el número */
        }

        .code {
            font-family: 'Courier New', Courier, monospace;
            flex-grow: 1;
        }

        .keyword {
            color: #c678dd;
            font-weight: bold;
        }

        .string {
            color: #98c379;
        }

        .comment {
            color: #7f8c8d;
            font-style: italic;
        }

        .function {
            color: #61afef;
        }
    </style>
</head>
<body>
    <!-- Contenedor principal -->
    <div class="container my-5">
        <h1 class="text-center">Mostrar mi Código</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Área para mostrar el código -->
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Ejemplo de Código HTML</h5>
                        <div class="code-container">
                            <div class="line-numbers">
<?php
$codigo_php = "<?php
// Este es un comentario en PHP
\$nombre = 'Juan';
// Crear una función simple
function saludar(\$nombre) {
    echo 'Hola, ' . \$nombre;
}
saludar(\$nombre);
?>";
    
$lines = explode("\n", $codigo_php);
$lineNumber = 1;
foreach ($lines as $line) {
    echo "<div> ". "." . $lineNumber."</div>";
    $lineNumber++;
}
?>
                            </div>
                            <div class="code">
<?php
$lineNumber = 1;
foreach ($lines as $line) {
    $line = htmlspecialchars($line); // Evitar problemas con caracteres especiales
    $lineClass = 'keyword'; // Por defecto, la clase será 'keyword'

    // Establecer clases según el contenido
    if (strpos($line, 'function') !== false) {
        $lineClass = 'function';
    } elseif (strpos($line, 'echo') !== false) {
        $lineClass = 'keyword';
    } elseif (strpos($line, '//') !== false) {
        $lineClass = 'comment';
    } elseif (strpos($line, '$') !== false) {
        $lineClass = 'keyword';
    }

    // Imprimir el código con color
    echo "<span class='$lineClass'>$line</span><br>";
    $lineNumber++;
}
?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enlace a Bootstrap 5 JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>

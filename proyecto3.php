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
        .echo {
            color: #109010;
        }

  body{

    font-family:  Bold;
  }
    </style>
</head>
<body >

<div style="width: 100%; height: 100vh; position: relative; overflow: hidden;">
  <svg 
    xmlns="http://www.w3.org/2000/svg" 
    viewBox="0 0 500 150" 
    preserveAspectRatio="none" 
    style="position: absolute; bottom: 0; width: 100%; height: 50%;">
    <path d="M0,50 C150,100 350,0 500,50 L500,150 L0,150 Z" fill="#C8AA6E" />
  </svg>
  
  <nav class="navbar navbar-expand-lg fixed-top" style="background: #0397AB;">
        <div class="container d-flex">
            <a class="navbar-brand d-flex align-items-center" href="#" style="color: #FAF0E6;">
                <img src="Imagenes/logo2.png" alt="Descripción de la imagen" style="width: 70px; height: 70px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html" style="color: #FAF0E6;">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Servicios.html" style="color: #FAF0E6;">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="SobreNosotros.html" style="color: #FAF0E6;">Sobre Nosotros</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br><br><br>
    <!-- Contenedor principal -->
    <div class="container my-5">
        <h1 class="text-center">Mostrar mi Código</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Área para mostrar el código -->
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Código PHP: Operadores</h5>
                        <p>Este código te muestra algunos operadores matematicos.</p>
                        <div class="code-container">
                            <div class="line-numbers">
<?php
$codigo_php = "<?php
\$a1 = 'ALEXA';
\$a2 = 'cordova';
\$a3 = 'castaÑEDA';
echo \$a1 . ' '' . \$a2 . ' ' . \$a3 . <'br>';
fix_names (\$a1, \$a2, \$a3);
echo \$a1 . ' ' . \$a2 . ' ' . \$a3;
function fix_names (&\$n1, &\$n2, &\$n3){
\$n1 = unfirst(strtolowe(\$n1));
\$n2 = unfirst(strtolowe(\$n2));
\$n3 = unfirst(strtolowe(\$n3));
}
?>

";
    
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
        $lineClass = 'echo';
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
    </div>
    <!-- Enlace a Bootstrap 5 JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>

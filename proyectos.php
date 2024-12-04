<?php
$codigo_php = '<?php echo "Hola Mundo"; ?>
d
dsdsd

asdasdasdas';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Código PHP</title>
  
    <link href="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/themes/prism.min.css" rel="stylesheet" />

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #0056b3;
        }

        pre {
            background-color: #282c34;
            color: #f8f8f2;
            border-radius: 5px;
            padding: 20px;
            overflow-x: auto;
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

<div class="code-container">
    <button class="copy-button" onclick="copyCode()">Copiar Código</button>
    <div style="display: flex;">
    <pre>
<?php
    $codigo_php = "<?php
        // Este es un comentario en PHP
        \$nombre = 'Juan';
        // Crear una función simple
        function saludar(\$nombre) {
            echo 'Hola, ' . nombre;
        }
        saludar(\$nombre);
        ?>";
    
    $lines = explode("\n", $codigo_php);
    foreach ($lines as $lineNumber => $line) {
        // Aseguramos que las líneas tengan la clase correspondiente
        $line = htmlspecialchars($line); // Evitar problemas con caracteres especiales
        
        // Agregar clase dependiendo de si es comentario, palabra clave, etc.
        if (strpos($line, 'function') !== false) {
            echo "<span class='function'>" . $line . "</span><br>";
        } elseif (strpos($line, 'echo') !== false) {
            echo "<span class='keyword'>" . $line . "</span><br>";
        } elseif (strpos($line, '//') !== false) {
            echo "<span class='comment'>" . $line . "</span><br>";
        } elseif (strpos($line, '$') !== false) {
            echo "<span class='keyword'>" . $line . "</span><br>";
        } else {
            echo "<span class='keyword'>" . $line . "</span><br>";
        }
    }
?>
    </pre>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js"></script>
<script>
    function copyCode() {
        var code = document.getElementById("code").innerText;
        var textArea = document.createElement("textarea");
        textArea.value = code;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand('copy');
        document.body.removeChild(textArea);
        alert('Código copiado al portapapeles!');
    }
</script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Envie sua Mensagem</h1>

    <div class="caixa">
        <form id="meuFormulario" method="POST" action="processa.php">

            <label>Digite sua mensagem:</label><br>

            <input type="text" id="mensagem" name="mensagem" require>

            <button type="submit">Enviar</button>
            
        </form>
    </div>

    <script src="js/script.js"></script>

</body>
</html>
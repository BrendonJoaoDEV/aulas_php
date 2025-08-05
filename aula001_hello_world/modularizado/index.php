<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <!-- Título da página -->
    <h1>Envie sua mensagem</h1>

    <!-- 
        Formulário para o usuário digitar e enviar dados.
        - method="POST": indica que os dados serão enviados "por trás" (sem aparecer na URL).
        - action=processa.php" diz que os dados serão enviados para a página chamada processa.php
    -->
    
    <form method="POST" action="processa.php">

        <!-- Texto explicando o que o usuário deve fazer -->
        <label>Digite sua mensagem:</label>

        <!-- 
            Campo de texto onde o usuário digita a mensagem.
            - name="mensagem": é o nome do campo, usado para recuperar o valor no PHP.
            - required: significa que o campo é obrigatório.
        -->
        <input type="text" name="mensagem" required>

        <!-- Botão que envia o formulário -->
        <button type="submit">Enviar</button> 
    </form>
</body>
</html>
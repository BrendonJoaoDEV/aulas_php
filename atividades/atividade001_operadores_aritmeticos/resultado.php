<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Calculadora PHP</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <h1>Resultado da Operação</h1>
    </header>

    <main>
        <section class="saida">
            <p>
                <?php
                    if ($_POST) {
                        if ($_POST['erro'] !== 'Tudo certo!') {
                            echo $_POST['erro'];
                            $mensagem_link = 'Voltar';
                        } else {
                            $numero1 = $_POST['primeiro-numero'];
                            $numero2 = $_POST['segundo-numero'];
                            switch ($_POST['operacao']) {
                                case 'soma':
                                    $resultado = $numero1 + $numero2;
                                    echo "O resultado de <strong>$numero1 + $numero2</strong> = <strong>$resultado</strong>";
                                    $mensagem_link = 'Fazer outro cálculo';
                                    break;
                                case 'subtracao':
                                    $resultado = $numero1 - $numero2;
                                    echo "O resultado de <strong>$numero1 - $numero2</strong> = <strong>$resultado</strong>";
                                    $mensagem_link = 'Fazer outro cálculo';
                                    break;
                                case 'multiplicacao':
                                    $resultado = $numero1 * $numero2;
                                    echo "O resultado de <strong>$numero1 &#215; $numero2</strong> = <strong>$resultado</strong>";
                                    $mensagem_link = 'Fazer outro cálculo';
                                    break;
                                case 'divisao':
                                    $resultado = $numero1 / $numero2;
                                    echo "O resultado de <strong>$numero1 &$247; $numero2</strong> = <strong>$resultado</strong>";
                                    $mensagem_link = 'Fazer outro cálculo';
                                    break;
                                default:
                                    echo "Nenhuma operação foi selecionada!";
                                    $mensagem_link = 'Voltar';
                            }
                        }
                    }
                ?>
            </p>
            <a href="index.php">
                <?php
                    echo $mensagem_link;
                ?>
            </a>
        </section>
    </main>
</body>
</html>
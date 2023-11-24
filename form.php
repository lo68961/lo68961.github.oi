<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Formulário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;

        }

        #result-container {
            background-color: #cbbfbf;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 50%;
            /* ajuste conforme necessário */
        }

        p {
            border: 2px solid #ccc;
            margin: 10px 0;
        }

        strong {

            color: darkgreen;
        }
    </style>
</head>

<body>

    <div id="result-container">
        <h1>Resultado do Formulário</h1>

        <?php
        // Verifica se o formulário foi enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtém os dados do formulário
            $nome = htmlspecialchars($_POST["nome"]);
            $Cidade = htmlspecialchars($_POST["Cidade"]);
            $mensagem = htmlspecialchars($_POST["mensagem"]);
            $Estado_datalist = htmlspecialchars($_POST["Estado_datalist"]);

            // Exibe os dados
            echo "<p><strong>Nome:</strong> $nome</p>";
            echo "<p><strong>Cidade:</strong> $Cidade</p>";
            echo "<p><strong>Mensagem:</strong> $mensagem</p>";
            echo "<p><strong>Estado:</strong> $Estado_datalist</p>";
        } else {
            echo "<p>O formulário não foi submetido.</p>";
        }
        ?>

    </div>

</body>

</html>
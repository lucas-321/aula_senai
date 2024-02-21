<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cargos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php include('navbar.php'); ?>

    <div class="content">

        <form class="cadastro" method="POST" action="envia_cargo.php">

            <h3>Cadastro de Cargos</h3>

            <label for="nome">Nome:</label>
            <input type="text" name="nome">

            <label for="salario_base">Salário Base:</label>
            <input type="number" name="salario_base">

            <label for="descricao_funcoes">Descrição das Funções:</label>
            <textarea name="descricao_funcoes"></textarea>

            <input class="botao blue" type="submit" value="Enviar">

        </form>

    </div>

</body>
</html>
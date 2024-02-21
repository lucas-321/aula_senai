<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Setores</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include('navbar.php'); ?>

    <div class="content">

        <form class="cadastro" method="POST" action="envia_setor.php">

            <h3>Cadastro de Setor</h3>

            <label for="nome">Nome:</label>
            <input type="text" name="nome">

            <input class="botao blue" type="submit" value="Enviar">

        </form>

    </div>

</body>
</html>
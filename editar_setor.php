<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Setores</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php 
        include('navbar.php'); 
        include('conexao.php');

        $página = 'setores';

        $sql = "SELECT * 
                FROM setores
                WHERE id = $_POST[id] 
                AND ativo = 1";

        $result = mysqli_query($conexao, $sql);

        while($dados = mysqli_fetch_assoc($result)){

    ?>

        <div class="content">

            <form class="cadastro" method="POST" action="envia_setor_editado.php">

                <h3>Cadastro de Setor</h3>

                <label for="nome">Nome:</label>
                <input type="text" name="nome" value="<?php echo $dados['nome']; ?>">
                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

                <input class="botao blue" type="submit" value="Enviar">

            </form>

        </div>

    <?php
        }
    ?>

</body>
</html>
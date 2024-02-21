<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Cargos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php 
        include('navbar.php'); 
        include('conexao.php');

        $página = 'cargos';

        $sql = "SELECT * 
                FROM cargos
                WHERE id = $_POST[id] 
                AND ativo = 1";

        $result = mysqli_query($conexao, $sql);

        while($dados = mysqli_fetch_assoc($result)){

    ?>

        <div class="content">

            <form class="cadastro" method="POST" action="envia_cargo_editado.php">

                <h3>Edição de cargo</h3>

                <label for="nome">Nome:</label>
                <input type="text" name="nome" value="<?php echo $dados['nome']; ?>">

                <label for="salario_base">Salário Base:</label>
                <input type="number" name="salario_base" value="<?php echo $dados['salario_base']; ?>">

                <label for="descricao_funcoes">Descrição das Funções:</label>
                <textarea name="descricao_funcoes"><?php echo $dados['descricao_funcoes']; ?></textarea>

                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

                <input class="botao blue" type="submit" value="Enviar">

            </form>

        </div>

    <?php
        }
    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Funcionários</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php 
        include('navbar.php'); 
        include('conexao.php');

        $página = 'funcionários';

        $sql = "SELECT *, f.id AS f_id, f.nome AS f_nome, c.nome AS c_nome, s.nome AS s_nome
                FROM funcionarios AS f
                INNER JOIN cargos AS c ON f.cargo = c.id
                INNER JOIN setores AS s ON f.setor = s.id
                WHERE f.id = $_POST[id] 
                AND f.ativo = 1";

        $result = mysqli_query($conexao, $sql);

        while($dados = mysqli_fetch_assoc($result)){

    ?>

        <div class="content">

            <form class="cadastro" method="POST" action="envia_funcionario_editado.php">

                <h3>Edição de funcionario</h3>

                <label for="nome">Nome:</label>
                <input type="text" name="nome" value="<?php echo $dados['f_nome']; ?>">

                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" value="<?php echo $dados['cpf']; ?>">

                <label for="sexo">Sexo:</label>
                <select name="sexo" id="sexo">
                    <option value="<?php echo $dados['sexo']; ?>"><?php echo $dados['sexo']; ?></option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                </select>

                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" name="data_nascimento" value="<?php echo $dados['data_nascimento']; ?>">

                <label for="salario">Salário:</label>
                <input type="number" name="salario" value="<?php echo $dados['salario']; ?>">

                <label for="cargo">Cargo:</label>
                <select name="cargo" id="cargo">
                    <option value="<?php echo $dados['cargo']; ?>"><?php echo $dados['c_nome']; ?></option>
                    <option value="1">Gerente</option>
                    <option value="2">Operador</option>
                    <option value="3">Eletricista</option>
                    <option value="4">Secretário</option>
                    <option value="5">Motorista</option>
                </select>

                <label for="setor">Setor:</label>
                <select name="setor" id="setor">
                    <option value="<?php echo $dados['setor']; ?>"><?php echo $dados['s_nome']; ?></option>
                    <option value="1">Administração</option>
                    <option value="2">RH</option>
                    <option value="3">Vendas</option>
                    <option value="4">Marketing</option>
                    <option value="5">Jurídico</option>
                </select>

                <input type="hidden" name="id" value="<?php echo $dados['f_id']; ?>">

                <input class="botao blue" type="submit" value="Enviar">

            </form>

        </div>

    <?php
        }
    ?>

</body>
</html>
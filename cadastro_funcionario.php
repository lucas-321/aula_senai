<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionários</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php include('navbar.php'); ?>

    <div class="content">

        <form class="cadastro" method="POST" action="envia_funcionario.php">

            <h3>Cadastro de Funcionário</h3>

            <label for="nome">Nome:</label>
            <input type="text" name="nome">

            <label for="cpf">CPF:</label>
            <input type="text" name="cpf">

            <label for="sexo">Sexo:</label>
            <select name="sexo" id="sexo">
                <option value=""></option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select>

            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" name="data_nascimento">

            <label for="salario">Salário:</label>
            <input type="number" name="salario">

            <label for="cargo">Cargo:</label>
            <select name="cargo" id="cargo">
                <option value=""></option>
                <option value="1">Gerente</option>
                <option value="2">Operador</option>
                <option value="3">Eletricista</option>
                <option value="4">Secretário</option>
                <option value="5">Motorista</option>
            </select>

            <label for="setor">Setor:</label>
            <select name="setor" id="setor">
                <option value=""></option>
                <option value="1">Administração</option>
                <option value="2">RH</option>
                <option value="3">Vendas</option>
                <option value="4">Marketing</option>
                <option value="5">Jurídico</option>
            </select>

            <input class="botao blue" type="submit" value="Enviar">

        </form>

    </div>

</body>
</html>
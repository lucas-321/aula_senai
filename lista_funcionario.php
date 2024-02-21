<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cargos</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/table.css">
</head>
<body>

    <?php 
        include('navbar.php');
        include('conexao.php'); 
    ?>

    <div class="content">

    <table>

        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Sexo</th>
            <th>Data de Nascimento</th>
            <th>Cargo</th>
            <th>Setor</th>
            <th>Salário</th>
            <th>Situação</th>
        </tr>

        <?php

            include('conexao.php');

            $página = 'funcionários';

            $sql = "SELECT f.id, f.nome, cpf, sexo, data_nascimento, salario, situacao, c.nome AS nome_cargo, s.nome AS nome_setor
                    FROM funcionarios AS f
                    INNER JOIN cargos AS c ON f.cargo = c.id
                    INNER JOIN setores AS s ON f.setor = s.id 
                    WHERE f.ativo = 1";

            $result = mysqli_query($conexao, $sql);

            if(mysqli_num_rows($result) > 0) {

                while($dados = mysqli_fetch_assoc($result)){

                    $data = DateTime::createFromFormat('Y-m-d', $dados['data_nascimento']);
                    $nome = $dados['nome'];

                    echo "<tr>
                            <th>$nome</th> 
                            <td>$dados[cpf]</td> 
                            <td>$dados[sexo]</td> 
                            <td>".$data->format('d/m/Y')."</td> 
                            <td> ".$dados['nome_cargo']."</td> 
                            <td>$dados[nome_setor]</td>
                            <td>R$ $dados[salario]</td>  
                            <td> $dados[situacao]</td>
                            <td>
                                <form method='POST' action='editar_funcionario.php'>
                                    <input type='hidden' name='id' value='$dados[id]'>
                                    <input type='submit' class='botao blue' value='Editar'>
                                </form>
                            </td>
                            <td>
                                <form method='POST' action='excluir_funcionario.php'>
                                    <input type='hidden' name='id' value='$dados[id]'>
                                    <input type='submit' class='botao excluir' value='Excluir'>
                                </form>
                            </td>
                        </tr>";
                }
            
            }else{
                echo "Não há $página cadastrados";
            }           

        ?>

    </table>
    
    <div class="novo">
        <a href="cadastro_funcionario.php">
                <button class="botao blue">Novo</button>
        </a>
    </div>
        

    </div>

</body>
</html>
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
            <th>Cargo</th>
            <th>Descrição</th>
            <th>Salário</th>
        </tr>

        <?php

            include('conexao.php');

            $página = 'cargos';

            $sql = "SELECT * 
                    FROM cargos 
                    WHERE ativo = 1";

            $result = mysqli_query($conexao, $sql);

            if(mysqli_num_rows($result) > 0) {

                while($dados = mysqli_fetch_assoc($result)){
                    echo "<tr>
                            <th>$dados[nome]</th> 
                            <td>$dados[descricao_funcoes]</td> 
                            <td>R$ $dados[salario_base]</td>
                            <td>
                                <form method='POST' action='editar_cargo.php'>
                                    <input type='hidden' name='id' value='$dados[id]'>
                                    <input type='submit' class='botao blue' value='Editar'>
                                </form>
                            </td>
                            <td>
                                <form method='POST' action='excluir_cargo.php'>
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
        <a href="cadastro_cargo.php">
                <button class="botao blue">Novo</button>
        </a>
    </div>
        

    </div>

</body>
</html>
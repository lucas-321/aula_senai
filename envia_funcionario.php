<?php

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$sexo = $_POST['sexo'];
$data_nascimento = $_POST['data_nascimento'];
$salario = $_POST['salario'];
$cargo = $_POST['cargo'];
$setor = $_POST['setor'];


include('conexao.php');

$sql = "INSERT INTO funcionarios (nome, cpf, sexo, data_nascimento, salario, cargo, setor) VALUES ('$nome', '$cpf', '$sexo', '$data_nascimento', $salario, $cargo, $setor);";

if(mysqli_query($conexao, $sql)){
    // echo "Dados insreidos com sucesso!";
    header("Location:lista_funcionario.php?success=true");
    exit();
}else{
    header("Location:lista_funcionario.php?error=true");
    exit();
    // echo "Erro ao cadastrar dados! ".mysqli_error($conexao);
}

?>
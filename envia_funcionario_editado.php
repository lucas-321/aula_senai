<?php
include('conexao.php');

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$sexo = $_POST['sexo'];
$data_nascimento = $_POST['data_nascimento'];
$salario = $_POST['salario'];
$cargo = $_POST['cargo'];
$setor = $_POST['setor'];
$id = $_POST['id'];

$sql = "UPDATE funcionarios 
        SET nome = '$nome', cpf = '$cpf', sexo = '$sexo', data_nascimento = '$data_nascimento', cargo = '$cargo', setor = '$setor'
        WHERE id = $id";

if(mysqli_query($conexao, $sql)){
    header("Location:lista_funcionario.php?success=true");
    exit();
}else{
    header("Location:lista_funcionario.php?error=true");
    exit();
}

?>
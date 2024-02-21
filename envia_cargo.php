<?php

$nome = $_POST['nome'];
$descricao_funcoes = $_POST['descricao_funcoes'];
$salario_base = $_POST['salario_base'];

include('conexao.php');

$sql = "INSERT INTO cargos (nome, descricao_funcoes, salario_base) VALUES ('$nome', '$descricao_funcoes', $salario_base);";

if(mysqli_query($conexao, $sql)){
    header("Location:lista_cargo.php?success=true");
    exit();
}else{
    header("Location:lista_cargo.php?error=true");
    exit();
}

?>
<?php
include('conexao.php');

$nome = $_POST['nome'];
$salario_base = $_POST['salario_base'];
$descricao_funcoes = $_POST['descricao_funcoes'];
$id = $_POST['id'];

$sql = "UPDATE cargos 
        SET nome = '$nome', salario_base = $salario_base, descricao_funcoes = '$descricao_funcoes' 
        WHERE id = $id";

if(mysqli_query($conexao, $sql)){
    header("Location:lista_cargo.php?success=true");
    exit();
}else{
    header("Location:lista_cargo.php?error=true");
    exit();
}

?>
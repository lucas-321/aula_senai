<?php
include('conexao.php');

$id = $_POST['id'];

$sql = "UPDATE funcionarios SET ativo = 0 WHERE id = $id";

if(mysqli_query($conexao, $sql)){
    header("Location:lista_funcionario.php?success=true");
    exit();
}else{
    header("Location:lista_funcionario.php?error=true");
    exit();
}

?>
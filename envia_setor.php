<?php

$nome = $_POST['nome'];

include('conexao.php');

$sql = "INSERT INTO setores (nome) VALUES ('$nome');";

if(mysqli_query($conexao, $sql)){
    header("Location:lista_setor.php?success=true");
    exit();
}else{
    header("Location:lista_setor.php?error=true");
    exit();
    // echo "Erro ao cadastrar dados! ".mysqli_error($conexao);
}

?>
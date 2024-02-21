<?php
include('conexao.php');

$id = $_POST['id'];

$sql = "UPDATE setores SET ativo = 0 WHERE id = $id";

if(mysqli_query($conexao, $sql)){
    header("Location:lista_setor.php?success=true");
    exit();
}else{
    header("Location:lista_setor.php?error=true");
    exit();
}

?>
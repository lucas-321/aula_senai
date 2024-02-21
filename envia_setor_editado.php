<?php
include('conexao.php');

$nome = $_POST['nome'];
$id = $_POST['id'];

$sql = "UPDATE setores SET nome = '$nome' WHERE id = $id";

if(mysqli_query($conexao, $sql)){
    header("Location:lista_setor.php?success=true");
    exit();
}else{
    header("Location:lista_setor.php?error=true");
    exit();
}

?>
<?php
include('conexao.php');

$id = $_POST['id'];

$sql = "UPDATE cargos SET ativo = 0 WHERE id = $id";

if(mysqli_query($conexao, $sql)){
    header("Location:lista_cargo.php?success=true");
    exit();
}else{
    header("Location:lista_cargo.php?error=true");
    exit();
}

?>
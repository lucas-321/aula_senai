<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'empresa';

$mysqli = new mysqli($host, $user, $password, $database);

$conexao = $mysqli;

if($mysqli->error){
    die("Falha na conexão com o banco. ".$mysqli->error);
}else{
    // echo "<h3 style='color: green'>Conexão bem sucedida!</h3>";
}

?>
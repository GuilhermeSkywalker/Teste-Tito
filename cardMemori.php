<?php

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$dt_nascimento = $_POST["nascimento"];
$cidades = $_POST["cidade"];



$conn = new mysqli("localhost", "root", "", "tito");

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}


$sql = "INSERT INTO pessoas (nome, idade, data_Nascimento , id_cidade) VALUES ('" . $nome . "','" . $idade . "','" . $dt_nascimento . "', '" . $cidades . "')";

if ($conn->query($sql) === TRUE) {
    echo "Inserção bem-sucedida!";
} else {
    echo "Erro ao executar a consulta: " . $stmt->error;
}


echo "<br /><button type='button' onClick='window.location.replace(\"cadastro_pessoas.php\")'>Voltar</button>";

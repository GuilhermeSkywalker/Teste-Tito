<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cidades</title>
</head>

<body>
    <h1>Cadatro de Cidade</h1>
    <form method="post" action="cadastro_cidade.php">
        Nome: <input type="text" name="cidade">
        <button type="submit">Cadastar</button>
    </form>
</body>

<?php
if (!isset($_POST["cidade"]))
    return;

$nomeCidade = $_POST["cidade"];


$conn = new mysqli("localhost", "root", "", "tito");

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

$sql = "insert into cidade(nome) values('" . $nomeCidade . "') ";

if ($conn->query($sql) === TRUE) {
    echo "Dados cadastrado com sucesso !";
} else {
    echo "Erro ao executar a consulta: " . $stmt->error;
}

?>

</html>
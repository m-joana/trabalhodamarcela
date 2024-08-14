<?php
include 'db_connect.php';

$medida = $_POST['medida'];
$unidade = $_POST['unidade'];
$cor = $_POST['cor'];

// Insere os dados na tabela quadrados
$sql = "INSERT INTO quadrados (medida, unidade, cor, lado) VALUES ('$medida', '$unidade', '$cor', '$medida')";

if ($conn->query($sql) === TRUE) {
    echo "Novo quadrado cadastrado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: index.php");
exit();
?>

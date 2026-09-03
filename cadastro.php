<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>

<body>

<h1>Cadastro de Usuário</h1>

<form method="POST">

    Nome:<br>
    <input type="text" name="nome"><br><br>

    E-mail:<br>
    <input type="email" name="email"><br><br>

    <button type="submit">Cadastrar</button>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $email = $_POST["email"];

    echo "<h2>Dados recebidos:</h2>";
    echo "Nome: " . $nome . "<br>";
    echo "E-mail: " . $email;

}

?>

</body>
</html>

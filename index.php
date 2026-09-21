<?php

include "infra/conexao.php";
$brinquedos = mysqli_query($conexao, "SELECT * FROM brinquedos");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Brinquedos</title>
    <link rel="stylesheet" href="style/styles.css">
</head>


<body>
    <header>
        <h1>CRUD - Brinquedos</h1>
    </header>
    <main>
        <h2>Adicione um novo brinquedo!</h2>
        <form action="public/cadastrar.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nome">
            <br>
            <label for="categoria">Categoria:</label>
            <input type="text" name="categoria">
            <br>
            <label for="faixa_etaria">Faixa Etária:</label>
            <input type="number" name="faixa_etaria">
            <br>
            <label for="preco">Preço:</label>
            <input type="number" name="preco" step="0.01">
            <br>
            <label for="quantidade">Quantidade em estoque:</label>
            <input type="number" name="quantidade">
            <br>
            <button type="submit">Cadastrar</button>
        </form>
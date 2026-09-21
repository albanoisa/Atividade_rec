<?php

include "../infra/conexao.php";

$id = $_GET["id"];
$sql = "SELECT * FROM brinquedos WHERE id = $id";
$resultado = mysqli_query($conexao, $sql );

$brinquedo =mysqli_fetch_assoc($resultado);

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
        <h2>Editando o brinquedo <?php echo $brinquedo["nome"]?>!</h2>
        <form action="atualizar.php" method="POST">
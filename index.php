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


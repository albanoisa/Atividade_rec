<?php

include "../infra/conexao.php";

$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$faixa_etaria = $_POST["faixa_etaria"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];

$sql = "INSERT INTO brinquedos (nome,categoria,faixa_etaria,preco,quantidade) VALUES ('$nome','$categoria','$faixa_etaria','$preco','$quantidade')";

mysqli_query($conexao, $sql);

header("Location: ../index.php");
?>
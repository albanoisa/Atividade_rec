<?php

include "../infra/conexao.php";

$id = $_GET["id"];
$sql = "SELECT * FROM brinquedos WHERE id = $id";
$resultado = mysqli_query($conexao, $sql );

$brinquedo =mysqli_fetch_assoc($resultado);

?>
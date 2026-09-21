<?php

include "infra/conexao.php";
$brinquedos = mysqli_query($conexao, "SELECT * FROM brinquedos");

?>

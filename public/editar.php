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
            <input type="hidden" name="id" value="<?php echo $brinquedo["id"]?>">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="<?php echo $brinquedo["nome"]?>">
            <br>
            <label for="categoria">Categoria:</label>
            <input type="text" name="categoria" value="<?php echo $brinquedo["categoria"]?>">
            <br>
            <label for="faixa_etaria">Faixa Etária:</label>
            <input type="text" name="faixa_etaria" value="<?php echo $brinquedo["faixa_etaria"]?>">
            <br>
            <label for="preco">Preço:</label>
            <input type="number" name="preco" value="<?php echo $brinquedo["preco"]?>" step="0.01">
            <br>
            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" value="<?php echo $brinquedo["quantidade"]?>">
            <br>
            <button type="submit">Atualizar</button>
        </form>

    </main>
    <footer>
    </footer>


</body>
</html>
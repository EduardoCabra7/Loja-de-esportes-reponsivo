<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./materialize/css/materialize.min.css">
    <title>Document</title>
</head>
<body>


<?php 

if(!isset($_SESSION)){
    session_start();
     };

echo "Seja bem vindo {$_SESSION['nome']} você é {$_SESSION['cargo']}";

?>
<a href="consultar-usuario.php" class="btn">Consultar Usuários</a>
<a href="editar-perfil.php" class="btn">Editar Perfil</a>
<a href="cadastrar-produto.php" class="btn">Cadastrar Produtos</a>
<a href="cadastrar-usuario.php" class="btn">Cadastrar Usuários</a>
<a href="carrinho.php">Consultar Carrinho</a>
<a href="sair.php">Sair</a>
</body>
</html>
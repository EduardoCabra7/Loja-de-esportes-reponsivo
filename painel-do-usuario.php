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


?>
<p><?php echo "Seja bem vindo {$_SESSION['nome']} você é {$_SESSION['cargo']}";
 ?></p>
<a href="carrinho.php" class="btn">Consultar Carrinho</a><br>
<a href="editar-perfil.php" class="btn">Editar Perfil</a><br>
<a href="sair.php">Sair</a><br>
</body>
</html>
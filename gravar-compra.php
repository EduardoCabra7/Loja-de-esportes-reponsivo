<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    include_once 'conexao.php';
    include_once 'funcoes.php';

    session_start();

    $dadoscli="select * from cliente where codcliente =".$_SESSION["codcliente"];
    
    $dadosprod="select * from bancoconsulta where codprod =".$cod;
    


    $res=mysqli_query($con,$dadoscli);
    $row=mysqli_query($con,$dadosprod);

    $result=mysqli_fetch_array($row);


    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $dtnasc = dataBanco($_POST["dtnasc"]);
    $numcart = $_POST["numcart"];

    $codprod=$result["codprod"];
    $codcli=$result["codcliente"];
    $codforn=$result["codforn"];
    $nomeprod=$result["nomeprod"];
    $valor=$result["valor"];


    $sql = "insert into registrocompra values(
            null, '".$codprod."', '".$codcli."', 
            '".$codforn."', 
            '".$nome."','".$email."','".$cpf."',
            '".$dtnasc."','".$numcart."',
            '".$nomeprod."','".$valor."')";
            if(mysqli_query($con, $sql))
            {
                $msg = "Compra realizada com sucesso!!";
            }else{
                $msg = "Erro ao Gravar!";
            }
        
?>
        
</body>
</html>
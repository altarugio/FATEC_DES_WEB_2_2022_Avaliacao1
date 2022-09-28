<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
$logado = $_SESSION['loggedin'];
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Pedágio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; 
            text-align: center; 
            background:grey;
        }


    </style>
</head>
<body>
    <div class="page-header">
        <h1>
        <br>
        </b>Seja Bem Vindo ao Sistema de Gestão de Pedagio</h1> 
    </div>
    <div class="menu">
    <p><br>
        <a href="cadastro.php" class="btn btn-primary">Cadastro de Passagens</a>
        <br><br>
        <a href="oscadastrados.php" class="btn btn-primary">Passagens cobradas</a>
        <div>
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </div>
    </div>
    </p>
</body>
</html>
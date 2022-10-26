<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE){
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; background-color: #BACDE5}
    </style>

    <title>Acesso</title>
</head>
<body>
    <div class="page-header">
        <h1>Inscrição realizada com sucesso, <?php echo htmlspecialchars($_SESSION['username']); ?></h1>
        <br>
        <h2>Boa sorte!</h2>
    </div>
    <p>
        <a href="cadastro.php" class="btn btn-primary">Inscrição</a>
        <br><br>

        <a href="logout.php" class="btn btn-danger">Sair</a>

        <a href="gravar_inscricao.php" class="btn btn-success">Ver inscritos</a>
    </p>
</body>
</html>
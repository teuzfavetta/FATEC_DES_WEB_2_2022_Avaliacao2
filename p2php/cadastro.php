<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE){
    header("location: index.php");
    exit;
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome=$_POST['nome'];
    $idade=$_POST['idade'];
    $posicao=$_POST['posicao'];

    $handle = fopen("cadastros.txt", "a");
    fwrite($handle, $nome."\n");
    fwrite($handle, $idade."\n");
    fwrite($handle, $posicao."\n");
    fclose($handle);
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
        body{ font: 14px sans-serif; background-color: #BACDE5}
        .wrapper{ width: 350px; padding: 20px; }
    </style>
    
    <title>Cadastro</title>
</head>
<body>
    <div class="wrapper">
        <h2>Cadastro</h2>
        <p>Insira os dados pedidos</p>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" class="" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Idade</label>
                <input type="number" name="idade" class="" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Posição</label>
                <input type="text" name="posicao" class="" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" name="cadastrar" class="btn btn-primary" value="Cadastrar">
            </div>
        </form>
    </div>
</body>
</html>
<?php

if($_SERVER["REQUEST_METHOD"]  == "POST"){
    session_start(); 
    
    if($_POST['username'] == 'fatec' and $_POST['password'] == 'araras'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['username'] = 'Mateus Favetta';
        header("location: acesso.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
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
        body{font: 14px sans-serif; background-color: #BACDE5; text-align: center}
        .wrapper{width: 350px; padding: 20px;}
        
    </style>
    
    <title>Inscrições para peneira de futebol</title>
</head>
<body>
    <div class='wrapper'>
        <h2>Acesse sua inscrição</h2>
        <p>Entre com seu login e senha</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="username" class="form-control" value="fatec">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="text" name="password" class="form-control" value="araras">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
            </div>
        </form>
    </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de Parâmetros</title>
</head>
<body>
<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$posicao = $_Post['posicao'];

function validar_post($dado_enviado){
    if(isset($dado_enviado) and $dado_enviado <> ""){
        return TRUE;
    }
    return FALSE;
}

if(validar_post($_POST['nome']) and validar_post($_POST['idade']) and validar_post($_POST['posicao'])){
    echo '<br><br>';
    echo 'Nome: '.$_POST['nome'];
    echo '<br><br>';
    echo 'Idade: '.$_POST['idade'];
    echo '<br><br>';
    echo 'Posição: '.$_POST['posicao'];
  
    
require_once('dados_banco.php');


$conn = mysqli_connect($servername, $nome, $idade, $posicao, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO inscritos (nome, idade, posicao)
VALUES ('$nome', '$idade', '$posicao')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

}





?>
</body>
</html>
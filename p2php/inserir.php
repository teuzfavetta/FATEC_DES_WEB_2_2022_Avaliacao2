<?php

require_once('dados_banco.php');

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $nome, $idade, $posicao);
 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO inscritos (nome, idade, posicao)
    VALUES ('Felipe', 21, 'atacante')";

    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
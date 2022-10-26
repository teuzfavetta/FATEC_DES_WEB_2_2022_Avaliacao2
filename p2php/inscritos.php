<?php

class Inscritos
{
    public function cadastro($nome, $idade, $posicao)
    {
        global $pdo;

        $sql = "SELECT * FROM usuario WHERE nome = :nome AND idade = :idade AND posicao = :posicao";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("nome", $nome);
        $sql->bindValue("idade", $idade);
        $sql->bindValue("posicao", $posicao);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();

            $_SESSION['idUser'] = $dado['idUsuario'];

            return true;
        }else{
            return false;            
        }
    }
}
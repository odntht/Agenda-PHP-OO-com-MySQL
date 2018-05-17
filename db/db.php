<?php

class db{

    public function conectar() {
        $dns = 'mysql:host=localhost;dbname=db_agenda';
        $usuario = 'root';
        $senha = '';

        try {
            $conexao = new PDO($dns, $usuario, $senha, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET names utf8"));
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $conexao;
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

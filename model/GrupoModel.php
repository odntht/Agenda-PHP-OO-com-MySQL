<?php


require 'C:\xampp\htdocs\Agenda\db\db.php';

class GrupoModel {
    public function listar(){
        
        $database = new db();

        $conexao = $database->conectar();

        $select = $conexao->prepare('select * from tb_grupo');
        
        $select->execute();
        
        return $select->fetchAll();
        
    }
}

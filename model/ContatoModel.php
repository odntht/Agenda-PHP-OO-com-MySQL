<?php

require 'C:\xampp\htdocs\Agenda\db\db.php';

class ContatoModel {

    public function listar($id_usuario) {
        $database = new db();

        $conexao = $database->conectar();

        $select = $conexao->prepare('select * from tb_contato where id_usuario = :id_usuario');

        $select->execute(array(':id_usuario' => $id_usuario));

        return $select->fetchAll();
    }

    public function inserir($nome, $apelido, $dtNascimento, $telefone, $endereco, $grupo, $usuario){


        $database = new db();

        $conexao = $database->conectar();

        $insert = $conexao->prepare('insert into tb_contato (nm_contato, ds_apelido, dt_nascimento, ds_telefone, ds_endereco, id_usuario, id_grupo) values (:nm_contato, :ds_apelido, :dt_nascimento, :ds_telefone, :ds_endereco, :id_usuario, :id_grupo)');
        
        $insert->execute(
                array(":nm_contato" => $nome,
                    ":ds_apelido" => $apelido,
                    ":dt_nascimento" => $dtNascimento,
                    ":ds_telefone" => $telefone,
                    ":ds_endereco" => $endereco,
                    ":id_usuario" => $usuario,
                    ":id_grupo" => $grupo
                )
        );

        if ($insert->rowCount() > 0) {
            echo "<script>alert('Contato inserido com sucesso.');"
            . "location.assign('http://localhost:8080/Agenda/view/contato/lista.php');</script>";
        } else {
            echo "<script>alert('Erro inesperado, tente novamente.');"
            . "location.assign('http://localhost:8080/Agenda/view/contato/cadastro.php');</script>";
        }
    }
    
    public function alterar($nome, $apelido, $dtNascimento, $telefone, $endereco, $grupo, $contato){


        $database = new db();

        $conexao = $database->conectar();

        $insert = $conexao->prepare('update tb_contato set nm_contato = :nm_contato, ds_apelido = :ds_apelido, dt_nascimento = :dt_nascimento, ds_telefone = :ds_telefone, ds_endereco = :ds_endereco , id_grupo = :id_grupo where id_contato = :id_contato');
        
        $insert->execute(
                array(":nm_contato" => $nome,
                    ":ds_apelido" => $apelido,
                    ":dt_nascimento" => $dtNascimento,
                    ":ds_telefone" => $telefone,
                    ":ds_endereco" => $endereco,
                    ":id_grupo" => $grupo,
                    ":id_contato" => $contato
                )
        );

        if ($insert->rowCount() > 0) {
            echo "<script>alert('Contato alterado com sucesso.');"
            . "location.assign('http://localhost:8080/Agenda/view/contato/lista.php');</script>";
        } else {
            echo "<script>alert('Erro inesperado, tente novamente.');"
            . "location.assign('http://localhost:8080/Agenda/view/contato/lista.php');</script>";
        }
    }
    
    public function excluir($id_contato) {
        $database = new db();

        $conexao = $database->conectar();

        $delete = $conexao->prepare('delete from tb_contato where id_contato = :id_contato');

        $delete->execute(array(':id_contato' => $id_contato));

        if ($delete->rowCount() > 0) {  
            echo "<script>alert('Contato excluído com sucesso.');"
            . "location.assign('http://localhost:8080/Agenda/view/contato/lista.php');</script>";
        } else {
            echo "<script>alert('Erro inesperado, tente novamente.');"
            . "location.assign('http://localhost:8080/Agenda/view/contato/lista.php');</script>";
        }
    }

}

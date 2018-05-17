<?php

require '../db/db.php';

class UsuarioModel {

    public function inserir($nome, $email, $senha) {

        if ($this->verificarEmail($email)) {

            $database = new db();

            $conexao = $database->conectar();

            $insert = $conexao->prepare('insert into tb_usuario (nm_usuario, ds_email, ds_senha, st_ativo) values (:nm_usuario, :ds_email, :ds_senha, :st_ativo)');
            $insert->execute(
                    array(":nm_usuario" => $nome,
                        ":ds_email" => $email,
                        ":ds_senha" => md5($senha),
                        ":st_ativo" => 1
                    )
            );

            if ($insert->rowCount() > 0) {
                echo "<script>alert('Usuário inserido com sucesso.');"
                . "location.assign('http://localhost:8080/Agenda/');</script>";
            } else {
                echo "<script>alert('Erro inesperado, tente novamente.');"
                . "location.assign('http://localhost:8080/Agenda/');</script>";
            }
        } else {
            echo "<script>alert('E-mail já cadastradado, tente novamente.');"
            . "location.assign('http://localhost:8080/Agenda/');</script>";
        }
    }

    public function verificarEmail($email) {

        $database = new db();

        $conexao = $database->conectar();

        $select = $conexao->prepare('select * from tb_usuario where ds_email = :ds_email');
        $select->execute(array(':ds_email' => $email));

        if ($select->rowCount() == 0) {
            return true;
        }

        return false;
    }

    public function logar($email, $senha) {
        $database = new db();

        $conexao = $database->conectar();

        $select = $conexao->prepare('select * from tb_usuario where ds_email = :ds_email and ds_senha = :ds_senha');

        $select->execute(array(':ds_email' => $email, ':ds_senha' => md5($senha)));

        return $select->fetchObject();
    }

    public function alterarSenha($idUsuario, $senha) {
        $database = new db();
        $conexao = $database->conectar();
        $update = $conexao->prepare('update tb_usuario set ds_senha = :ds_senha where id_usuario = :id_usuario');
        $update->execute(array(':ds_senha' => md5($senha), ':id_usuario' => $idUsuario));


        if ($update->rowCount() > 0) {
            echo "<script>alert('Senha alterada com sucesso.');"
            . "location.assign('http://localhost:8080/Agenda/view/contato/lista.php');</script>";
        } else {
            echo "<script>alert('Erro inesperado, tente novamente.');"
            . "location.assign('http://localhost:8080/Agenda/view/usuario/alterarSenha.php');</script>";
        }
    }

}

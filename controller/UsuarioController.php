<?php

$acao = $_POST['acao'];

switch ($acao) {
    case 'inserir':
        require '../model/UsuarioModel.php';

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $usuario = new UsuarioModel();
        $usuario->inserir($nome, $email, $senha);

        break;
    case 'login':
        require '../model/UsuarioModel.php';

        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $usuario = new UsuarioModel();
        $dados = $usuario->logar($email, $senha);

        if (empty($dados)) {
            echo "<script>alert('Usuário ou senha incorreto.');"
            . "location.assign('http://localhost:8080/Agenda/');</script>";
        } else {

            session_start();

            $_SESSION['id'] = $dados->id_usuario;
            $_SESSION['nome'] = $dados->nm_usuario;
            $_SESSION['email'] = $dados->ds_email;
            header("location:../view/contato/lista.php");
        }

        break;
    case 'contatoCadastro':
        require '../model/ContatoModel.php';

        $nome = $_POST['nome'];
        $apelido = $_POST['apelido'];
        $dtNascimento = $_POST['dtNascimento'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $grupo = $_POST['grupo'];
        $usuario = $_POST['usuario'];
        $contato = new ContatoModel();
        $contato->inserir($nome, $apelido, $dtNascimento, $telefone, $endereco, $grupo, $usuario);

        break;
    case 'contatoExclusao':
        require '../model/ContatoModel.php';

        $idContato = $_POST['id_contato'];
        $contato = new ContatoModel();
        $contato->excluir($idContato);

        break;
    case 'usuarioAlterar':
        require '../model/UsuarioModel.php';

        $idUsuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $usuario = new UsuarioModel();
        $usuario->alterarSenha($idUsuario, $senha);

        break;
    default:
        break;
}
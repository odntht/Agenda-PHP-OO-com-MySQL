<?php
session_start();
if (!isset($_SESSION['id'])) {
    echo "<script>alert('Sua sessão expirou, entre novamente.');"
    . "location.assign('http://localhost:8080/Agenda/');</script>";
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="http://localhost:8080/Agenda/assets/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Bem vindo, <?= $_SESSION['nome'] ?></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="http://localhost:8080/Agenda/view/usuario/alterarSenha.php?id=<?= $_SESSION['id']?>">Alterar senha <span class="sr-only">(current)</span></a></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                            </div>
                            <a href="http://localhost:8080/Agenda/controller/logout.php" class="btn btn-danger">Sair</a>
                        </form>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

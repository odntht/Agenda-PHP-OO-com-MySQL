<html>a
    <head>
        <meta charset="UTF-8">
        <link href="assets/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Login</strong>
                        </div>
                        <form action="controller/UsuarioController.php" method="post">
                            <input type="hidden" name="acao" value="login">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label>E-mail:</label>
                                        <input type="email" name="email" class="form-control" required="required">
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label>Senha:</label>
                                        <input type="password" name="senha" class="form-control" required="required">
                                    </div> 
                                </div>
                            </div>
                            <div class="panel-footer" style="text-align: right">
                                <input type="submit" value="Entrar" class="btn btn-primary">
                                <button onclick="location.assign('http://localhost:8080/Agenda/view/usuario/cadastro.php')" class="btn btn-warning">Cadastrar novo usuário </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

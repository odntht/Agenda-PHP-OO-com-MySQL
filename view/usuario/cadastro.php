<html>
    <head>
        <meta charset="UTF-8">
        <link href="http://localhost:8080/Agenda/assets/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Usuário</strong>
                        </div>
                        <div class="panel-body">
                            <form action="../../controller/UsuarioController.php" method="post">
                                <input type="hidden" name="acao" value="inserir">
                                <div class="panel-body">

                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label>Nome:</label>
                                            <input type="text" name="nome" class="form-control" required="required">
                                        </div> 
                                    </div>
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
                                    <input type="submit" value="Enviar" class="btn btn-primary">
                                    <input type="reset" value="Limpar" class="btn btn-warning">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

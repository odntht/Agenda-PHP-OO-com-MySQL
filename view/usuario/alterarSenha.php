<?php
require '../layout/header.php';
?>
<script type="text/javascript">
    function validarSenha() {
        var senha = document.getElementById('senha').value;
        var senha2 = document.getElementById('senha2').value;

        if (senha != senha2) {
            document.getElementById('mensagem').innerHTML = "<div id='error' class='alert alert-danger'><strong>ALERTA!</strong> Senhas não conferem!</div>";
            return false;
        } else {
            document.getElementById('mensagem').innerHTML = "<div id='sucess' class='alert alert-success'><strong>Sucesso!</strong> Senhas conferem!</div>";
            return true;
        }
    }

    function enviar() {
        return validarSenha();
    }
</script>
<br><br>    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="../contato/lista.php" class="btn btn-warning">Voltar</a>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Alterar Senha</strong>
                </div>
                <div class="panel-body">
                    <div id="mensagem">



                    </div>
                    <form onsubmit="return enviar();" action="../../controller/UsuarioController.php" method="post">
                        <input type="hidden" name="acao" value="usuarioAlterar">
                        <input type="hidden" name="usuario" value="<?= $_SESSION['id'] ?>">
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label>Senha:</label>
                                    <input type="password" name="senha" id="senha" class="form-control" required="required">
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label>Senha confirmação:</label>
                                    <input type="password" name="senha2" id="senha2" onkeyup="validarSenha()" class="form-control" required="required">
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

<?php
require '../layout/footer.php';
?>

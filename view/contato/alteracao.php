<?php
    require '../layout/header.php';
    require '../../controller/GrupoController.php';
    
    $grupo = new GrupoController();
    $lista = $grupo->listar();
    
    
?>
<script type="text/javascript">
    /* Máscaras ER */
function mascara(o,f){
    v_obj=o;
    v_fun=f;
    setTimeout("execmascara()",1);
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value);
}
function mtel(v){
    v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id( el ){
	return document.getElementById( el );
}
window.onload = function(){
	id('telefone').onkeyup = function(){
		mascara( this, mtel );
	};
};
</script>
    <br><br>    
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="lista.php" class="btn btn-warning">Voltar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Cadastro de contato</strong>
                        </div>
                        <div class="panel-body">
                            <form action="../../controller/UsuarioController.php" method="post">
                                <input type="hidden" name="acao" value="contatoAlteracao">
                                <input type="hidden" name="contato" value="<?=$_GET['id']?>">
                                <div class="panel-body">

                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label>Nome:</label>
                                            <input type="text" name="nome" class="form-control" value="<?=$_GET['nome']?>" required="required">
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label>Apelido:</label>
                                            <input type="text" name="apelido" class="form-control" value="<?=$_GET['apelido']?>" required="required">
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label>Data de nascimento:</label>
                                            <input type="date" name="dtNascimento" class="form-control" value="<?=$_GET['dtNascimento']?>"required="required">
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label>Telefone:</label>
                                            <input type="text" name="telefone" id="telefone" value="<?=$_GET['telefone']?>" maxlength="15" class="form-control" required="required">
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label>Endereço:</label>
                                            <input type="text" name="endereco" value="<?=$_GET['endereco']?>"class="form-control" required="required">
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label>Grupo:</label>
                                            <select name="grupo" class="form-control">
                                                <?php
                                                    foreach($lista as $item){
                                                        
                                                        if($_GET['grupo'] == $item['id_grupo']){
                                                ?>
                                                    <option value="<?=$item['id_grupo']?>"><?=$item['ds_grupo']?></option>
                                                <?php 
                                                        }
                                                    }
                                                ?>
                                                <?php
                                                    foreach($lista as $item){
                                                        if($_GET['grupo'] != $item['id_grupo']){                                                        
                                                ?>
                                                    <option value="<?=$item['id_grupo']?>"><?=$item['ds_grupo']?></option>
                                                <?php 
                                                        }
                                                    }
                                                ?>
                                            </select>
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

<?php
    require '../layout/header.php';
    require '../../controller/ContatoController.php';
    
    $contato = new ContatoController();
    $lista = $contato->listar($_SESSION['id']);
    
    
?>

    <br><br>    
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="cadastro.php" class="btn btn-success">Inserir</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Contatos</strong>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">Nome</th>
                                        <th style="text-align: center;">Apelido</th>
                                        <th style="text-align: center;">Data de Nascimento</th>
                                        <th style="text-align: center;">Telefone</th>
                                        <th style="text-align: center;">Endereço</th>
                                        <th style="text-align: center;">Grupo</th>
                                        <th style="text-align: center;">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($lista as $item){
                                    ?>
                                        <tr>
                                            <td style="text-align: center;"><?=$item['nm_contato']?></td>
                                            <td style="text-align: center;"><?=$item['ds_apelido']?></td>
                                            <td style="text-align: center;"><?=$item['dt_nascimento']?></td>
                                            <td style="text-align: center;"><?=$item['ds_telefone']?></td>
                                            <td style="text-align: center;"><?=$item['ds_endereco']?></td>
                                            <td style="text-align: center;"><?=$item['id_grupo']?></td>
                                            <td style="text-align: center;">
                                                
                                                <form action="../../controller/UsuarioController.php" method="POST">
                                                    <a href="alteracao.php?id=<?=$item['id_contato']?>&nome=<?=$item['nm_contato']?>&apelido=<?=$item['ds_apelido']?>&dtNascimento=<?=$item['dt_nascimento']?>&telefone=<?=$item['ds_telefone']?>&endereco=<?=$item['ds_endereco']?>&grupo=<?=$item['id_grupo']?>" class="btn btn-warning">
                                                        <i class="glyphicon glyphicon-pencil"></i>
                                                    </a>
                                                    <input type="hidden" name="acao" value="contatoExclusao">
                                                    <input type="hidden" name="id_contato" value="<?=$item['id_contato']?>">
                                                    <button href="#" class="btn btn-danger">
                                                        <i class="glyphicon glyphicon-trash"></i>
                                                    </button>
                                                </form>
                                                
                                            </td>
                                        </tr>                                        
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
    require '../layout/footer.php';
?>

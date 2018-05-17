<?php

require 'C:\xampp\htdocs\Agenda\model\ContatoModel.php';

class ContatoController {
    
    public function listar($id_usuario){
        
        $contato = new ContatoModel();
        return $contato->listar($id_usuario);
    }
    
}

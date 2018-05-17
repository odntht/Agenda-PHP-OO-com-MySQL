<?php

require 'C:\xampp\htdocs\Agenda\model\GrupoModel.php';

class GrupoController {
    
    public function listar(){
        
        $grupo = new GrupoModel();
        return $grupo->listar();
    }
    
}

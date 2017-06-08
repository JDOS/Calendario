<?php
include_once 'Elemento.php';
include_once 'Row.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Table
 *
 * @author Daniel
 */


class Table extends Elemento {
   
   
    public function __construct() {
        //cria elemento TABLE
        parent::__construct('table');
    }
    
    public function addLinha(){
        //Cria linha (TR) 
        $linha = new Row;
        //Adiciona na Tabela
        parent::add($linha);
        return $linha;
    }
    
    
}

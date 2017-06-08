<?php
require_once 'Elemento.php';
require_once 'Cell.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Row
 *
 * @author Daniel
 */


class Row extends Elemento{
    public function __construct() {
        parent::__construct('tr');
    } 
    public function addCell($valor){
        //Cria Celula (td) da linha
        $cell = new Cell($valor);
        parent::add($cell);
        //retorna objeto instanciado
        return $cell;
    }
           
}

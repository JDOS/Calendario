<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cell
 *
 * @author Daniel
 */
class Cell extends Elemento {
    public function __construct($valor) {
        parent::__construct('td');
        parent::add($valor);
        
    }
}

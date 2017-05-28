<?php

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
class Table {
   
    private $tagname;
    private $data;
    private $style;
   
    public function __construct() {
        $this->tag="table";
    }
    
    public function __set($propriedade){
        
    }
}

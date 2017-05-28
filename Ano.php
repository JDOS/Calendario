<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ano
 *
 * @author Daniel
 */
class Ano {
    
    private $ano;
    
    private $meses = array( '1' => "Janeiro", '2' => "Fevereiro", '3' => "Março",
                     '4' => "Abril",   '5' => "Maio",      '6' => "Junho",
                     '7' => "Julho",   '8' => "Agosto",    '9' => "Setembro",
                     '10' => "Outubro", '11' => "Novembro",  '12' => "Dezembro"
                     );
    
    
    public function __construct($ano) {
        $this->ano=$ano;
        
    }
}

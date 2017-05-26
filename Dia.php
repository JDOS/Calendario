<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dia
 *
 * @author Daniel
 */
class Dia {
    private $numero;
    private $diaSemana;
    
      public function __construct($dia,$mes,$ano){         
            $this->numero= $dia;
            $this->diaSemana = jddayofweek( cal_to_jd(CAL_GREGORIAN, $mes,$dia,$ano) , 0 );
   }
    public  function setNumero($numero){
        $this->numero = $numero;
             
    }
    public function semana($dia,$mes,$ano){
        $diaSemana = jddayofweek( cal_to_jd(CAL_GREGORIAN, $mes,$dia,$ano) , 0 );
        return $diaSemana;   
    }
    
    public function getNumero(){
        return $this->numero;
        
    }
    public function getDiaSemana() {
        return $this->diaSemana;
    }

   
}


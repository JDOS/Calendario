<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mes
 *
 * @author Daniel
 */
class Mes {
    
    private $dias;    
    
    
    public function __construct($mes, $ano){
        
         $i=1;
         $numerodiames= array(
            '1'=>31,
            '2'=>28,
            '3'=>31,
            '4'=>30,
            '5'=>31,
            '6'=>30,
            '7'=>31,
            '8'=>31,
            '9'=>30,
            '10'=>31,
            '11'=>30,
            '12'=>31
          );
         
    
        while($i<=$numerodiames[$mes]){
           // print '<br>'.$mes;
           // print '<br>'.$i;
            $this->dias[]=$this->createDia($i, $mes, $ano);
            $i++;
        }
                   
      }
    
    public function createDia($dia, $mes,$ano){
        $dia = new Dia($dia, $mes, $ano);
        return $dia;
    }
    
    public function getDias(){
        $i=0;
        while ($i<count($this->dias)){
            $dia=$this->dias[$i]->getNumero();
            $semana=$this->dias[$i]->getDiaSemana();
            $dias[$i]['numero']=$dia;
            $dias[$i]['semana']=$semana;
       
            $i++;
        }

        return $dias;
       
    }
  public function getDia($dia){
      foreach ($this as $mes=>$x)
          if($x['numero'] == $dia){
              echo '<br>'.$dia['numero'];
              echo '<br>'.$dia['semana'];
              
          }
       
  }
}

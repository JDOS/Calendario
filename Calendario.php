<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of calendario
 *
 * @author Daniel
 */

class Calendario {
   private $ano;
   private $meses;
   private $semana= array(
            0=>'Domingo',
            1=>'Segunda',
            2=>'Terça',
            3=>'Quarta',
            4=>'Quinta',
            5=>'Sexta',
            6=>'Sábado',    
        );


   public function __construct($ano) {
       $this->ano = $ano;
       $i=1;
       while($i<=12){
       $meses[]=new Mes($i, $ano); 
       $i++;
   }
}

   
    public function table($data){
        $style = " width:100%; border: 1px solid black";
        $table='';
        $table.= '<table style="'.$style.'">'.$data.'</table>';
        return $table;
        
    }
         
    
    public function mostrarMes($mes){
        $i=0;
        $data ='';
        $mes=new Mes($mes, $this->ano);
        $dias = $mes->getDias();
        $j=0;
        while($j<7){
              
                $data.="<td>";
                $data.=$this->semana[$j];
                $data.="</td>"; 
                $j++;
                
        }  
        
        $j=0;
       
        while($i<count($dias)){
           // echo '<br> i'.$i;
           // echo '<br> j'.$j;
            $data.="<tr>";
            $j=0;
            while($j<7){  
              if(($i<count($dias))&&($dias[$i]['semana']==$j)){
               
                    $data.="<td>";
                    $data.=$dias[$i]['numero'];
                    $data.="</td>"; 
                    $i++;          
              }
               else{
                   $data.="<td>";
                   $data.="";
                   $data.="</td>"; 
               }
            $j++;
            }
            $data.="</tr>";
        }
        
        $table=$this->table($data);
        
        echo $table;
        
           
    }
}
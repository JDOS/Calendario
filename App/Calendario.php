<?php
include_once 'Mes.php';
include_once 'Dia.php';
include_once 'GeradorHTML\Table.php';
include_once 'GeradorHTML\Elemento.php';;
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
   private $style;
   //$this->[$i[0..6]][$tipo[0,1,2]] 
   
   private $semana = array(
            0=>array('Domingo',
                     'Dom',
                     'D'
                ),
            1=>array('Segunda',
                    'Seg',
                    'S'
                ),
            2=>array('Terça',
                    'Ter',
                    'T'
                ),
            3=>array('Quarta',
                    'Qua',
                    'Q'
                ),
            4=>array('Quinta',
                    'Qui',
                    'Q'
                ),
            5=>array('Sexta',
                    'Sex',
                    'S'
                ),
            6=>array('Sábado',
                    'Sab',
                    'S'
                ),
   );

   public function __construct($ano) {
       $this->ano = $ano;
       $i=1;
       while($i<=12){
       $meses[]=new Mes($i, $ano); 
       $i++;
       }
    }
    
   
    public function mostrarMes($mes){
        $tipo=2;
        //Cria Mes do Ano do calendário
        $mes = new Mes($mes, $this->ano);
        //Obtem os dias
        $dias = $mes->getDias();
        
        $table = new Table();
        //Criando Título
        $titulo = new Elemento('caption');
        $titulo->class='mes';
        $titulo->add($mes->getMes());
        $table->add($titulo);
        
       // $table->style = 'margin:10px; border: 1px solid black;';
        //instancia o cabeçalho na tabela
        $cabecalho = $table->addLinha();
        $cabecalho->class = 'cabecalho';
        
        //adiciona dias da semana na linha do cabeçalho
              
        $i = 0;
        while($i<7){
                $cabecalho->addCell($this->semana[$i][$tipo]);
                $i++;
        }  
        
        //Adicionando dias no Mes
        $i=0;
        //Semanas
        while($i<count($dias)){
            $linha = $table->addLinha();
            
            $j=0;
            //Dias
            while($j<7){  
              if(($i<count($dias))&&($dias[$i]['semana']==$j)){
                    
                    $cell=$linha->addCell($dias[$i]['numero']);
                    $i++;          
                    //Verifica se é domingo
                    if($j==0){
                        $cell->class='domingo';
                    }
                    //VErifica se é sábado
                    if($j==6){
                      $cell->class='sabado';
                    }
              }
               else{
                   $linha->addCell("");
               }
            $j++;
            }
    
        }
            
        
        //Mostrando Calendário
        $div = new Elemento('div');
        $div->class='calendario';
   
        
        $div->add($table);
        $div->mostrar();
       
       
           
    }
    
    public function mostrarCalendario(){
        echo '<h1>'.$this->ano.'</h1>';
        $i=1;
        while($i<=12){
            $this->mostrarMes($i);
             $i++;
        }
    }
}
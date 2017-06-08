<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates 
 * and open the template in the editor.
 */

/**
 * Description of Elemento
 *  Classe para criar tags HTML, para utilizar em conjunto com PHP
 *  Cria TAG com:
 *     $tag= new Elemento(TAG)
 *  Inserem-se propriedades com:
 *      $tag->nomepropriedade = valor
 *  Obtem-se propriedades com:
 *      $tag->nomepropriedade
 *  Mostra TAG com:
 *      $tag->mostrar()
 * @author Daniel
 */
class Elemento {
    protected $tagname;
    protected $propriedade;
    protected $filhos;
    
    public function __construct($nome) {
        $this->tagname = $nome;       
    }
    
    public function __set($nome, $valor){
        //Adiciona uma propriedade com nome e um valor
        $this->propriedade[$nome] = $valor;
        
    }
    
    public function __get($nome) {
        //verifica se existe a propriedade, caso sim retorna, caso não retorna NULL
        return isset($this->propriedade[$nome])? $this->propriedade[$nome]:NULL;
    }
    
    public function add($filho){
        $this->filhos[]=$filho;
    }
    
    public function mostrar(){
        echo "\n";
        $this->abrir();
      
        //Verifica se tem filhos
        if ($this->filhos){
            foreach($this->filhos as $filho){
                //verifica se o filho é um objeto
                if(is_object($filho)){
                    $filho->mostrar();
                }
                else if ((is_string($filho) or (is_numeric($filho)))){
                    echo $filho;
                            
                }
            }
            //termina TAG
            $this->fechar();
                   
        }
    }
    
    /*
     * Função abre TAG e insere suas propriedades
     */
    private function abrir(){
        //exibe a tag de abertura
        echo "<{$this->tagname}";
        //verifica se existe propriedade
        if($this->propriedade){
            //percorre as propriedades
            foreach($this->propriedade as $nome => $valor){
                //verifica se é do tipo escalar (string, integer, float ou boolean)
                if (is_scalar($valor)){
                    //insesre as propriedades na tag
                    echo " {$nome} = \"{$valor}\" ";
                }
            }
        }
        //fecha tag
        echo ">";
    }
    
    private function fechar(){
        //termina a tag
        echo "</{$this->tagname}>";
        echo "\n";
    }
    
    /*
     * Função torna o Objeto Elemento em String caso:
     * print $ELEMENTO
     */
    public function __toString() {
        ob_start();//começa armazenar o conteudo em um buffer
        $this->mostrar();//armazena no buffer a saída de mostrar() 
        $conteudo = ob_get_clean();//despeja o buffer na variavel $conteudo e limpa buffer
        return $conteudo;
    }
    
}

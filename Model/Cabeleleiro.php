<?php

Class Cabeleleiro{
    /**
    * @var ca_ukey
    */
    private $ca_ukey;
    /**
    * @var ca_nome
    */
    private $ca_nome;
    
    /**
     * 
     * Getter and Setters
     */
    public function getUkey(){
        return $this->ca_ukey;
    }
    public function getNome(){
        return $this->ca_nome;
    }
    public function setUkey($ukey){
        $this->ca_ukey = $ukey;
    }
    public function setNome($nome){
        $this->ca_nome = $nome;
    }
}   
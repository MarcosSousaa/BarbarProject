<?php
include_once '../Model/Cabeleleiro.php';
require_once '../config.php';
require_once DBAPI;

/**
 * Classe CabeleleiroDAO 
 * Contem os métodos de persistencia com banco de dados mysql
 */
Class CabeleleiroDAO{
    /**
    * @var $pdo
    */
    private $pdo;
    
    /**
    * @method __construct
    */
    public function __construct() {
        $this->pdo = Database::init();
    }
    
    public function cadCab(Cabeleleiro $cabeleleiro){        
        try{
            $sql = "INSERT INTO CABELELEIROS(ca_nome) VALUES(:nome)";
            $query = $this->pdo->prepare($sql);
            //VAL
            $nome = $cabeleleiro->getNome();
            $query->bindParam("nome",$nome);
            $query->execute();
            if($query->rowCount() == 1){
                return true;
            }
            return false;
            
            
        } catch (Exception $ex) {

        }
    }
}

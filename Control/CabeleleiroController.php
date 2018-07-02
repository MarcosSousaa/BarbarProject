<?php
    require_once '../DAO/CabeleleiroDAO.php';
    require_once '../Model/Cabeleleiro.php';

Class CabeleleiroController{
    /**
    * @throws Exception
    * @var cabeleleirooDao
    */
    private $cabeleleiroDAO;
    /**
    * @throws Exception
    * @var cabeleleiroModel
    */
    private $cabeleleiroModel;
    /**
    * @method __construct
    */
    public function __construct(){
        $this->cabeleleiroDAO = new CabeleleiroDAO();     	
    }
    
    /**
     * @method Cadastro
     *  Método responsavel pelo cadastro de Cabeleleiros/Barbeiros no BD
     */
    public function cadCab(){
        $this->cabeleleiroModel = new Cabeleleiro();
        $this->cabeleleiroModel->setNome($_POST['nome']);
        
        
        
        if($this->cabeleleiroDAO->cadCab($this->cabeleleiroModel)){
            echo "true";
            return;
        }
        echo "false";
        return;
    }

}    
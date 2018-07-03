<?php
	require_once '../DAO/UsuarioDAO.php';
	require_once '../Model/Usuario.php';

Class UsuarioController{
	/**
	* @throws Exception
	* @var usuarioDao
	*/
	private $usuarioDAO;
	/**
	* @throws Exception
	* @var usuarioModel
	*/
	private $usuarioModel;

	 /**
     * @method __construct
     */
     public function __construct(){
     	$this->usuarioDAO = new UsuarioDAO();     	
     }

     /**
     * @method doLogin
     * Método responsável por realizar o login do usuario
     */
     public function doLogin(){
     	$this->usuarioModel = new Usuario();
        $this->usuarioModel->setEmail($_POST['usuario']);                
        $this->usuarioModel->setChar($_POST['senha']);
     	
     	 // Chamamos o método doLogin de usuarioDAO. Esse método retorna booleano por isso,
        // podemos usá-lo como condição no if.
        // Caso seja true, daremos um echo em true para que o javascript visualize esse retorno
        if($this->usuarioDAO->doLogin($this->usuarioModel)){
        	echo "true";
        	return;
        }
        // Caso o método doLogin retorne falso, daremos um echo false para retornar ao javascript.
        echo "false";
        return;
     }
     
    public function listAll(){
        $resultado = $this->usuarioDAO->listAll();             
        return json_encode($resultado);
         
    }
 }
